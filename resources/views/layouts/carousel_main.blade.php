@extends('layouts.master')
@section('carousel')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($images as $image)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}"
                        class="active"></li>
                @endforeach
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach($images as $image)
                    @if($loop->first)
                        <div class="carousel-item active">
                            <img class="rounded mx-auto d-block"
                                 src="{{url("storage/".$image->image)}}"
                                 alt="{{ $image->title }}">
                            {{--<div class="carousel-caption d-none d-md-block">--}}
                                {{--<h3>{{ $image->title }}</h3>--}}
                                {{--<p>{{ $image->description }}</p>--}}
                            {{--</div>--}}
                        </div>
                    @else
                        <div class="carousel-item">
                            <img class="rounded mx-auto d-block"
                                 src="{{url("storage/".$image->image)}}"
                                 alt="{{ $image->title }}">
                            {{--<div class="carousel-caption d-none d-md-block">--}}
                                {{--<h3>{{ $image->title }}</h3>--}}
                                {{--<p>{{ $image->description }}</p>--}}
                            {{--</div>--}}
                        </div>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators"
               role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators"
               role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection