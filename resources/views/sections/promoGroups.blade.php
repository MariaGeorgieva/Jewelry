<style>
    .modal-title {
        text-transform: capitalize;
    }

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

    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */
    /*Carousel base class*/
    .carousel {
        height: auto;
        width: 100%;
        overflow: hidden;
    }

    .carousel-item {

        height: 19rem;
        background-color: #777;
    }

    .carousel-item > img {
        position: absolute;
        top: 0;
        left: 0;

        height: 19rem;
    }

    div.modal-body {
        padding: 0px;
    }
   div.second-row{
       padding: 10px;
    }

    .material-icons.md-dark:hover{ color: #ff0000
    }
</style>
@extends('sections.master')
@section('groups')
    @foreach($images as $image)
        @foreach($sections as $section)
            @if($image->section_id == $section->id && $section->id == 1)
                @foreach($groups as $group)
                    @if($image->group_id == $group->id && $group->id == 1)
                        @include('sections.figure')
                    @endif
                    @if($image->group_id == $group->id && $group->id == 2)
                        @include('sections.figure')
                    @endif
                    {{--@if($image->group_id == $group->id && $group->id == 3)--}}
                    {{--@include('sections.figure')--}}
                    {{--@endif--}}
                    @include('sections.modal_promo')
                @endforeach
            @endif
        @endforeach
    @endforeach
@endsection
