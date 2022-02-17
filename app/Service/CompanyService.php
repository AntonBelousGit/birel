<?php


namespace App\Service;


use App\Models\Company;
use App\Repositories\CompanyRepository;
use Throwable;

class CompanyService
{
    protected $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function getAllCompanies()
    {
        return $this->companyRepository->getAllCompanies();
    }

    public function getCompanyWithCategories($id)
    {
        return $this->companyRepository->getCompanyWithCategories($id);
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
