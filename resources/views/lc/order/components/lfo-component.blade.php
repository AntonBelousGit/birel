<div class="content-t {{$active}} ">
    <form class="add-order-looking" action="{{ route('store-lfo') }}" method="post">
        @csrf
        <div class="looking">
            <input type="hidden" name="type" value="{{$type}}">

            <div class="looking-block c-n">
                <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                <p class="t-r f16-l24 purple2">You can select a company from the list of companies using
                    proposed or add your own.</p>
                <div class="select">
                    <select class="js-example-basic-single w400" required name="company_id">
                        <option value="0" selected disabled>Choose</option>
                        @foreach($companies as $company)
                            <option value="{{$company->id}}" @if ($company->id == $company_id) selected @endif>{{$company->companyName}}</option>
                        @endforeach
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
                            <input type="radio" name="sub_type" value="BID" checked>
                            <span></span>
                            BID
                        </label>
                    </div>
                    <div class="form_radio">
                        <label class="t-r f14-l16 purple1">
                            <input type="radio" name="sub_type" value="ASK">
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
                <select  class="js-example-basic-single w400" name="deal_structure" required>
                    <option value="Choose" selected disabled>Choose</option>
                    <option value="direct">direct</option>
                    <option value="spv">spv</option>
                    <option value="forward contract">forward contract</option>
                    <option value="direct or spv">direct or spv</option>
                    <option value="any">any</option>
                </select>
            </div>
            <div class="looking-block s">
                <h2 class="t-sb f22-l25 purple3">Description</h2>
                <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                    or primary round.</p>
                <textarea class="i-f f14-l16 w400 h235" name="description" placeholder="Placeholder text"></textarea>
            </div>
            <div class="looking-block i" id="tabs_looking">
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
                    <div class="looking-block-info">
                        <div class="ask-block-info">
                            <label class="t-r f16-l24 purple1" for="share_type_looking">Share Type</label>
                            <select class="js-example-basic-single w400" name="share_type" id="share_type_looking" required>
                                <option value="Choose">Choose</option>
                                <option value="Preferred">Preferred</option>
                                <option value="Common">Common</option>
                                <option value="Preferred and Common">Preferred and Common</option>
                                <option value="any">Any</option>
                            </select>
                        </div>
                    </div>
                    <div class="looking-block-info">
                        <label class="t-r f16-l24 purple1" for="share_number_looking">Share Number</label>
                        <input class="i-f w400" type="text" id="share_number_looking" name="share_number"
                            placeholder="Placeholder number" required>
                    </div>
                </div>
                <div class="content-t2">
                    <div class="looking-block-info">
                        <label class="t-r f16-l24 purple1" for="share_type_looking2">Share Type</label>
                        <select class="js-example-basic-single w400" id="share_type_looking2">
                            <option value="Choose">Choose</option>
                            <option value="Preferred">Preferred</option>
                            <option value="Common">Common</option>
                            <option value="Preferred and Common">Preferred and Common</option>
                            <option value="any">Any</option>
                        </select>
                    </div>
                    <div class="looking-block-info">
                        <label class="t-r f16-l24 purple1" for="volume_looking">Volume</label>
                        <input class="i-f w400" type="text" id="volume_looking" placeholder="Placeholder">
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
