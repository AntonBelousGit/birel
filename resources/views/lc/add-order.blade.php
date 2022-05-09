@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/lib/daterangepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-add-order.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/lib/moment.min.js')}}"></script>
    <script src="{{asset('js/lib/daterangepicker.min.js')}}"></script>
    <script src="{{asset('js/pages/page-lc-add-order.min.js')}}" type="module"></script>
    <script src="{{asset('js/pages/page-lc-add-order-all.min.js')}}" type="module"></script>
    <script src="{{asset('js/pages/page-lc-add-order-looking.min.js')}}" type="module"></script>
    <script src="{{asset('js/pages/page-lc-add-order-tender.min.js')}}" type="module"></script>
@endsection

@section('content')
    <div class="add-order" id="tabs">
        <ul class="tab-wrapper nav-tabs w400">
            <li class="t-m f18-l32 purple1 tab-n active">
                BID
            </li>
            <li class="t-m f18-l32 purple1 tab-n ">
                ASK
            </li>
            <li class="t-m f18-l32 purple1 tab-n ">
                Looking for an offer
            </li>
            <li class="t-m f18-l32 purple1 tab-n ">
                Tender
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

        @include('lc.add-order.components.ask&bid-component',
        [
            'type'=>"BID",
            'active'=>'active',
            'id'=>'tabs_bid',
            'share_type'=>'share_type_bid',
            'share_type2'=>'share_type_bid2',
            'share_price'=>'share_price_bid',
            'share_number'=>'share_number_bid',
            'volume'=>'volume_bid',
            'share_number2'=>'share_number_bid2',
            'share_type_currency1' => 'share_type_currency1_bid',
            'share_type_currency2' => 'share_type_currency2_bid',
            'volume2' => 'volume_bid2',
            ]
        )
        @include('lc.add-order.components.ask&bid-component',
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
          'share_type_currency1' => 'share_type_currency1_ask',
          'share_type_currency2' => 'share_type_currency2_ask',
          'volume2' => 'volume_ask2',
      ])
        <div class="content-t ">
            <form class="add-order-looking" action="#">
                <div class="looking">
                    <div class="looking-block c-n">
                        <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                        <p class="t-r f16-l24 purple2">You can select a company from the list of companies using
                            proposed or add your own.</p>
                        <div class="select">
                            <select id="theme23" class="js-example-basic-single w400">
                                <option value="0" selected>Choose</option>
                            </select>
                        </div>
                        <div class="looking-block-link">
                            <p class="t-r f14-l16 purple2">
                                You can add company if the company is not in the list.
                                <a class="" href="{{route('companies.create')}}">
                                    <i class="icon icon-green-circle-plus"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="looking-block o">
                        <h3 class="t-r f16-l24 purple1">What order do you want to add?</h3>
                        <div class="wrapper-radio3">
                            <div class="form_radio">
                                <label class="t-r f14-l16 purple1">
                                    <input type="radio" name="variant3" checked>
                                    <span></span>
                                    BID
                                </label>
                            </div>
                            <div class="form_radio">
                                <label class="t-r f14-l16 purple1">
                                    <input type="radio" name="variant3">
                                    <span></span>
                                    ASK
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="looking-block d-s">
                        <h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct , spv , forward contract or
                            primary round by selecting from the list.
                        </p>
                        <select id="theme33" class="js-example-basic-single w400">
                            <option value="0" selected>Choose</option>
                        </select>
                    </div>
                    <div class="looking-block s">
                        <h2 class="t-sb f22-l25 purple3">Description</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.</p>
                        <textarea class="i-f f14-l16 w400 h235" placeholder="Placeholder text"></textarea>
                    </div>
                    <div class="looking-block i" id="tabs2-looking">
                        <h2 class="t-sb f22-l25 purple3">Information</h2>
                        <ul class="nav-tabs">
                            <li class="t-m f18-l32 purple1 tab-n2 active">
                                Number shares
                            </li>
                            <li class="t-m f18-l32 purple1 tab-n2 ">
                                Block volume
                            </li>
                        </ul>
                        <div class="content-t2 active">
                            <!--				<div class="looking-prompt">-->
                            <!--					<p class="t-r f16-l24 purple2">-->
                            <!--						Текст-подсказка о том, что пользователь, выбирая BID, указывает предполагаемый объем сделки, а-->
                            <!--						выбирая ASK, указывает количество акций, которые хочет продать.-->
                            <!--					</p>-->
                            <!--				</div>-->
                            <!-- Этот кусок возможно не нужен пусть пока полежит  -->
                            <div class="looking-block-info">
                                <label class="t-r f16-l24 purple1" for="share_type3">
                                    Share Type
                                </label>
                                <select id="share_type3" class="js-example-basic-single w400">
                                    <option value="0" selected>Choose</option>
                                </select>
                            </div>
                            <div class="looking-block-info">
                                <label class="t-r f16-l24 purple1" for="share_number3">Share Number</label>
                                <input class="i-f w400" type="text" id="share_number3"
                                       placeholder="Placeholder number">
                            </div>
                        </div>
                        <div class="content-t2">
                            <!--				<div class="looking-prompt">-->
                            <!--					<p class="t-r f16-l24 purple2">-->
                            <!--						Текст-подсказка о том, что пользователь, выбирая BID, указывает предполагаемый объем сделки, а-->
                            <!--						выбирая ASK, указывает количество акций, которые хочет продать.-->
                            <!--					</p>-->
                            <!--				</div>-->
                            <!-- Этот кусок возможно не нужен пусть пока полежит  -->
                            <div class="looking-block-info">
                                <label class="t-r f16-l24 purple1" for="share_type23">Share Type</label>
                                <select id="share_type23" class="js-example-basic-single w400">
                                    <option value="0" selected>Choose</option>
                                </select>
                            </div>
                            <div class="looking-block-info">
                                <label class="t-r f16-l24 purple1" for="volume23">Block Volume Мн us </label>
                                <input class="i-f w400" type="text" id="volume23" placeholder="Placeholder">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-order-btn">
                    <button class="btn w265">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <div class="content-t ">
            <form class="add-order-tender" action="#">
                <div class="tender">
                    <div class="tender-block c-n">
                        <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                        <p class="t-r f16-l24 purple2">You can choose a company from the list of companies using the
                            suggested ones or add your own.
                        </p>
                        <div class="select">
                            <select id="theme24" class="js-example-basic-single w400">
                                <option value="0" selected>Choose</option>
                            </select>
                        </div>
                        <div class="tender-block-link">
                            <p class="t-r f14-l16 purple2">
                                You can add company if the company is not in the list.
                                <a class="" href="{{route('companies.create')}}">
                                    <i class="icon icon-green-circle-plus"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="tender-block n-c">
                        <label class="t-r f16-l24 purple1" for="site-company4">Site the company</label>
                        <input class="i-f w400" type="text" id="site-company4" placeholder="Placeholder">
                    </div>
                    <div class="tender-block o">
                        <h3 class="t-r f16-l24 purple1">What order do you want to add?</h3>
                        <div class="wrapper-radio3">
                            <div class="form_radio">
                                <label class="t-r f14-l16 purple1">
                                    <input type="radio" name="variant4" checked>
                                    <span></span>
                                    BID
                                </label>
                            </div>
                            <div class="form_radio">
                                <label class="t-r f14-l16 purple1">
                                    <input type="radio" name="variant4">
                                    <span></span>
                                    ASK
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tender-block d-s">
                        <h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct , spv , forward contract or
                            primary round by selecting from the list.
                        </p>
                        <select id="theme34" class="js-example-basic-single w400">
                            <option value="0" selected>Choose</option>
                        </select>
                    </div>
                    <div class="tender-block s">
                        <h2 class="t-sb f22-l25 purple3">Description</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.</p>
                        <textarea class="i-f f14-l16 w400 h235" placeholder="Placeholder text"></textarea>
                    </div>
                    <div class="tender-block d-r">
                        <h2 class="t-sb f22-l25 purple3">Tender term</h2>
                        <div class="date-wrapper">
                            <input class="i-f w170" type="text" name="datetimes">
                            <input class="i-f w170" type="text" name="datetimes">
                        </div>
                    </div>
                    <div class="tender-block i" id="tabs2-tender">
                        <h2 class="t-sb f22-l25 purple3">Information</h2>
                        <ul class="nav-tabs">
                            <li class="t-m f18-l32 purple1 tab-n2 active">
                                Price
                            </li>
                            <li class="t-m f18-l32 purple1 tab-n2 ">
                                Valuation
                            </li>
                        </ul>
                        <div class="content-t2 active">
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_type4">
                                    Share Type
                                </label>
                                <select id="share_type4" class="js-example-basic-single w400">
                                    <option value="0" selected>Choose</option>
                                </select>
                            </div>
                            <div class="ask-block-info">
                                <div class="wrapper-radio">
                                    <div class="form_radio">
                                        <label class="t-r f14-l16 purple1">
                                            <input type="radio" name="variant" checked>
                                            <span></span>
                                            $
                                        </label>
                                    </div>
                                    <div class="form_radio">
                                        <label class="t-r f14-l16 purple1">
                                            <input type="radio" name="variant">
                                            <span></span>
                                            €
                                        </label>
                                    </div>
                                </div>
                                <label class="t-r f16-l24 purple1" for="share_price4">Start Share Price</label>
                                <input class="i-f w400" type="text" id="share_price4"
                                       placeholder="Placeholder price">
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_number4">Number of Share</label>
                                <input class="i-f w400" type="text" id="share_number4"
                                       placeholder="Placeholder number">
                            </div>
                        </div>
                        <div class="content-t2">
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_type24">Share Type</label>
                                <select id="share_type24" class="js-example-basic-single w400">
                                    <option value="0" selected>Choose</option>
                                </select>
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="volume24">Block Volume</label>
                                <input class="i-f w400" type="text" id="volume24"
                                       placeholder="Placeholder number">
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_number24">Valuation Start</label>
                                <input class="i-f w400" type="text" id="share_number24"
                                       placeholder="Placeholder number">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-order-btn">
                    <button class="btn w265">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection



