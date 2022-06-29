@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Company Datatable</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <a href="{{ route('company.create') }}" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All Company Base</small>
                            </h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li><a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i
                                                class="icon-refresh"></i></a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom container-fluid">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Company Address</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Valuation</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Company Address</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Valuation</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @forelse($companies as $item)
                                        <tr>
                                            <th>{{$loop->iteration}}</th>
                                            <td>{{$item->companyName}}</td>
                                            <td>{{$item->companyAddress}}</td>
                                            <td><img src="{{asset('storage/companies/'.$item->image)}}" alt="" style="max-height:50px"></td>
                                            <td>{{Str::of($item->description)->words(5)}}</td>
                                            <td>{{$item->valuation_encode}}</td>
                                            <td>{{$item->status? 'active':'inactive'}}</td>
                                            <td>
                                                <a href="{{ route('company.edit',$item) }}">Edit</a>
                                                <a href="{{ route('company.id.financing',$item) }}">Financing</a>
                                                <form action="{{route('company.destroy',$item)}}" class="d-inline"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                            data-toggle="tooltip" data-original-title="Remove"><i
                                                                class="icon-trash" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-30">
{{--                                @dd($setting->attribute_name)--}}
                                <form action="{{ route('setting-update',['setting'=>'company']) }}" method="post">
                                    @csrf()
                                    @method('patch')
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="attribute_name[description]" placeholder="Description" rows="3" id="description">{{$setting->attribute_name['description']}}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('admin_panel/bundles/datatablescripts.bundle.js')}}"></script>
    <script src="{{asset('admin_panel/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('admin_panel/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection
