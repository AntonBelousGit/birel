<div class="content-t active">
    <form class="add-order-looking" action="{{ route('lc-update-lfo',$order) }}" method="POST" id='form'>
        @csrf
        @method('put')
        <div class="looking">
            <input type="hidden" name="type" value="{{$order->type}}">
            <div class="looking-block c-n">
                <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                <p class="t-r f16-l24 purple2">You can select a company from the list of companies using proposed or add
                    your own.</p>
                <div class="select">
                    <select id="theme23" class="js-example-basic-single w400" name="company_id">
                        @foreach($companies as $company)
                            <option
                                value="{{$company->id}}" {{$company->id == $order->company_id? 'selected':''}}>{{$company->companyName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="looking-block o">
                <h3 class="t-r f16-l24 purple1">What order do you want to add?</h3>
                <div class="wrapper-radio3">
                    <div class="form_radio">
                        <label class="t-r f14-l16 purple1">
                            <input type="radio" name="sub_type" value="BID" {{$order->sub_type =="BID"? 'checked':'' }}>
                            <span></span>
                            BID
                        </label>
                    </div>
                    <div class="form_radio">
                        <label class="t-r f14-l16 purple1">
                            <input type="radio" name="sub_type" value="ASK" {{$order->sub_type =="ASK"? 'checked':'' }}>
                            <span></span>
                            ASK
                        </label>
                    </div>
                </div>
            </div>
            <div class="looking-block d-s">
                <h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
                <p class="t-r f16-l24 purple2">You can choose deal structure: direct , spv , forward contract or primary
                    round by selecting from the list.
                </p>
                <select class="js-example-basic-single w400" name="deal_structure" required>
                    <option value="Choose" disabled>Choose</option>
                    <option value="direct" {{$order->deal_structure == 'direct'? 'selected':''}}>direct</option>
                    <option value="spv" {{$order->deal_structure == 'spv'? 'selected':''}}>spv</option>
                    <option value="forward contract" {{$order->deal_structure == 'forward contract'? 'selected':''}}>
                        forward contract
                    </option>
                    <option value="direct or spv" {{$order->deal_structure == 'direct or spv'? 'selected':''}}>direct or
                        spv
                    </option>
                    <option value="any" {{$order->deal_structure == 'any'? 'selected':''}}>any</option>
                </select>
            </div>
            <div class="looking-block s">
                <h2 class="t-sb f22-l25 purple3">Details</h2>
                <p class="t-r f16-l24 purple2">Here you can enter important details. For example, SPV - layers,
                    management fee, carry ... / Escrow / ROFR / requirements for the second side of the transaction and
                    so on.</p>
                <textarea class="i-f f14-l16 w400 h235"
                          placeholder="Enter the Text">{{$order->description}}</textarea>
            </div>
            <div class="looking-block i" id="{{$id}}">
                <h2 class="t-sb f22-l25 purple3">Terms</h2>
                <ul class="nav-tabs">
                    <li class="t-m f18-l32 purple1 tab-n2 {{!empty($order->share_number)?'active':''}}">
                        Number shares
                    </li>
                    <li class="t-m f18-l32 purple1 tab-n2 {{!empty($order->volume)?'active':''}}">
                        Block volume
                    </li>
                </ul>
                <div class="content-t2 {{!empty($order->share_number)?'active':''}}">
                    @if(empty($order->share_number))
                        @include('lc.order.components.empty.empty-numbshare-edit-lfo')
                    @else
                        <div class="looking-block-info">
                            <label class="t-r f16-l24 purple1" for="share_type3">
                                Share Type
                            </label>
                            <select class="js-example-basic-single w400" id="share_type" name="share_type"
                                    required>
                                <option value="Choose" disabled>Choose</option>
                                <option value="Preferred" {{$order->share_type == 'Preferred'? 'selected':''}}>
                                    Preferred
                                </option>
                                <option value="Common" {{$order->share_type == 'Common'? 'selected':''}}>Common</option>
                                <option
                                    value="Preferred and Common" {{$order->share_type == 'Preferred and Common'? 'selected':''}}>
                                    Preferred and Common
                                </option>
                                <option value="any" {{$order->share_type == 'any'? 'selected':''}}>Any</option>
                            </select>
                        </div>
                        <div class="looking-block-info">
                            <label class="t-r f16-l24 purple1" for="share_number">Share Number</label>
                            <input class="i-f w400 m-bid" type="number" id="share_number"
                                   placeholder="Enter the Number" name="share_number" required
                                   value="{{$order->share_number}}">
                        </div>
                    @endif
                </div>
                <div class="content-t2 {{!empty($order->volume)?'active':''}}">
                    @if(empty($order->volume))
                        @include('lc.order.components.empty.empty-volum-edit-lfo')
                    @else
                        <div class="looking-block-info">
                            <label class="t-r f16-l24 purple1" for="share_type23">Share Type</label>
                            <select class="js-example-basic-single w400" id="share_type2" name="share_type"
                                    required>
                                <option value="Choose" disabled>Choose</option>
                                <option value="Preferred" {{$order->share_type == 'Preferred'? 'selected':''}}>
                                    Preferred
                                </option>
                                <option value="Common" {{$order->share_type == 'Common'? 'selected':''}}>Common</option>
                                <option
                                    value="Preferred and Common" {{$order->share_type == 'Preferred and Common'? 'selected':''}}>
                                    Preferred and Common
                                </option>
                                <option value="any" {{$order->share_type == 'any'? 'selected':''}}>Any</option>
                            </select>
                        </div>
                        <div class="looking-block-info">
                            <label class="t-r f16-l24 purple1" for="volume23">Block Volume</label>
                            <input class="i-f w400" type="number" id="volume23" name="volume" placeholder="Enter the Volume" required
                                   value="{{$order->volume}}">
                        </div>
                    @endif
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
