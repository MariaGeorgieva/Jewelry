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
                <div class="modal-body">
                    <form method="POST" action="/register" enctype="multipart/form-data" class="">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">

                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">

                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="form-group">

                            <label for="password_confirmation">Password Confirmation:</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation"
                                   required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>

                        @include('layouts.errors')

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection