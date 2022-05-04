<div class="content-t {{$active}}">
    <form class="add-order-ask" action="{{$type}}">
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
                        You can add company if the company is not in the list.
                        <a class="" href="{{route('companies.create')}}">
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
                <h2 class="t-sb f22-l25 purple3">Description</h2>
                <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                    or primary
                    round.</p>
                <textarea class="i-f f14-l16 w400 h235" cols="30" rows="10"
                          placeholder="Placeholder text"></textarea>
            </div>
            <div class="ask-block i" id="{{$id}}">
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
