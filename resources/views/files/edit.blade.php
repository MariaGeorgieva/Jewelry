<style>
    span.input-group-addon {
        min-width:25%;
        text-align:left;
    }
</style>
@extends('admin.master')
@section('edit')
    <div id="quizModal" class="modal fade bd-modal-md" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel"
         aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title title-center">Change Product # {{$image->id}} </h4>
                    <button type="button" class="close" onclick="window.location='/show'">&times;</button>
                </div>


                <form method="POST" action="/{{ $image->id }}" enctype="multipart/form-data" class="">

                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img width="100px" src="{{url("storage/".$image->image)}}">
                            </div>
                            <div class="col-md-10">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <span class="input-group-addon">Title:</span>
                                    <textarea rows="1" name="title" id="title"
                                              class="form-control">{{$image->title}}</textarea>
                                </div>
                                <br>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <span class="input-group-addon">Current Price:</span>
                                    <span id="price" class="form-control">{{$image->price}}
                                    </span>
                                    <div class="input-group-addon">New Price:</div>
                                    <textarea rows="1" name="price" id="price"
                                              class="form-control">{{$image->price}}</textarea>
                                </div>
                                <br>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <span class="input-group-addon">Description:</span>
                                    <textarea rows="3" name="description" id="description"
                                              class="form-control">{{$image->description}}</textarea>
                                </div>
                                <br>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <span class="input-group-addon">Current Group:</span>
                                    <span id="group_id" class="form-control">
                                             @foreach($groups as $group)
                                            @if($image->group_id === $group->id)
                                                {{$group->title}}@endif
                                        @endforeach
                                    </span>
                                    <span class="input-group-addon">New Group:</span>
                                    <select class="form-control m-bot15" name="group_id" title="group_id">
                                        @if ($groups->count())
                                            @foreach($groups as $group)
                                                <option value="{{ $group->id }}" {{ $selectedGroup == $group->id ? 'selected="selected"' : '' }}>{{ $group->title }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <br>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <span class="input-group-addon">Current Group:</span>
                                    <span id="section_id" class="form-control">
                                     @foreach($sections as $section)
                                            @if($image->section_id === $section->id)
                                                {{$section->title}}@endif
                                        @endforeach
                                    </span>
                                    <span class="input-group-addon">New Group:</span>
                                    <select class="form-control m-bot15" name="section_id" title="section_id">
                                        @if ($sections->count())
                                            @foreach($sections as $section)
                                                <option value="{{ $section->id }}" {{ $selectedSection == $section->id ? 'selected="selected"' : '' }}>{{ $section->title }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                onclick="window.location='/show'">Exit
                        </button>
                    </div>
                </form>
            </div>
            @include('layouts.errors')
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