<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class CompanyFilter extends AbstractFilter
{
    public const COMPANYNANE = 'companyName';
    public const CATEGORY_ID = 'category_id';
    public const VALUATION = 'valuation';

    protected function getCallbacks(): array
    {
        return [
            self::COMPANYNANE => [$this, 'companyName'],
            self::CATEGORY_ID => [$this, 'categoryId'],
            self::VALUATION => [$this, 'valuation'],
        ];
    }

    public function companyName(Builder $builder, $value)
    {
        $builder->where('companyName', 'like', "%{$value}%");
    }

    public function categoryId(Builder $builder, $value)
    {
        $builder->whereHas('category', function ($q) use ($value) {
            return $q->where('id', $value);
        });
    }

    public function valuation(Builder $builder, $value)
    {
        $value = explode('-',$value);
        $builder->whereBetween('valuation', $value);
    }
}
