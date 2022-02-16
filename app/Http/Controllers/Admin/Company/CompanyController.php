<?php

namespace App\Http\Controllers\Admin\Company;

use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use App\Service\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    private $storage;
    protected $companyService;

    public function __construct(Request $request,CompanyService $companyService)
    {
        $this->companyService = $companyService;
        $company_id = $request->route('company');
        $this->storage = new StorageHelper('image','companies', $request->file('file'),Company::find($company_id));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->companyService->getAllCompanies();
        return view('admin.company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCompanyRequest $request)
    {
        $name = $this->storage->saveImage();
//        $name = md5(uniqid('', true)). '.'.$request->file('file')->getClientOriginalExtension();
//        Storage::putFileAs('/public',$request->file('file'),$name);
        Company::create([
            'companyName'=> $request->input('companyName'),
            'companyAddress' => $request->input('companyAddress'),
            'image' => $name,
            'description' => $request->input('description'),
            'valuation'=> $request->input('valuation'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('admin.company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Company $company)
    {
        $data = [
            'companyName'=> $request->input('companyName'),
            'companyAddress' => $request->input('companyAddress'),
            'description' => $request->input('description'),
            'valuation'=> $request->input('valuation'),
            'status' => $request->input('status'),
        ];

        $data['image'] = $this->storage->saveImage();

        $company->update($data);
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
