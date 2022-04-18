<?php

namespace App\Http\Controllers\Admin\Company\Finance;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyFinanceRequest;
use App\Models\Company;
use App\Models\CompanyFinance;
use App\Models\CompanyFinanceInfo;
use App\Service\CompanyService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Throwable;

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
        return view('admin.company.finance.index', compact('company_finances_info', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Company $company)
    {
        return view('admin.company.finance.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Company $company
     * @param CompanyFinanceRequest $companyFinanceRequest
     * @return RedirectResponse
     */
    public function store(Company $company, CompanyFinanceRequest $companyFinanceRequest)
    {

        $companyFinance = (new CompanyFinance())->create($companyFinanceRequest->validated() + ['company_id' => $company->id]);

        if (!empty(array_filter($companyFinanceRequest->info))) {
            (new CompanyFinanceInfo())->create($companyFinanceRequest->info + ['company_finance_id' => $companyFinance->id]);
        }

        return redirect()->route('company.id.financing', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return void
     */
    public function edit(Company $company, $companyFinance)
    {
        $finance = CompanyFinance::with('info')->find($companyFinance);

        return view('admin.company.finance.edit', compact('company', 'finance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CompanyFinanceRequest $companyFinanceRequest
     * @param Company $company
     * @param $companyFinance
     * @return RedirectResponse
     */
    public function update(CompanyFinanceRequest $companyFinanceRequest, Company $company, $companyFinance)
    {

        $finance = CompanyFinance::with('info')->find($companyFinance);
        try {

            if ($company->id === $finance->company_id) {

                $finance->update($companyFinanceRequest->validated());

                if (is_null($finance->info)) {
                    (new CompanyFinanceInfo())->create($companyFinanceRequest->info + ['company_finance_id' => $finance->id]);
                } else {
                    $finance->info->update($companyFinanceRequest->info);
                }

                return redirect()->back();
//                return redirect()->route('company.id.financing', $company);
            }

        } catch (Throwable $e) {
            report($e);
            abort(500);
        }

        return redirect()->back();
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
