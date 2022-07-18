<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyFinanceInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'price_per_share' => $this->price_per_share,
            'type_currency' => $this->type_currency,
            'liquidation_pref_order' => $this->liquidation_pref_order,
            'dividend_rate' => $this->liquidation_pref_order,
            'investors' => $this->investors,
            'shares_outstanding' => $this->shares_outstanding,
            'liquidation_pref_as_multiplier' => $this->liquidation_pref_as_multiplier,
            'cumulative' => $this->cumulative,
            'percent_shares_outstanding' => $this->percent_shares_outstanding,
            'conversion_rate' => $this->conversion_rate,
            'participating' => $this->participating,
            'participation_cap' => $this->participation_cap,
        ];
    }
}
