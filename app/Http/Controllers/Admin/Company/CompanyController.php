<?php

namespace App\Http\Controllers\Admin\Company;

use App\Action\Company\SyncDependentsCompanyAction;
use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyAdminRequest;
use App\Models\Company;
use App\Models\Setting;
use App\Service\CategoryService;
use App\Service\CompanyService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    private $storage;
    protected $companyService;
    protected $categoryService;
    private $setting;

    public function __construct(Request $request, CompanyService $companyService, CategoryService $categoryService)
    {
        $this->companyService = $companyService;
        $this->categoryService = $categoryService;
        $company_id = $request->route('company');
        $this->setting = Setting::where('setting_name', 'company')->first();
        $this->storage = new StorageHelper('image', 'companies', $request->file('file'), Company::find($company_id));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {


        dd($this->get_number_with_letters(500001000));

        $companies = $this->companyService->getAllCompanies();
        $setting = $this->setting;
        return view('admin.company.index', compact('companies', 'setting'));
    }


    public function get_number_with_letters($n)
    {
        $n = (float)$n;

        if ($n <= 9999 and $n >= -9999) {
            $format = number_format($n, 0, '.', '');
        } else if ($n <= 999999 and $n >= -999999) {
            $format = number_format($n / 1e3, 2, '.', '') + 0 . 'К';
        } else if ($n <= 999999999 and $n >= -999999999) {
            $format = number_format($n / 1e6, 2, '.', '') + 0 . 'М';
        } else {
            $format = number_format($n / 1e9, 2, '.', '') + 0 . 'B';
        }
        return $format;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('admin.company.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCompanyAdminRequest $request
     * @param SyncDependentsCompanyAction $action
     * @return RedirectResponse
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
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $categories = $this->categoryService->getAllCategories();
        $company = $this->companyService->getCompanyWithCategories($id);
        return view('admin.company.edit', compact('company', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreCompanyAdminRequest $request
     * @param Company $company
     * @param SyncDependentsCompanyAction $action
     * @return RedirectResponse
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
     * @param Company $company
     * @return RedirectResponse
     */
    public function destroy(Company $company)
    {
        $this->storage->destroyImage();
        $company->delete();
        return redirect()->route('company.index');
    }
}
