@extends('admin.master')
@section('show')
    <div class="container">
        <table class="table table-bordered table-hover" style="margin-top:12px" >
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Title</th>
                <th>Description</th>
                <th>Group</th>
                <th>Sections</th>
                <th>Actions</th>
            </tr>
            </thead>
            @foreach($images as $image)
                <tr>
                    <th>{{$image->id}}</th>
                    <th>
                        <img width="120px" src="{{url("storage/".$image->image)}}">
                    </th>
                    <th>{{$image->price}} лв</th>
                    <th>{{$image->title}}</th>
                    <th>{{$image->description}}</th>
                    @foreach($groups as $group)
                        @if($group->id === $image->group_id )
                            <th>{{$group->title}}
                            </th>
                        @endif
                    @endforeach
                    @foreach($sections as $section)
                        @if($section->id === $image->section_id )
                            <th>{{$section->title}}
                            </th>
                        @endif
                    @endforeach
                    <th><a class="" data-toggle="modal" href="/{{ $image->id }}/delete"><i class="material-icons">delete_forever</i></a>
                        <a class="" data-toggle="modal" href="/{{ $image->id }}/edit"><i class="material-icons">edit</i></a>
                    </th>
                </tr>
            @endforeach
        </table>
        <div class="flex-center">
            {{ $images->links('pagination.bootstrap-4') }}
        </div>

    </div>
    <div>
    </div>
@endsection
