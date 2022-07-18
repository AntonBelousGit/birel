@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Edit Company</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <a href="{{ route('company.create') }}" class="btn btn-sm btn-primary" title="">Create New</a>
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
                                <label for="companyName">Company Name</label>
                                <input type="text" class="form-control" name="companyName" placeholder="Company Name"
                                       value="{{$company->companyName}}" id="companyName">
                            </div>
                            <div class="form-group">
                                <label for="companyAddress">Company Address</label>
                                <input type="text" class="form-control" name="companyAddress"
                                       placeholder="Company Address" value="{{$company->companyAddress}}" id="companyAddress">
                            </div>
                            <div class="form-group">
                                <label for="total_funding">Total Funding</label>
                                <input type="text" class="form-control" name="total_funding_decode"
                                       placeholder="Total Funding" value="{{$company->total_funding_decode}}" id="total_funding">
                            </div>
                            <div class="form-group">
                                <label for="founded">Company Founded</label>
                                <input type="date" class="form-control" name="founded" placeholder="Date" value="{{$company->founded->format('Y-m-d')}}" id="founded">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description"
                                          placeholder="Description" id="description">{{$company->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="valuation">Valuation</label>
                                <input type="number" class="form-control" min="0" step="0.01" name="valuation"
                                       placeholder="Valuation" value="{{$company->valuation}}" id="valuation">
                            </div>
                            <div class="form-group">
                                <label for="file">Image</label>
                                <input type="file" class="form-control" name="file" placeholder="Image" id="file">
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
                                    <option value="0" @if ($company->status == 0) selected @endif>Inactive</option>
                                    <option value="1" @if ($company->status == 1) selected @endif>Active</option>
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
