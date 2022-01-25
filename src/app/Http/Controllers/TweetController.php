<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Post a tweet.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        auth()->user()->tweets()->create($request->validate(['body' => 'required|max:255']));

        return redirect()->route('home');
    }
}
