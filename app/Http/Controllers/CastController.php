<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\QueryFilters\Active;
use App\QueryFilters\Sort;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class CastController extends Controller
{
    public function index()
    {
         // Option 1
         // $casts = Cast::all();

        // Option 2
        //         $casts = Cast::query();
        //
        //         if (request()->has('active')) {
        //             $casts->where('active', request('active'));
        //         }
        //
        //         if (request()->has('sort')) {
        //             $casts->orderBy('title', request('sort'));
        //         }
        //
        //         $casts = $casts->get();

        // option 3 - Pipeline
        //        $casts = app(Pipeline::Class)
        //            ->send(Cast::query())
        //            ->through([
        //                Active::class,
        //                Sort::class
        //            ])
        //            ->thenReturn()
        //            ->get();

        // Option 4 - Pipeline and add the query to the model.
        $casts = Cast::getWithFilters();

        return view('pipeline.index', compact('casts'));
    }
}
