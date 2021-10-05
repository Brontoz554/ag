<?php

namespace App\Http\Controllers;

use App\ExtraInfo;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;


class CoordinatorController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        if ($this->isRoleCoordinator() || Auth::user()->role === 'Chief') {
            $users = User::where('role', '=', 'Coordinator')->get()->sortByDesc('id');
            return view('home', compact('users'));
        }
        return view('home');
    }

    /**
     * @return Application|Factory|RedirectResponse|View
     */
    public function registerCandidateView()
    {
        if ($this->isRoleCoordinator() || Auth::user()->role === 'Chief') {
            return view('candidate.register');
        }

        return Redirect::home();
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function registerCandidate(Request $request): RedirectResponse
    {
        $regionNames = [
            'Баткенская область',
            'Жалал-Абадская область',
            'Иссык-Кульская область',
            'Нарынская область',
            'Ошская область',
            'Таласская область',
            'Чуйская область',
            'город Бишкек',
            'город Ош',
        ];
        $request->validate([
            'name' => 'required|max:100|string',
            'surname' => 'required|max:100|string',
            'patronymic' => 'required|max:100|string',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'chief' => 'required|string|max:100',
            'chief_address' => 'required|string|max:100',
            'lawyer' => 'required|string|max:100',
            'lawyer_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'country' => 'required',
            'region' => 'required',
            'TIK' => 'required',
            'YIK' => 'required',
            'headquarters_address' => 'required',
        ]);

        $user = new user([
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'phone' => $request->phone,
            'role' => 'Candidate',
            'password' => Str::random(15),
        ]);
        $user->save();

        $candidate = new ExtraInfo([
            'user_id' => $user->id,
            'chief' => $request->chief,
            'chief_address' => $request->chief_address,
            'lawyer' => $request->lawyer,
            'lawyer_phone' => $request->lawyer_phone,
            'headquarters_address' => $request->headquarters_address,
            'TIK' => $request->TIK,
            'YIK' => $request->YIK,
            'country' => $request->country,
            'region' => $regionNames[(integer)$request->region - 1],
        ]);

        $candidate->save();

        return Redirect::home();
    }

    /**
     * @return Application|Factory|RedirectResponse|View
     */
    public function candidateView()
    {
        if ($this->isRoleCoordinator() || Auth::user()->role === 'Chief') {
            $candidates = User::where('role', '=', 'Candidate')->get()->sortByDesc('id');
            return view('candidate.index', compact('candidates'));
        }

        return Redirect::home();
    }

    /**
     * @return Application|Factory|RedirectResponse|View
     */
    public function registerAgitatorView()
    {
        if ($this->isRoleCoordinator() || Auth::user()->role === 'Chief') {
            return view('agitator.register');
        }
        return Redirect::home();
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function registerAgitator(Request $request): RedirectResponse
    {
        $regionNames = [
            'Баткенская область',
            'Жалал-Абадская область',
            'Иссык-Кульская область',
            'Нарынская область',
            'Ошская область',
            'Таласская область',
            'Чуйская область',
            'город Бишкек',
            'город Ош',
        ];

        $request->validate([
            'name' => 'required|max:100|string',
            'surname' => 'required|max:100|string',
            'patronymic' => 'required|max:100|string',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
            'passport_series' => 'required|min:4',
            'passport_number' => 'required|min:6',
            'passport_date' => 'required|max:100',
            'residence_address' => 'required|max:100',
            'INN' => 'required|max:100|unique:extra_info',
            'passport_face_photo' => 'required|image|mimes:jpeg,png,jpg|max:500',
            'passport_residence_address' => 'required|image|mimes:jpeg,png,jpg|max:500',
            'country' => 'required',
            'region' => 'required',
            'TIK' => 'required',
            'YIK' => 'required',
        ]);

        $user = new user([
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'phone' => $request->phone,
            'role' => 'Agitator',
            'password' => Str::random(15),
        ]);
        $user->save();

        $passportFacePhoto = $request->passport_face_photo->store('public');
        $passportResidenceAddress = $request->passport_residence_address->store('public');

        $agitator = new ExtraInfo([
            'user_id' => $user->id,
            'coordinator_id' => Auth::user()->id,
            'passport_series' => $request->passport_series,
            'passport_number' => $request->passport_number,
            'passport_date' => $request->passport_date,
            'residence_address' => $request->residence_address,
            'passport_face_photo' => $passportFacePhoto,
            'passport_residence_address' => $passportResidenceAddress,
            'INN' => $request->INN,
            'TIK' => $request->TIK,
            'YIK' => $request->YIK,
            'country' => $request->country,
            'region' => $regionNames[(integer)$request->region - 1],
        ]);
        $agitator->save();

        return Redirect::home();
    }

    /**
     * @return Application|Factory|RedirectResponse|View
     */
    public function agitatorView()
    {
        if ($this->isRoleCoordinator() || Auth::user()->role === 'Chief') {
            $agitators = User::where('role', '=', 'Agitator')->get()->sortByDesc('id');
            return view('agitator.index', compact('agitators'));
        }

        return Redirect::home();
    }

    /**
     * @return bool
     */
    public function isRoleCoordinator(): bool
    {
        if (Auth::user()->role === 'Coordinator') {
            return true;
        }
        return false;
    }

}
