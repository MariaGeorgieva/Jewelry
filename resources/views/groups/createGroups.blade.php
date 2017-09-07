@extends('admin.master')
@section('groupCreate')

    <div class="container">
        <br>
        @include('flash')
        <div class="row">

            <div class="col-md-4">

                <form method="POST" action="/groupsCreate" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <span class="form-control text-center">Create Groups</span>

                    </div>

                    <div class="form-group">
                        <span class="form-control">Enter Group Name<star>*</star></span>
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
                    @foreach($groups as $group)
                        <tr>
                            <th>{{ $group->id }}</th>
                            <th>{{ $group->title }}</th>
                            <th><a class="" data-toggle="modal" href="/groupsCreate/{{ $group->id }}/deleteGroup"><i
                                            class="material-icons">delete_forever</i></a>
                                <a class="" data-toggle="modal" href="/groupsCreate/{{ $group->id }}/editGroup"><i
                                            class="material-icons">edit</i></a>
                            </th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection