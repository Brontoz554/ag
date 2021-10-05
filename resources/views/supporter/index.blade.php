@extends('layouts.app')
@section('content')
    <div class="buttons pt-3 pb-3">
        <a href="{{ route('register-supporter-view') }}" class="btn btn-secondary">Add supporter</a>
    </div>
    <div class="container-fluid pt-4">
        @if(isset($supporters[0]))
            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                <thead>
                <tr role="row">
                    <th>Supporter name</th>
                    <th>Supporter phone</th>
                    <th>Supporter password</th>
                    <th>INN</th>
                    <th>passport_number</th>
                    <th>passport_date</th>
                    <th>passport_series</th>
                    <th>residence_address</th>
                    <th>Photos</th>
                </tr>
                </thead>
                <tbody>
                @foreach($supporters as $supporter)
                    @if($supporter->info->agitator_id === \Illuminate\Support\Facades\Auth::id())
                        <tr class="odd">
                            <td>{{ $supporter->name }}</td>
                            <td>{{ $supporter->phone }}</td>
                            <td>{{ $supporter->password }}</td>
                            <td>{{ $supporter->info->INN }}</td>
                            <td>{{ $supporter->info->passport_number }}</td>
                            <td>{{ $supporter->info->passport_date }}</td>
                            <td>{{ $supporter->info->passport_series }}</td>
                            <td>{{ $supporter->info->residence_address }}</td>
                            <td>
                                <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modalAgitator{{$supporter->id}}">
                                    Show photos
                                </button>
                                <div class="modal fade" id="modalAgitator{{$supporter->id}}" tabindex="-1" role="dialog"
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
                                                        src="{{ '../../../storage/app/'.$supporter->info->passport_face_photo }}"
                                                        alt="face"
                                                        style="max-width: 350px; max-height: 450px;">
                                                </div>
                                                <div class="container mt-1">
                                                    <h4>registration address in the passport</h4>
                                                    <img
                                                        src="{{ '../../../storage/app/'.$supporter->info->passport_residence_address }}"
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
