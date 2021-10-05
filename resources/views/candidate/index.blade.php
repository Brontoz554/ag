@extends('layouts.app')
@section('content')
    <div class="container-fluid pt-4">
        <div class="buttons pt-3 pb-3">
            <a href="{{ route('register-candidate-view') }}" class="btn btn-secondary">Add candidate</a>
        </div>
        @if(isset($candidates[0]))
            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                <thead>
                <tr role="row">
                    <th class="sorting">Candidate name</th>
                    <th class="sorting">Candidate phone</th>
                    <th class="sorting">Candidate password</th>
                    <th class="sorting">Chief</th>
                    <th class="sorting">Chief address</th>
                    <th class="sorting">Lawyer</th>
                    <th class="sorting">Lawyer phone</th>
                    <th class="sorting">country</th>
                    <th class="sorting">region</th>
                    <th class="sorting">YIK</th>
                </tr>
                </thead>
                <tbody>
                @foreach($candidates as $candidate)
                    <tr class="odd">
                        <td>{{ $candidate->name }}</td>
                        <td>{{ $candidate->phone }}</td>
                        <td>{{ $candidate->password }}</td>
                        <td>{{ $candidate->info->chief }}</td>
                        <td>{{ $candidate->info->chief_address }}</td>
                        <td>{{ $candidate->info->lawyer }}</td>
                        <td>{{ $candidate->info->lawyer_phone }}</td>
                        <td>{{ $candidate->info->country }}</td>
                        <td>{{ $candidate->info->region }}</td>
                        <td>{{ $candidate->info->YIK }}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        @endif
    </div>
@endsection
