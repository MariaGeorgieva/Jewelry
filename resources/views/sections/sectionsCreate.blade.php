@extends('admin.master')
@section('createSection')
    <div class="container">
        <br>
        @include('flash')
        <div class="row">

            <div class="col-md-4">

                <form  method="POST" action="/sectionCreate" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <span class="form-control text-center">Create Section</span>

                    </div>

                    <div class="form-group">
                        <span class="form-control">Enter Sections Name<star>*</star></span>
                        <input type="text" class="form-control" name="title"
                               id="title" required/>
                        <sub class="">*required fields</sub>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-success">Create</button>

                    </div>

                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    @foreach($sections as $section)
                        <tr>
                            <th>{{ $section->id }}</th>
                            <th>{{ $section->title }}</th>
                            <th><a class="" data-toggle="modal" href="/sectionCreate/{{ $section->id }}/deleteSection"><i
                                            class="material-icons">delete_forever</i></a>
                                <a class="" data-toggle="modal" href="/sectionCreate/{{ $section->id }}/editSection"><i
                                            class="material-icons">edit</i></a>
                            </th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection