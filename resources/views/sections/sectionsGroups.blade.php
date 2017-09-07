@extends('files.upload')
@section('sections')
    @if ($sections->count())
        @foreach($sections as $section)
            <option value="{{ $section->id }}" {{ $selectedSection == $section->id ? 'selected="selected"' : '' }}>{{ $section->title }}
            </option>
        @endforeach
    @endif
@endsection
@section('groups')
    @if ($groups->count())
        @foreach($groups as $group)
            <option value="{{ $group->id }}" {{ $selectedGroup == $group->id ? 'selected="selected"' : '' }}>{{ $group->title }}
            </option>
        @endforeach
    @endif
@endsection
