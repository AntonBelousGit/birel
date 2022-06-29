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
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Table <small>Basic example without any additional modification classes</small></h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>

                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Order left</th>
                                        <th>Foundation fund name</th>
                                        <th>Fund address</th>
                                        <th>Linkedin</th>
                                        <th>User Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Order left</th>
                                        <th>Foundation fund name</th>
                                        <th>Fund address</th>
                                        <th>Linkedin</th>
                                        <th>User Type</th>
                                        <th>Action</th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @forelse($users as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->surname}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->active_order}}</td>
                                            <td>{{$item->type}}</td>
                                            <td>{{$item->fund_address}}</td>
                                            <td>{{$item->fund_name}}</td>
                                            <td>{{$item->linkedin}}</td>
                                            <td>
                                                <a href="{{ route('users.edit',$item->id) }}">Edit</a>
                                                <form action="{{route('users.destroy',$item)}}" class="d-inline" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                            data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse
                                    </tbody>
                                </table>
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
