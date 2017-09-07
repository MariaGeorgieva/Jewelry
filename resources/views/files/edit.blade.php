@extends('admin.master')
@section('edit')
    <div id="quizModal" class="modal fade bd-modal-md" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel"
         aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Product # {{$image->id}} </h4>
                </div>
                <div class="modal-body">

                    <form method="POST" action="/{{ $image->id }}" enctype="multipart/form-data" class="">

                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="row">
                            <div class="col">
                                <img width="250px" src="{{url("storage/".$image->image)}}">
                            </div>
                            <div class="col">
                                <div class="">
                                    <label class="" for="title">Title:</label>
                                    <textarea name="title" id="title" class="form-control">{{$image->title}}</textarea>
                                </div>
                                <div class="">
                                    <label class="" for="price">Price:</label>
                                    <textarea name="price" id="price" class="form-control">{{$image->price}}</textarea>
                                </div>
                                <div class="">
                                    <label class="" for="description">Description:</label>
                                    <textarea name="description" id="description"
                                              class="form-control">{{$image->description}}</textarea>
                                </div>
                                <div class="">
                                    <label class="" for="group_id">Group:</label>
                                    <textarea name="group_id" id="group_id"
                                              class="form-control">{{$image->group_id}}
                                    </textarea>
                                    <select class="form-control m-bot15" name="group_id" title="group_id">
                                        {{--@yield('groups')--}}
                                        {{--@if ($groups->count())--}}
                                            {{--@foreach($groups as $group)--}}
                                                {{--<option value="{{ $group->id }}" {{ $selectedGroup == $group->id ? 'selected="selected"' : '' }}>{{ $group->title }}--}}
                                                {{--</option>--}}
                                            {{--@endforeach--}}
                                        {{--@endif--}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal"
                            onclick="window.location='/show'">Exit
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