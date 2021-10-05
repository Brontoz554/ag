<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\ExtraInfo;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return RedirectResponse
     */
    public function generateReferralLink(): RedirectResponse
    {
        $user = ExtraInfo::where('user_id', '=', Auth::id())->first();
        $user->referral_link = Str::random('35');
        $user->save();

        return Redirect::home();
    }

}
