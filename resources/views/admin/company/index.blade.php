@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Jquery Datatable</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">Jquery Datatable</li>
                    </ul>
                    <a href="{{ route('company.create') }}" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Table <small>Basic example without any additional modification classes</small>
                            </h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li><a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i
                                                class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i
                                                class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Company Address</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Valuation</th>
                                        <th>Valuation</th>
                                        <th>Status</th>
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
                                        <th>Valuation</th>
                                        <th>Status</th>
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
                                            <td>{{number_format($item->valuation,2)}}</td>
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
                            <div>
                                <form action="#" method="post" enctype="#">
                                    <div class="form-group">
                                        <textarea class="form-control" name="description" placeholder="Description">
                                        </textarea>
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
