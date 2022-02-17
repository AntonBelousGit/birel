<?php

namespace App\Http\Controllers\Admin\Company;

use App\Action\Company\SyncDependentsCompanyAction;
use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyAdminRequest;
use App\Models\Company;
use App\Service\CategoryService;
use App\Service\CompanyService;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    private $storage;
    protected $companyService;
    protected $categoryService;

    public function __construct(Request $request, CompanyService $companyService, CategoryService $categoryService)
    {
        $this->companyService = $companyService;
        $this->categoryService = $categoryService;
        $company_id = $request->route('company');
        $this->storage = new StorageHelper('image', 'companies', $request->file('file'), Company::find($company_id));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->companyService->getAllCompanies();
        return view('admin.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('admin.company.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCompanyAdminRequest $request, SyncDependentsCompanyAction $action)
    {
        $name = $this->storage->saveImage();
        $company = $this->companyService->store($request, $name);
        $action->handle($company, $request['category_id']);
        return redirect()->route('company.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories = $this->categoryService->getAllCategories();
        $company = $this->companyService->getCompanyWithCategories($id);
        return view('admin.company.edit', compact('company','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreCompanyAdminRequest $request, Company $company, SyncDependentsCompanyAction $action)
    {
        $name = $this->storage->saveImage();
        $companyUpdated = $this->companyService->update($request, $company, $name);
        $action->handle($companyUpdated, $request['category_id']);
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Company $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Company $company)
    {
        $this->storage->destroyImage();
        $company->delete();
        return redirect()->route('company.index');
    }
}
