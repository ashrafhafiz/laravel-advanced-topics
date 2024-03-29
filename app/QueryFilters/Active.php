<?php

namespace App\QueryFilters;

//use Closure;
//
//class Active
//{
//    public function handle($request, Closure $next)
//    {
//        if (!request()->has('active')) {
//            return $next($request);
//        }
//
//        $builder = $next($request);
//
//        return $builder->where('active', request('active'));
//    }
//}


class Active extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->where('active', request($this->filterName()));
    }
}
