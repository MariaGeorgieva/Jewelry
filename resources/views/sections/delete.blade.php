@extends('admin.master')
@section('deleteSection')
    <div id="quizModal" class="modal fade bd-modal-md" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel"
         aria-hidden="true" data-backdrop="false">

        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Are you sure that you want to permanently delete the selected
                        Section # {{$section->id}} </h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/sectionCreate/{{ $section->id }}" enctype="multipart/form-data" class="">

                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="row">

                            <div class="col">
                                <h4>Title: {{$section->title}}</h4>
                            </div>
                        </div>


                        <br>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal"
                                onclick="window.location='/sectionCreate'">Exit
                        </button>
                    </form>
                </div>
                @include('layouts.errors')
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>
@endsection