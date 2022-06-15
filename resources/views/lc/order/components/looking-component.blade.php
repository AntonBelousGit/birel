<div class="content-t ">
    <form class="add-order-looking" action="#">
        <div class="looking">
            <div class="looking-block c-n">
                <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                <p class="t-r f16-l24 purple2">You can select a company from the list of companies using proposed or add your own.</p>
                <div class="select">
                    <select id="theme23" class="js-example-basic-single w400">
                        <option value="0" selected>Choose</option>
                    </select>
                </div>
                <div class="looking-block-link">
                    <p class="t-r f14-l16 purple2">
                        You can offer to add company if the company is not listed.
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
                <p class="t-r f16-l24 purple2">You can choose deal structure: direct , spv , forward contract or primary round by selecting from the list.
                </p>
                <select id="theme33" class="js-example-basic-single w400">
                    <option value="0" selected>Choose</option>
                </select>
            </div>
            <div class="looking-block s">
                <h2 class="t-sb f22-l25 purple3">Details</h2>
                <p class="t-r f16-l24 purple2">Here you can enter important details. For example, SPV - layers, management fee, carry ... / Escrow / ROFR / requirements for the second side of the transaction and so on.</p>
                <textarea class="i-f f14-l16 w400 h235" placeholder="Enter the Text"></textarea>
            </div>
            <div class="looking-block i" id="{{$id}}">
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
                        <label class="t-r f16-l24 purple1" for="share_type3">
                            Share Type
                        </label>
                        <select id="share_type3" class="js-example-basic-single w400">
                            <option value="0" selected>Choose</option>
                        </select>
                    </div>
                    <div class="looking-block-info">
                        <label class="t-r f16-l24 purple1" for="share_number3">Share Number</label>
                        <input class="i-f w400" type="number" id="share_number3"
                               placeholder="Enter the Number">
                    </div>
                </div>
                <div class="content-t2">
                    <div class="looking-block-info">
                        <label class="t-r f16-l24 purple1" for="share_type23">Share Type</label>
                        <select id="share_type23" class="js-example-basic-single w400">
                            <option value="0" selected>Choose</option>
                        </select>
                    </div>
                    <div class="looking-block-info">
                        <label class="t-r f16-l24 purple1" for="volume23">Block Volume</label>
                        <input class="i-f w400" type="number" id="volume23" placeholder="Enter the Volume">
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
