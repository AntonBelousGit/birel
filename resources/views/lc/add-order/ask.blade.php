@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/lib/daterangepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-add-order.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/lib/moment.min.js')}}"></script>
    <script src="{{asset('js/lib/daterangepicker.min.js')}}"></script>
    <script src="{{asset('js/pages/page-lc-add-order.min.js')}}" type="module"></script>
    <script src="{{asset('js/pages/page-lc-add-order-ask.min.js')}}" type="module"></script>
    <script src="{{asset('js/pages/page-lc-add-order-looking.min.js')}}" type="module"></script>

@endsection


@section('content')
    <div class="add-order" id="tabs">
        <ul class="tab-wrapper nav-tabs w210">
            <li class="t-m f18-l32 purple1 tab-n active">
                ASK
            </li>
            <li class="t-m f18-l32 purple1 tab-n ">
                Looking for an offer
            </li>
        </ul>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('lc.add-order.components.ask&bid-component',['type'=>"ASK",'active'=>'active','id'=>'tabs2'])
        @include('lc.add-order.components.looking-component',['id'=>'tabs2-looking'])
    </div>
@endsection



