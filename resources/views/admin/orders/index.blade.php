@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Orders</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>User</th>
                                        <th>Date</th>
                                        <th>Share type</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Company</th>
                                        <th>User</th>
                                        <th>Date</th>
                                        <th>Share type</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @forelse($orders as $item)
                                        <tr>
                                            <td>{{$item->company->companyName}}</td>
                                            <td>{{$item->user->name}}</td>
                                            <td>{{$item->date ?? '-'}}</td>
                                            <td>{{$item->share_type }}</td>
                                            <td>{{$item->type }}{{($item->sub_type)?'|'.$item->sub_type:''}}</td>
                                            <td>{{$item->status }}</td>
                                            <td>
                                                <a href="{{ route('orders.edit',$item) }}">Edit</a>
                                                <a href="/chatify/{{$item->user_id}}">
                                                    <i class="icon-envelope" aria-hidden="true"></i>
                                                </a>
                                                <form action="{{route('orders.destroy',$item)}}" class="d-inline"
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
