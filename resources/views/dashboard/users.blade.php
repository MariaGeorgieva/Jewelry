@extends('admin.master')
@section('users')
    <div class="row" style="margin-top: 10px">
        <!-- Column -->
        <div class="col-md-8 col-lg-8">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        @foreach($users as $user)
                        <h1><i class="material-icons">face</i>Total Users: {{ $user->id}}</h1>
                       @endforeach
                        {{--<h2 class="font-light m-b-0">324</h2>--}}
                        {{--<h6 class="text-muted">New Clients</h6></div>--}}
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="20%" class="css-bar m-b-0 css-bar-info css-bar-20"></div>
                    </div>
                </div>
            </div>
        </div>

@endsection