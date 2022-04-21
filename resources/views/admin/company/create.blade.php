@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Create Company</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
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
                        <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control" name="companyName" placeholder="Company Name"
                                       value="{{old('companyName')}}">
                            </div>
                            <div class="form-group">
                                <label for="">Company Address</label>
                                <input type="text" class="form-control" name="companyAddress"
                                       placeholder="Company Address" value="{{old('companyAddress')}}">
                            </div>

                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" placeholder="Description">{{old('description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Valuation</label>
                                <input type="number" class="form-control" min="0" name="valuation"
                                       placeholder="Valuation" value="{{old('valuation')}}">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="file" placeholder="Image">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Categories</label>
                                </div>
                                <select name="category_id[]" class="custom-select" multiple required>
                                   @foreach($categories as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                                </div>
                                <select name="status" class="custom-select">
                                    <option value="0" @if (old('status') === '0') selected @endif>Inactive</option>
                                    <option value="1" @if (old('status') === '1') selected @endif>Active</option>
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
