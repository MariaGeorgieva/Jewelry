@extends('files.upload')
@section('groups')
    @if ($groups->count())
        @foreach($groups as $group)
            <option value="{{ $group->id }}" {{ $selectedGroup == $group->id ? 'selected="selected"' : '' }}>{{ $group->title }}
            </option>
        @endforeach
    @endif
@endsection




