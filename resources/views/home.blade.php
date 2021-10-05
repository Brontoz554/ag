@extends('layouts.app')
@section('content')
    <div class="d-flex flex-row">
        @if(\Illuminate\Support\Facades\Auth::user()->role === 'Chief')
            <div class="buttons pt-3 pb-3 mr-3">
                <a href="{{ route('register') }}" class="btn btn-secondary">Add coordinator</a>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Auth::user()->role === 'Coordinator')
            <div class="buttons pt-3 pb-3 mr-3">
                <a href="{{ route('register-candidate-view') }}" class="btn btn-secondary">Add candidate</a>
            </div>
            <div class="buttons pt-3 pb-3 mr-3">
                <a href="{{ route('register-agitator-view') }}" class="btn btn-secondary">Add agitator</a>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Auth::user()->role === 'Agitator')
            <div class="buttons pt-3 pb-3 mr-3">
                <a href="{{ route('register-supporter-view') }}" class="btn btn-secondary">Add supporter</a>
            </div>
        @endif
    </div>
    <div class="container-fluid pt-4">
        @if(isset($users[0]))
            <h4>Coordinators</h4>
            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                <thead>
                <tr role="row">
                    <th class="sorting">User name</th>
                    <th class="sorting">Phone</th>
                    <th class="sorting">Role</th>
                    @if(\Illuminate\Support\Facades\Auth::user()->role === "Chief")
                        <th class="sorting">Password</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="odd">
                        <td>{{ $user->surname }} {{ $user->name }} {{ $user->patronymic }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->role }}</td>
                        @if(\Illuminate\Support\Facades\Auth::user()->role === "Chief")
                            <td>{{ $user->password }}</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        @endif
    </div>
@endsection
