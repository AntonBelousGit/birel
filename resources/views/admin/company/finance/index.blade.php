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
                    <a href="{{ route('company.id.financing.create',$id) }}" class="btn btn-sm btn-primary" title="">Create
                        New</a>
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

                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Transaction Name</th>
                                        <th>Amount Raised</th>
                                        <th>Raised To Date</th>
                                        <th>Issue Price</th>
                                        <th>Post Money Valuation</th>
                                        <th>Key Investors</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Transaction Name</th>
                                        <th>Amount Raised</th>
                                        <th>Raised To Date</th>
                                        <th>Issue Price</th>
                                        <th>Post Money Valuation</th>
                                        <th>Key Investors</th>
                                        <th>Status</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @forelse($company_finances_info as $item)
                                        <tr>
                                            <th>{{$loop->iteration}}</th>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->transaction_name}}</td>
                                            <td>{{$item->amount_raised_encode}}</td>
                                            <td>{{$item->raised_to_date_encode}}</td>
                                            <td>{{$item->issue_price}}</td>
                                            <td>{{$item->post_money_valuation_encode}}</td>
                                            <td>{{$item->key_investors}}</td>
                                            <td>
                                                <a href="{{ route('company.id.financing.edit',['company' => $id, 'companyFinance' => $item]) }}"> Edit </a>
{{--                                                <form action="{{route('company.destroy',$item)}}" class="d-inline"--}}
{{--                                                      method="POST">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button--}}
{{--                                                        class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"--}}
{{--                                                        data-toggle="tooltip" data-original-title="Remove"><i--}}
{{--                                                            class="icon-trash" aria-hidden="true"></i></button>--}}
{{--                                                </form>--}}
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
