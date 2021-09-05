<?php

namespace App\Models;

use App\QueryFilters\Active;
use App\QueryFilters\MaxCount;
use App\QueryFilters\Sort;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Cast extends Model
{
    use HasFactory;

    public static function getWithFilters()
    {
        return app(Pipeline::Class)
            ->send(Cast::query())
            ->through([
                Active::class,
                Sort::class,
                MaxCount::class
            ])
            ->thenReturn()
            ->get();
//            ->paginate(5);
    }
}
