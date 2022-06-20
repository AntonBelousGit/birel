@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-add-order.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/pages/page-lc-edit-order-ask.min.js')}}" type="module"></script>

@endsection


@section('content')
    <div class="add-order" id="tabs">
        <ul class="tab-wrapper nav-tabs w210">
            <li class="t-m f18-l32 purple1 tab-n active">
                ASK
            </li>
        </ul>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
        @include('lc.order.components.ask&bid-edit-component',
            [
                'type'=>"ASK",
                'active'=>'active',
                'id'=>'tabs_ask',
                'share_type'=>'share_type_ask',
                'share_type2'=>'share_type_ask2',
                'share_price'=>'share_price_ask',
                'share_number'=>'share_number_ask',
                'volume'=>'volume_ask',
                'share_number2'=>'share_number_ask2',
                'share_type_currency1' => 'share_type_currency_ask1',
                'share_type_currency2' => 'share_type_currency_ask2',
                'volume2' => 'volume_ask2',
                'btn_calc' => 'btn_calc_ask',
            ])
        {{--        @include('lc.order.components.looking-component',['id'=>'tabs2-looking'])--}}
    </div>
@endsection



