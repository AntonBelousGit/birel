<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWatchlistRequest;
use App\Models\Company;
use App\Models\Category;
use App\Models\Watchlist;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompanyRequest;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        $companies = Company::with('category')->paginate();
        $watchlist = Watchlist::where('user_id', auth()->id())->with('company.category')->get();
        return view('lc.companies', compact('companies', 'categories', 'watchlist'));
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
    public function show(Company $company)
    {
        return view('lc.one-company', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     * @return Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Company $company
     * @return Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Company $company
     * @return void
     */
    public function destroy(Company $company)
    {
        //
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
