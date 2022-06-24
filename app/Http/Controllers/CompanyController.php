<?php

namespace App\Http\Controllers;

use App\Action\Filter\GetFilteredCompanyAction;
use App\Action\Filter\SetFilterAction;
use App\Http\Filters\CompanyFilter;
use App\Http\Requests\Filter\OneCompanyFilterRequest;
use App\Http\Requests\Orders\FilterRequest;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\StoreWatchlistRequest;
use App\Http\Resources\CompanyFinanceInfoResource;
use App\Models\Category;
use App\Models\Company;
use App\Models\Setting;
use App\Models\Watchlist;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Throwable;

class CompanyController extends Controller
{
    private $setting;

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setting = Setting::where('setting_name', 'company')->first();
    }

    /**
     * @param FilterRequest $request
     * @param SetFilterAction $action
     * @param GetFilteredCompanyAction $companyAction
     * @return Application|Factory|View
     */
    public function index(FilterRequest $request, SetFilterAction $action, GetFilteredCompanyAction $companyAction)
    {

        $data = $request->all();
        $categories = Category::all();
        $companies = $companyAction->handle($action->handle(CompanyFilter::class, $data));
        $watchlist = Watchlist::where('user_id', auth()->id())->with('company.category','company.orders')->paginate(16, ['*'], 'watchlist')->withQueryString();
        $setting = $this->setting;
        return view('lc.companies', compact('companies', 'categories', 'watchlist', 'setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('lc.addcompany');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCompanyRequest $request
     * @return RedirectResponse
     */
    public function store(StoreCompanyRequest $request)
    {
        Company::create($request->validated());
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @param OneCompanyFilterRequest $request
     * @return Application|Factory|View
     */
    public function show($id, OneCompanyFilterRequest $request)
    {
        $data = $request->all();
        $company = Company::find($id);
        $queryOrders = $company->orders();

        if (isset($data['type']) && $data['type'] !== '--') {
            $queryOrders->where('type', $data['type']);
        }
        if (isset($data['sort']) && $data['sort'] === 'Data') {
            $queryOrders->orderByDesc('publish_time');
        }
        if (isset($data['sort']) && $data['sort'] === 'Type') {
            $queryOrders->orderByDesc('share_type');
        }
        if (!isset($data['sort']) && !isset($data['type'])) {
            $queryOrders->orderByDesc('created_at');
        }
        $company->setRelation('orders', $queryOrders->paginate(10, ['*'], 'orders')->withQueryString());
        $company->setRelation('finance', $company->finance()->paginate(10, ['*'], 'finance')->withQueryString());
        $check_isset = Watchlist::where(['user_id' => auth()->id(), 'company_id' => $id])->first(['id', 'type']);
        return view('lc.page-lc-one-company', compact('company', 'check_isset'));
    }

    public function getFinance($company, Request $request)
    {
        try {
            $result = Company::where('id', $company)->with('finance', function ($q) use ($request) {
                $q->where('id', $request->input('id'))->with('info');
            })->first();

            $response = $result->finance->first()->info;
            if ($response) {
                return new CompanyFinanceInfoResource($response);
            }
            return response()->json(['message' => 'Not Found!'], 404);
        } catch (Throwable $e) {
            report($e);
            return response()->json(['message' => 'Not Found!'], 404);
        }
    }

    public function wali(StoreWatchlistRequest $request)
    {
        $data = $request->validated();
        $check_isset = Watchlist::where(['user_id' => auth()->id(), 'company_id' => $data['company_id']])->count();

        if ($check_isset) {
            return redirect()->back();
        }

        Watchlist::create([
            'user_id' => auth()->user()->id,
            'company_id' => $data['company_id'],
            'type' => $data['type'] ?? 'All',
        ]);

        return redirect()->back();
    }

    public function deleteWali($id, Request $request)
    {
        Watchlist::where(['user_id' => auth()->id(), 'company_id' => $request->input('company_id'), 'id' => $id])->delete();
        return redirect()->back();
    }
}
