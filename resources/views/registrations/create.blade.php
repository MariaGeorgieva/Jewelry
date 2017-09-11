<style>
    span.input-group-addon {
        min-width:42%;
        text-align:left;
    }
</style>
@extends('layouts.master')
@section('register')
    <div id="quizModal" class="modal fade bd-modal-md" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel"
         aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Jewelry Art Workshop</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <form method="POST" action="/register" enctype="multipart/form-data" class="">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        {{--<div class="form-group">--}}
                            {{--<label for="name">Name:</label>--}}
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <span class="input-group-addon">Name:</span>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <br>
                        {{--<div class="form-group">--}}
                            {{--<label for="email">Email:</label>--}}
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <span class="input-group-addon">Email:</span>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <br>
                        {{--<div class="form-group">--}}
                            {{--<label for="password">Password:</label>--}}
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <span class="input-group-addon">Password:</span>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <br>
                        {{--<div class="form-group">--}}
                            {{--<label for="password_confirmation">Password Confirmation:</label>--}}
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <span class="input-group-addon">Password Confirmation:</span>
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation"
                                   required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Register</button>
                    </div>
                    @include('layouts.errors')
                </form>
            </div>
        </div>
    </div>
@endsection