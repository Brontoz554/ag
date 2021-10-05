<?php

namespace App\Http\Controllers;

use App\ExtraInfo;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class SupporterController extends Controller
{

    public function index()
    {
        $supporters = User::where('role', '=', 'Supporter')->get();

        return view('supporter.index', compact('supporters'));
    }

    public function registerSupporterView()
    {
        return view('supporter.register');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function registerSupporter(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:100|string',
            'surname' => 'required|max:100|string',
            'patronymic' => 'required|max:100|string',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
            'passport_series' => 'required|min:4',
            'passport_number' => 'required|min:6',
            'passport_date' => 'required|max:100',
            'referral_link' => 'required|min:35|exists:extra_info',
            'residence_address' => 'required|max:100',
            'INN' => 'required|max:100|unique:extra_info',
            'passport_face_photo' => 'required|image|mimes:jpeg,png,jpg|max:200',
            'passport_residence_address' => 'required|image|mimes:jpeg,png,jpg|max:200',
        ]);

        $user = new User([
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'phone' => $request->phone,
            'role' => 'Supporter',
            'password' => Str::random(15),
        ]);
        $user->save();

        $extraInfo = ExtraInfo::where('referral_link', '=', $request->referral_link)->first('user_id');
        $agitator_id = $extraInfo->user_id;

        $passportFacePhoto = $request->passport_face_photo->store('public');
        $passportResidenceAddress = $request->passport_residence_address->store('public');

        $agitator = new ExtraInfo([
            'user_id' => $user->id,
            'agitator_id' => $agitator_id,
            'passport_series' => $request->passport_series,
            'passport_number' => $request->passport_number,
            'passport_date' => $request->passport_date,
            'residence_address' => $request->residence_address,
            'passport_face_photo' => $passportFacePhoto,
            'passport_residence_address' => $passportResidenceAddress,
            'INN' => $request->INN,
        ]);
        $agitator->save();

        Auth::guard()->login($user);
        return Redirect::home();
    }
}
