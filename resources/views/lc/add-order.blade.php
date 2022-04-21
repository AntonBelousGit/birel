@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/lib/daterangepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-add-order.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/lib/moment.min.js')}}"></script>
    <script src="{{asset('js/lib/daterangepicker.min.js')}}"></script>
    <script src="{{asset('js/pages/page-lc-add-order-ask.min.js')}}" type="module"></script>
@endsection

@section('content')
    <div class="add-order" id="tabs">
        <ul class="tab-wrapper nav-tabs w400">
            <li class="t-m f18-l32 purple1 tab-n ">
                BID
            </li>
            <li class="t-m f18-l32 purple1 tab-n ">
                ASK
            </li>
            <li class="t-m f18-l32 purple1 tab-n ">
                Looking for an offer
            </li>
            <li class="t-m f18-l32 purple1 tab-n active">
                Tender
            </li>
        </ul>
        <div class="content-t ">
            <form class="add-order-ask" action="#">
                <div class="ask">
                    <div class="ask-block c-n">
                        <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.
                        </p>
                        <div class="select">
                            <select id="theme2-bid" class="js-example-basic-single w400">
                                <option value="0" selected>Choose</option>
                            </select>
                        </div>
                        <div class="ask-block-link">
                            <p class="t-r f14-l16 purple2">
                                You can add company если компании нет в списке .
                                <a class="" href="#">
                                    <i class="icon icon-green-circle-plus"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="ask-block d-s">
                        <h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.
                        </p>
                        <select id="theme3-bid" class="js-example-basic-single w400">
                            <option value="0" selected>Choose</option>
                        </select>
                    </div>
                    <div class="ask-block s">
                        <h2 class="t-sb f22-l25 purple3">Описание</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.</p>
                        <textarea class="i-f f14-l16 w400 h235" cols="30" rows="10"
                                  placeholder="Placeholder text"></textarea>
                    </div>
                    <div class="ask-block i" id="tabs2-bid">
                        <h2 class="t-sb f22-l25 purple3">Информация</h2>
                        <ul class="nav-tabs ">
                            <li class="t-m f18-l32 purple1 tab-n2 active">
                                Price
                            </li>
                            <li class="t-m f18-l32 purple1 tab-n2 ">
                                Valuation
                            </li>
                        </ul>
                        <div class="content-t2 active">
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_type-bid">
                                    Share Type
                                </label>
                                <select id="share_type-bid" class="js-example-basic-single w400">
                                    <option value="0" selected>Choose</option>
                                </select>
                            </div>
                            <div class="ask-block-info">
                                <div class="wrapper-radio">
                                    <div class="form_radio">
                                        <label class="t-r f14-l16 purple1">
                                            <input type="radio" name="variant2" checked>
                                            <span></span>
                                            $
                                        </label>
                                    </div>
                                    <div class="form_radio">
                                        <label class="t-r f14-l16 purple1">
                                            <input type="radio" name="variant2">
                                            <span></span>
                                            €
                                        </label>
                                    </div>
                                </div>
                                <label class="t-r f16-l24 purple1" for="share_price-bid">Share Price</label>
                                <input class="i-f w400" type="text" id="share_price-bid"
                                       placeholder="Placeholder price">
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_number-bid">Share Number</label>
                                <input class="i-f w400" type="text" id="share_number-bid"
                                       placeholder="Placeholder number">
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="volume-bid">Volume</label>
                                <input class="i-f w400" type="text" id="volume-bid"
                                       placeholder="Высчитывается автоматически">
                            </div>
                        </div>
                        <div class="content-t2">
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_type2-bid">Share Type</label>
                                <select id="share_type2-bid" class="js-example-basic-single w400">
                                    <option value="0" selected>Choose</option>
                                </select>
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="volume2-bid">Volume</label>
                                <input class="i-f w400" type="text" id="volume2-bid" placeholder="Placeholder">
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_number2-bid">Valuation</label>
                                <input class="i-f w400" type="text" id="share_number2-bid"
                                       placeholder="Placeholder">
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
            <form class="add-order-ask" action="#">
                <div class="ask">
                    <div class="ask-block c-n">
                        <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.
                        </p>
                        <div class="select">
                            <select id="theme2" class="js-example-basic-single w400">
                                <option value="0" selected>Choose</option>
                            </select>
                        </div>
                        <div class="ask-block-link">
                            <p class="t-r f14-l16 purple2">
                                You can add company if the company is not listed.
                                <a class="" href="#">
                                    <i class="icon icon-green-circle-plus"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="ask-block d-s">
                        <h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.
                        </p>
                        <select id="theme3" class="js-example-basic-single w400">
                            <option value="0" selected>Choose</option>
                        </select>
                    </div>
                    <div class="ask-block s">
                        <h2 class="t-sb f22-l25 purple3">Description</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.</p>
                        <textarea class="i-f f14-l16 w400 h235" cols="30" rows="10"
                                  placeholder="Placeholder text"></textarea>
                    </div>
                    <div class="ask-block i" id="tabs2">
                        <h2 class="t-sb f22-l25 purple3">Information</h2>
                        <ul class="nav-tabs ">
                            <li class="t-m f18-l32 purple1 tab-n2 active">
                                Price
                            </li>
                            <li class="t-m f18-l32 purple1 tab-n2 ">
                                Valuation
                            </li>
                        </ul>
                        <div class="content-t2 active">
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_type">
                                    Share Type
                                </label>
                                <select id="share_type" class="js-example-basic-single w400">
                                    <option value="0" disabled selected>Choose</option>
                                    <option value="1">Preferred</option>
                                    <option value="2">Common</option>
                                    <option value="3">Mix</option>
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
                                <label class="t-r f16-l24 purple1" for="share_price">Share Price</label>
                                <input class="i-f w400" type="text" id="share_price"
                                       placeholder="Placeholder price">
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_number">Share Number</label>
                                <input class="i-f w400" type="text" id="share_number"
                                       placeholder="Placeholder number">
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="volume">Volume</label>
                                <input class="i-f w400" type="text" id="volume" placeholder="Placeholder">
                            </div>
                        </div>
                        <div class="content-t2">
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_type2">Share Type</label>
                                <select id="share_type2" class="js-example-basic-single w400">
                                    <option value="0" selected>Choose</option>
                                </select>
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="volume2">Volume</label>
                                <input class="i-f w400" type="text" id="volume2" placeholder="Placeholder">
                            </div>
                            <div class="ask-block-info">
                                <label class="t-r f16-l24 purple1" for="share_number2">Valuation</label>
                                <input class="i-f w400" type="text" id="share_number2" placeholder="Placeholder">
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
            <form class="add-order-looking" action="#">
                <div class="looking">
                    <div class="looking-block c-n">
                        <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                        <p class="t-r f16-l24 purple2">You can выбрать компанию из списка компаний, воспользовавшись
                            предложенными
                            или добавить свою.
                        </p>
                        <div class="select">
                            <select id="theme23" class="js-example-basic-single w400">
                                <option value="0" selected>Choose</option>
                            </select>
                        </div>
                        <div class="looking-block-link">
                            <p class="t-r f14-l16 purple2">
                                You can add company если компании нет в списке.
                                <a class="" href="#">
                                    <i class="icon icon-green-circle-plus"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="looking-block o">
                        <h3 class="t-r f16-l24 purple1">Какой ордер вы хотите добавить?</h3>
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
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct , spv , forward
                            contract or primary
                            round, выбрав из списка.
                        </p>
                        <select id="theme33" class="js-example-basic-single w400">
                            <option value="0" selected>Choose</option>
                        </select>
                    </div>
                    <div class="looking-block s">
                        <h2 class="t-sb f22-l25 purple3">Описание</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.</p>
                        <textarea class="i-f f14-l16 w400 h235" placeholder="Placeholder text"></textarea>
                    </div>
                    <div class="looking-block i" id="tabs2-looking">
                        <h2 class="t-sb f22-l25 purple3">Информация</h2>
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
        <div class="content-t active">
            <form class="add-order-tender" action="#">
                <div class="tender">
                    <div class="tender-block c-n">
                        <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                        <p class="t-r f16-l24 purple2">You can выбрать компанию из списка компаний, воспользовавшись
                            предложенными
                            или добавить свою.
                        </p>
                        <div class="select">
                            <select id="theme24" class="js-example-basic-single w400">
                                <option value="0" selected>Choose</option>
                            </select>
                        </div>
                        <div class="tender-block-link">
                            <p class="t-r f14-l16 purple2">
                                You can add company если компании нет в списке.
                                <a class="" href="#">
                                    <i class="icon icon-green-circle-plus"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="tender-block n-c">
                        <label class="t-r f16-l24 purple1" for="site-company4">Сайт компании</label>
                        <input class="i-f w400" type="text" id="site-company4" placeholder="Placeholder">
                    </div>
                    <div class="tender-block o">
                        <h3 class="t-r f16-l24 purple1">Какой ордер вы хотите добавить?</h3>
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
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct , spv , forward
                            contract or primary
                            round, выбрав из списка.
                        </p>
                        <select id="theme34" class="js-example-basic-single w400">
                            <option value="0" selected>Choose</option>
                        </select>
                    </div>
                    <div class="tender-block s">
                        <h2 class="t-sb f22-l25 purple3">Описание</h2>
                        <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                            or primary
                            round.</p>
                        <textarea class="i-f f14-l16 w400 h235" placeholder="Placeholder text"></textarea>
                    </div>
                    <div class="tender-block d-r">
                        <h2 class="t-sb f22-l25 purple3">Срок тендера</h2>
                        <div class="date-wrapper">
                            <input class="i-f w170" type="text" name="datetimes">
                            <input class="i-f w170" type="text" name="datetimes">
                        </div>
                    </div>
                    <div class="tender-block i" id="tabs2-tender">
                        <h2 class="t-sb f22-l25 purple3">Информация</h2>
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
                                       placeholder="Высчитывается автоматически">
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


