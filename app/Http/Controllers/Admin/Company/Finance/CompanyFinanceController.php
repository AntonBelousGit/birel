<?php

namespace App\Http\Controllers\Admin\Company\Finance;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyFinance;
use App\Models\CompanyFinanceInfo;
use App\Service\CompanyService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyFinanceController extends Controller
{

    protected $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index($id)
    {
        $company_finances_info = $this->companyService->getAllFinancesInfo($id);
        return view('admin.company.finance.index',compact('company_finances_info','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Company $company)
    {
        return view('admin.company.finance.create',compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if(!empty(array_filter($request->input('info')))){
            dd('не пусто');
        }
        dd('пусто');

    }

    /**
     * Display the specified resource.
     *
     * @param CompanyFinance $companyFinance
     * @return void
     */
    public function show(CompanyFinance $companyFinance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return void
     */
    public function edit(Company $company,CompanyFinance $companyFinance)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param CompanyFinance $companyFinance
     * @return Response
     */
    public function update(Request $request, CompanyFinance $companyFinance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CompanyFinance $companyFinance
     * @return Response
     */
    public function destroy(CompanyFinance $companyFinance)
    {
        //
    }
}
