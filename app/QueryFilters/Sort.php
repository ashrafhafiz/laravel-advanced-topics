<?php


namespace App\QueryFilters;

//use Closure;
//
//class Sort
//{
//    public function handle($request, Closure $next)
//    {
//        if (!request()->has('sort')) {
//            return $next($request);
//        }
//
//        $builder = $next($request);
//
//        return $builder->orderBy('title', request('sort'));
//    }
//}

class Sort extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->orderBy('title', request($this->filterName()));
    }
}
