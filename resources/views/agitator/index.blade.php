@extends('layouts.app')
@section('content')
    <div class="container-fluid pt-4">
        <div class="buttons pt-3 pb-3 mr-3">
            <a href="{{ route('register-agitator-view') }}" class="btn btn-secondary">Add agitator</a>
        </div>
        @if(isset($agitators[0]))
            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                <thead>
                <tr role="row">
                    <th class="sorting">Agitator name</th>
                    <th class="sorting">Agitator phone</th>
                    <th class="sorting">Agitator password</th>
                    <th class="sorting">Passport series</th>
                    <th class="sorting">Passport number</th>
                    <th class="sorting">Referral link</th>
                    <th class="sorting">INN</th>
                    <th class="sorting">Photos</th>
                </tr>
                </thead>
                <tbody>
                @foreach($agitators as $agitator)
                    @if(\Illuminate\Support\Facades\Auth::user()->role === 'Chief')
                        <tr>
                            <td>{{ $agitator->surname }} {{ $agitator->name }} {{ $agitator->patronymic }}</td>
                            <td>{{ $agitator->phone }}</td>
                            <td>{{ $agitator->password }}</td>
                            <td>{{ $agitator->info->passport_series }}</td>
                            <td>{{ $agitator->info->passport_number }}</td>
                            <td>{{ $agitator->info->referral_link }}</td>
                            <td>{{ $agitator->info->INN }}</td>
                            <td>
                                <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modalAgitator{{$agitator->id}}">
                                    Show photos
                                </button>
                                <div class="modal fade" id="modalAgitator{{$agitator->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body d-flex">
                                                <div class="container">
                                                    <h4>the front side of the passport</h4>
                                                    <img
                                                        src="{{ '../../../storage/app/'.$agitator->info->passport_face_photo }}"
                                                        alt="face"
                                                        style="max-width: 350px; max-height: 450px;">
                                                </div>
                                                <div class="container mt-1">
                                                    <h4>registration address in the passport</h4>
                                                    <img
                                                        src="{{ '../../../storage/app/'.$agitator->info->passport_residence_address }}"
                                                        alt="address"
                                                        style="max-width: 350px; max-height: 350px;">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @elseif($agitator->info->coordinator_id === \Illuminate\Support\Facades\Auth::user()->id)
                        <tr>
                            <td>{{ $agitator->surname }} {{ $agitator->name }} {{ $agitator->patronymic }}</td>
                            <td>{{ $agitator->phone }}</td>
                            <td>{{ $agitator->password }}</td>
                            <td>{{ $agitator->info->passport_series }}</td>
                            <td>{{ $agitator->info->passport_number }}</td>
                            <td>{{ $agitator->info->referral_link }}</td>
                            <td>{{ $agitator->info->INN }}</td>
                            <td>
                                <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modalAgitator{{$agitator->id}}">
                                    Show photos
                                </button>
                                <div class="modal fade" id="modalAgitator{{$agitator->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body d-flex">
                                                <div class="container">
                                                    <h4>the front side of the passport</h4>
                                                    <img
                                                        src="{{ '../../../storage/app/'.$agitator->info->passport_face_photo }}"
                                                        alt="face"
                                                        style="max-width: 350px; max-height: 450px;">
                                                </div>
                                                <div class="container mt-1">
                                                    <h4>registration address in the passport</h4>
                                                    <img
                                                        src="{{ '../../../storage/app/'.$agitator->info->passport_residence_address }}"
                                                        alt="address"
                                                        style="max-width: 350px; max-height: 350px;">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        @endif
    </div>
@endsection
