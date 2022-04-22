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
            $total_funding = encode_bigNumber($request['total_funding_decode']);
            $company = Company::create($request + ['image' => $name,'total_funding'=> $total_funding]);
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }
        return $company;
    }
    public function update($request, $category, $name)
    {
        try {
            $total_funding = encode_bigNumber($request['total_funding_decode']);
            $category->update($request + ['image' => $name,'total_funding'=> $total_funding]);
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }
        return $category;
    }
}
