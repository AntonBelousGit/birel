<div class="content-t ">
    <div class="table-wrapper">
        <table class="color-t table-two">
            <thead class="table-head">
            <tr class="head-row">
                <th class="head-row-item">
                    <div>
                        #
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        Date
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        transaction name*
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        Amount Raised
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        Raised to date
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        Issue price
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        Post money valuation
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        Key Investors
                    </div>
                </th>
            </tr>
            </thead>
            <tbody class="table-body2">
            @forelse($company->finance as $finance)
                <tr class="body-row visible">
                    <td class="body-row-item">
                        <div>
                            {{$loop->iteration}}
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            {{$finance->date->format('d/m/y')}}
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            {{$finance->transaction_name}}
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            {{$finance->amount_raised}}
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            {{$finance->raised_to_date}}
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            {{$finance->issue_price}}
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            {{$finance->post_money_valuation}}
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div class="arrow-icon-purple" data-id="{{$finance->id}}">
                            {{$finance->key_investors}}
                        </div>
                    </td>
                </tr>
                <tr class="body-row body-row-info"></tr>
            @empty

            @endforelse

            <tr class="body-row body-row-info">
                <td class="body-row-item" colspan="2">
                    <ul class="list-t">
                        <li class="list-t-item">
                            <div class="designation-name">
                                Price Per Share
                            </div>
                            <div class="designation-meanings">
                                $125.00
                            </div>
                        </li>
                        <li class="list-t-item">
                            <div class="designation-name">
                                Shares Outstanding
                            </div>
                            <div class="designation-meanings">
                                1,029,126
                            </div>
                        </li>
                        <li class="list-t-item">
                            <div class="designation-name">
                                Percent Shares Outstanding
                            </div>
                            <div class="designation-meanings">
                                0.3%
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="body-row-item" colspan="2">
                    <ul class="list-t">
                        <li class="list-t-item">
                            <div class="designation-name">
                                Liquidation Pref Order
                            </div>
                            <div class="designation-meanings">
                                2nd
                            </div>
                        </li>
                        <li class="list-t-item">
                            <div class="designation-name">
                                Liquidation Pref As Multiplier
                            </div>
                            <div class="designation-meanings">
                                1.0x
                            </div>
                        </li>
                        <li class="list-t-item">
                            <div class="designation-name">
                                Conversion Ratio
                            </div>
                            <div class="designation-meanings">
                                1.0x
                            </div>
                        </li>
                        <li class="list-t-item">
                            <div class="designation-name">
                                Participating
                            </div>
                            <div class="designation-meanings">
                                Non-participating
                            </div>
                        </li>
                        <li class="list-t-item">
                            <div class="designation-name">
                                Participation Cap
                            </div>
                            <div class="designation-meanings">
                                N/A
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="body-row-item">
                    <ul class="list-t">
                        <li class="list-t-item">
                            <div>
                                Dividend Rate
                            </div>
                            <div>
                                6.0%
                            </div>
                        </li>
                        <li class="list-t-item">
                            <div>
                                Cumulative
                            </div>
                            <div>
                                Non-cumulative
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="body-row-item" colspan="3">
                    <ul class="list-t">
                        <li class="list-t-item">
                            <div>
                                Investors
                            </div>
                            <div>
                                Andreessen Horowitz, Sequoia Capital, D1 Capital Partners, Fidelity,
                                T.Rowe Price
                                Associates
                            </div>
                        </li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>

        {{$company->finance->onEachSide(-1)->links('vendor.pagination.custom')}}
    </div>
</div>
