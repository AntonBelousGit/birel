@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Create User</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">Jquery Datatable</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="form-control">
                        <form action="{{ route('company.update',$company) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <input type="text" class="form-control" name="companyName" placeholder="Company Name"
                                       value="{{$company->companyName}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="companyAddress"
                                       placeholder="Company Address" value="{{$company->companyAddress}}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description"
                                          placeholder="Description">{{$company->description}}</textarea>
                            </div>
                            <div class="form-group">
<<<<<<< Updated upstream
                                <input type="number" class="form-control" min="0"  name="valuation"
=======
                                <input type="number" class="form-control" min="0" step="0.01" name="valuation"
>>>>>>> Stashed changes
                                       placeholder="Valuation" value="{{$company->valuation}}">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" name="file" placeholder="Image">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Categories</label>
                                </div>
                                <select name="category_id[]" class="custom-select" multiple required>
                                    @foreach($categories as $item)
                                        <option value="{{$item->id}}" @if($company->category->pluck('id')->contains($item->id)) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                                </div>
                                <select name="status" class="custom-select">
                                    <option value="0" @if ($company->status === 0) selected @endif>Inactive</option>
                                    <option value="1" @if ($company->status === 1) selected @endif>Active</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
