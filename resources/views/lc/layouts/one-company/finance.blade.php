<div class="content-t ">
    <div class="table-wrapper">
        <table class="color-t table-two">
            <thead class="table-head">
            <tr class="head-row">
                <th class="head-row-item">
                    <div>
                        <div>
                            #
                        </div>
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        <div class="date-t">
                            Date
                        </div>
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        <div class="transaction-name-t">
                            transaction name*
                        </div>
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        <div class="amount-raised-t">
                            Amount Raised
                        </div>
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        <div class="raised-to-date-t">
                            Raised to date
                        </div>
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        <div class="issue-price-t">
                            Issue price
                        </div>
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        <div class="post-money-valuation-t">
                            Post money valuation
                        </div>
                    </div>
                </th>
                <th class="head-row-item">
                    <div>
                        <div class="key-investors-t">
                            Key Investors
                        </div>
                    </div>
                </th>
            </tr>
            </thead>
            <tbody class="table-body2">
            @forelse($company->finance as $finance)
                <tr class="body-row visible" data-id="{{$finance->id}}">
                    <td class="body-row-item">
                        <div>
                            <div>
                                {{$loop->iteration}}
                            </div>
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            <div class="date-t">
                                {{$finance->date->format('d/m/y')}}
                            </div>
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            <div class="transaction-name-t">
                                {{$finance->transaction_name}}
                            </div>
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            <div class="amount-raised-t">
                                {{$finance->amount_raised}}
                            </div>
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            <div class="raised-to-date-t">
                                {{$finance->raised_to_date}}
                            </div>
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            <div class="issue-price-t">
                                {{$finance->issue_price}}
                            </div>
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            <div class="post-money-valuation-t">
                                {{$finance->post_money_valuation}}
                            </div>
                        </div>
                    </td>
                    <td class="body-row-item">
                        <div>
                            <div class="key-investors-t arrow-icon-purple">
                                {{$finance->key_investors}}
                            </div>
                        </div>
                    </td>
                </tr>

            @empty

            @endforelse

            <tr class="body-row body-row-info"></tr>
            </tbody>
        </table>

        {{$company->finance->onEachSide(-1)->links('vendor.pagination.custom')}}
    </div>
</div>
