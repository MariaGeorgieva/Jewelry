@extends('admin.master')
@section('upload')

    <div class="container" style="padding-top: 10px">
        <div class="row">
            <div class="col-md-6">
                <form class="form-control " method="POST" action="/images" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h4 class="text-center">*Upload Product*</h4>

                    <div class="form-group">
                        <input type="file" class="form-control" name="image" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted "><strong>*.jpg *.jpeg *.png *.gif Max
                                Size:2MB</strong></small>
                    </div>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">Title</div>
                        <input type="text" class="form-control" name="title"
                               id="title" required/>
                    </div>
                    <br>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">Price BGN</div>
                        <input type="number" class="form-control" name="price"
                               id="price" min="0" value="0" step=".01" required/>
                    </div>
                    <br>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">Description</div>
                        {{--<span class="form-control">Description<star>*</star></span>--}}
                        <textarea type="text" class="form-control" name="description"
                                  id="description" required></textarea>
                    </div>
                    <br>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">Group</div>
                        {{--<span class="form-control">Group<star>*</star></span>--}}
                        <select class="form-control m-bot15" name="group_id" title="group_id">
                            {{--<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">--}}
                            @yield('groups')
                        </select>
                    </div>
                    <br>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">Section</div>
                        {{--<span class="form-control">Section<star>*</star></span>--}}
                        <select class="form-control m-bot15" name="section_id" title="section_id">
                            @yield('sections')
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-default">Save</button>

                </form>
            </div>
        </div>
    </div>
@endsection