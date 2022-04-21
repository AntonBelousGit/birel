<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWatchlistRequest;
use App\Http\Resources\CompanyFinanceInfoResource;
use App\Models\Company;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Watchlist;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompanyRequest;
use Illuminate\Http\Response;
use Throwable;

class CompanyController extends Controller
{
    private $setting;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->setting = Setting::where('setting_name', 'company')->first();
    }

    public function index()
    {
        $categories = Category::all();
        $companies = Company::with('category','wali')->status()->orderByDesc('created_at')->paginate(16,['*'],'companies')->withQueryString();
        $watchlist = Watchlist::where('user_id', auth()->id())->with('company.category')->paginate(16,['*'],'watchlist')->withQueryString();
        $setting = $this->setting;
        return view('lc.companies', compact('companies', 'categories', 'watchlist','setting'));
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
     * @param Company $company
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $company = Company::with('finance')->find($id);
        $check_isset = Watchlist::where(['user_id' => auth()->id(), 'company_id' => $id])->first(['id','type']);
        return view('lc.page-lc-one-company', compact('company','check_isset'));
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
