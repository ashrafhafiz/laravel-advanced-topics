<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class PostChannelController extends Controller
{
    public function create()
    {
        // $channels = Channel::all();

        return view('channel.post.create');
    }
}
