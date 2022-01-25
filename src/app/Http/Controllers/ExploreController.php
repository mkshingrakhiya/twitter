<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\View\View;

class ExploreController extends Controller
{
    /**
     * Explore user profiles.
     *
     * @return View
     */
    public function __invoke(): View
    {
        return view('explore', [
            'users' => User::where('id', '!=', auth()->id())->paginate(),
        ]);
    }
}
