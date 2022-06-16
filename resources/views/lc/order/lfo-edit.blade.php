@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-add-order.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/pages/page-lc-edit-order-looking.min.js')}}" type="module"></script>

@endsection



@section('content')
    <div class="add-order" id="tabs">
        <ul class="tab-wrapper nav-tabs w210">
            <li class="t-m f18-l32 purple1 tab-n active">
                LFO
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
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
{{--        @include('lc.order.components.ask&bid-edit-component',--}}
{{--            [--}}
{{--                'type'=>"BID",--}}
{{--                'active'=>'active',--}}
{{--                'id'=>'tabs_bid',--}}
{{--                'share_type'=>'share_type_bid',--}}
{{--                'share_type2'=>'share_type_bid2',--}}
{{--                'share_price'=>'share_price_bid',--}}
{{--                'share_number'=>'share_number_bid',--}}
{{--                'volume'=>'volume_bid',--}}
{{--                'share_number2'=>'share_number_bid2',--}}
{{--                'share_type_currency1' => 'share_type_currency_bid1',--}}
{{--                'share_type_currency2' => 'share_type_currency_bid2',--}}
{{--                'volume2' => 'volume_bid2',--}}
{{--                'btn_calc' => 'btn_calc_bid',--}}
{{--            ])--}}
        @include('lc.order.components.looking-edit-component',['id'=>'tabs2-looking'])
    </div>
@endsection
