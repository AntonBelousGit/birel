<?php


namespace App\Service;


use App\Models\Company;
use App\Repositories\CompanyFinanceRepository;
use App\Repositories\CompanyRepository;
use Throwable;

class CompanyService
{
    protected $companyRepository;
    protected $companyFinanceRepository;

    public function __construct(CompanyRepository $companyRepository, CompanyFinanceRepository $companyFinanceRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->companyFinanceRepository = $companyFinanceRepository;
    }

    public function getAllCompanies()
    {
        return $this->companyRepository->getAllCompanies();
    }

    public function getCompanyWithCategories($id)
    {
        return $this->companyRepository->getCompanyWithCategories($id);
    }

    public function getAllFinancesInfo($id)
    {
        return $this->companyFinanceRepository->getAllFinancesInfo($id);
    }

    public function store($request, $name)
    {
        try {
            $company = Company::create([
                'companyName' => $request->input('companyName'),
                'companyAddress' => $request->input('companyAddress'),
                'image' => $name,
                'description' => $request->input('description'),
                'valuation' => $request->input('valuation'),
                'status' => $request->input('status'),
            ]);
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }
        return $company;
    }
    public function update($request, $category, $name)
    {
        try {
            $category->update([
                'companyName'=> $request->input('companyName'),
                'companyAddress' => $request->input('companyAddress'),
                'image' => $name,
                'description' => $request->input('description'),
                'valuation'=> $request->input('valuation'),
                'status' => $request->input('status'),
            ]);
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }
        return $category;
    }
}
