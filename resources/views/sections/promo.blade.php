<style>
    .grid {
        position: relative;
        margin: 0 auto;
        /*padding: 1em 0 4em;*/
        max-width: 1000px;
        list-style: none;
        text-align: center;
    }

    /* Common style */
    .grid figure {
        position: relative;
        float: left;
        overflow: hidden;
        /*margin: 10px 1%;*/
        min-width: 300px;
        max-width: 480px;
        max-height: 360px;
        width: 50%;
        background: #4A91CE;
        text-align: center;
        cursor: pointer;
    }

    .grid figure img {
        position: relative;
        display: block;
        min-height: 100%;
        max-width: 100%;
        opacity: 0.8;
    }

    .grid figure figcaption {
        padding: 1.5em;
        color: #fff;
        text-transform: uppercase;
        font-size: 1.25em;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .grid figure figcaption::before,
    .grid figure figcaption::after {
        pointer-events: none;
    }

    .grid figure figcaption,
    .grid figure figcaption > a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Anchor will cover the whole item by default */
    /* For some effects it will show as a button */
    .grid figure figcaption > a {
        z-index: 1030;
        text-indent: 200%;
        white-space: nowrap;
        font-size: 0;
        opacity: 0;
    }

    .grid figure h2 {
        word-spacing: -0.15em;
        font-weight: 300;
    }

    .grid figure h2 span {
        font-weight: 800;
    }

    .grid figure h2,
    .grid figure p {
        margin: 0;
    }

    .grid figure p {
        letter-spacing: 1px;
        font-size: 60%;
    }

    /*---------------*/
    /***** Milo *****/
    /*---------------*/

    figure.effect-milo {
        background: #2e5d5a;
    }

    figure.effect-milo img {
        max-width: none;
        width: -webkit-calc(100% + 60px);
        width: calc(100% + 60px);
        opacity: 1;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(-30px, 0, 0) scale(1.12);
        transform: translate3d(-30px, 0, 0) scale(1.12);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    figure.effect-milo:hover img {
        opacity: 0.5;
        -webkit-transform: translate3d(0, 0, 0) scale(1);
        transform: translate3d(0, 0, 0) scale(1);
    }

    figure.effect-milo h2 {
        position: absolute;
        right: 0;
        bottom: 0;
        padding: 0.2em 0.2em;
    }

    figure.effect-milo p {
        padding: 0 10px 0 0;
        width: 50%;
        border-right: 1px solid #fff;
        text-align: right;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(-40px, 0, 0);
        transform: translate3d(-40px, 0, 0);
    }

    figure.effect-milo:hover p {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    @media screen and (max-width: 50em) {
        .grid figure {
            display: inline-block;
            float: none;
            margin: 10px auto;
            width: 100%;
        }
    }

    .carousel {
        max-height: 48%;
        /*max-width: 100%;*/

        overflow: hidden;
    }

   .carousel-item > img {
        /*max-width: 100%;*/
        max-height: 48%;
        /*overflow: hidden;*/
    }
</style>
@extends('sections.master')
@section('groupTwo')
    @foreach($images as $image)
        @foreach($sections as $section)
            @if($image->section_id === $section->id && $section->id === 1)
                @foreach($groups as $group)
                    @if($image->group_id === $group->id && $group->id === 2)
                        <div class="col">
                            <div class="grid">
                                <figure class="effect-milo">
                                    <img src="{{url("storage/".$image->image)}}" alt="{{$image->title}}">
                                    <figcaption>
                                        <h2>J.A.W.</h2>
                                        <p>  {{ $image->description }}</p>
                                        <a data-target="#{{ $image->id }}" data-toggle="modal" href="#myModal">View
                                            More</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    @endif
                    <div class="modal fade" id="{{ $image->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-faded">
                                    <h4 class="modal-title" id="exampleModalLabel">{{$image->title}}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {{--<div class="form-group">--}}
                                            {{--<img class="img-thumbnail" src="{{url("storage/".$image->image)}}"--}}
                                            {{--alt="{{$image->id}}"/>--}}
                                            <div id="carouselExampleIndicators" class="carousel slide"
                                                 data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                        class="active"></li>
                                                    <li data-target="#carouselExampleIndicators"
                                                        data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators"
                                                        data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active ">
                                                        <img class="d-block img-fluid"
                                                             src="{{url("storage/".$image->image)}}"
                                                             alt="First slide">
                                                    </div>

                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid"
                                                             src="{{url("storage/".$image->image)}}">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-sm-block"
                                                             src="{{url("storage/".$image->image)}}"
                                                             alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                   role="button"
                                                   data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                              aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                   role="button"
                                                   data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                              aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <h5 class="text-center"><strong>{{$image->title}}</strong></h5>
                                            <br>
                                            <div class="">
                                                <h4>{{$image->description}}</h4>
                                            </div>
                                            <div class="">
                                                <h4>{{$image->price}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-faded">
                                    <button type="button" class="btn btn-secondary" title="Add to Basket!">
                                        <i class="material-icons">shopping_basket</i>
                                    </button>
                                    <button type="button" class="btn btn-secondary " title="Add to Favourites!">
                                        <i class="material-icons">favorite</i>
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                            title="Back!">
                                        <i class="material-icons">exit_to_app</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        @endforeach
    @endforeach
@endsection

@section('groupOne')
    @foreach($images as $image)
        @foreach($sections as $section)
            @if($image->section_id === $section->id && $section->id === 1)
                @foreach($groups as $group)
                    @if($image->group_id === $group->id && $group->id === 1)
                        <div class="col">
                            <div class="grid">
                                <figure class="effect-milo">
                                    <img src="{{url("storage/".$image->image)}}"
                                         alt="{{$image->title}}">
                                    <figcaption>
                                        <h2>J.A.W.</h2>
                                        <p>  {{ $image->description }}</p>
                                        <a data-target="#{{ $image->id }}" data-toggle="modal"
                                           href="#myModal"></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach
    @endforeach
@endsection
