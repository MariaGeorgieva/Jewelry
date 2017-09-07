@extends('layouts.master')

@section('signIn')

    <div id="quizModal" class="modal fade bd-modal-md" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel"
         aria-hidden="true" data-backdrop="false">

        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Jewelry Art Workshop</h1>
                    {{--<h3>Вход</h3>--}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>

                </div>
                <div class="modal-body">
                    <form method="POST" action="/login" enctype="multipart/form-data" class="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Sign In</button>
                        </div>
                        @include('layouts.errors')
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
