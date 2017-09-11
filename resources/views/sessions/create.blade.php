<style>
    span.input-group-addon {
        min-width:28%;
        text-align:left;
    }
</style>
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

                <form method="POST" action="/login" enctype="multipart/form-data" class="">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <span class="input-group-addon">Email Address:</span>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <br>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <span class="input-group-addon">Password:</span>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary text-right">Sign In</button>
                    </div>
                    @include('layouts.errors')
                </form>
            </div>
        </div>
    </div>
@endsection
