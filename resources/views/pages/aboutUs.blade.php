<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Us </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            /*background-color: #fff;*/
            background-image: url("https://pixabay.com/get/eb34b20720f7063ed1534705fb094092e776e4d018ac104495f5c479a5eeb1bc/bouquet-2138837_1920.jpg");

            /*background-image: url("https://pixabay.com/get/eb34b20720f7063ed1534705fb094092e776e4d018ac104495f5c479a5eeb1bc/bouquet-2138837_1280.jpg");*/
            /*background-image: url("https://pixabay.com/get/eb34b20720f7063ecd1f4301e24d4093e26ae3d019b4144197f6c071/bouquet-2138837.jpg");*/

            /*background: #CC95C0; !* fallback for old browsers *!*/
            /*background: -webkit-linear-gradient(to left, #7AA1D2, #DBD4B4, #CC95C0); !* Chrome 10-25, Safari 5.1-6 *!*/
            /*background: linear-gradient(to left, #7AA1D2, #DBD4B4, #CC95C0); !* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ *!*/

            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;

        }

        .m-b-md {
            margin-bottom: 30px;
        }

        p {

            color: #636b6f;
            padding: 0 25px;
            /*font-size: 12px;*/
            font-weight: 600;
            /*letter-spacing: .1rem;*/
            text-decoration: none;
            /*text-transform: uppercase;*/
        }

        .fa-diamond, .fa-my > i {
            font-size: initial;
            /*-webkit-text-shadow: 1px 0px 3px rgb(113, 118, 119);*/
            /*text-shadow: 1px 0px 3px rgb(113, 118, 119);*/
            /*font-size: x-large;*/
            /*color: #3e5667;*/
        }
    </style>
</head>
<body>


<div class="flex-center position-ref full-height">
    @include('layouts.links')

    <div class="content">

        <div class="title m-b-md">
            <i class="fa fa-diamond fa-my"></i> About Us <i class="fa fa-diamond"></i>
        </div>

        <p>
            <i class="fa fa-diamond"></i>Jewelry Art Workshop is a e-shop for unique handmade jewelry inspired by the
            idea of being with something new and different everyday,
            like ourselves and because our jewelry be combined with our mental state and
            desire for change.
        </p>
        <p> So at <i class="fa fa-diamond"></i>Jewelry Art Workshop you will find many jewels with semi-precious stones
            and curious facts about them to choose how to start your day and what to do in it :)
        </p>
        <p> <i class="fa fa-gift"></i> We also produce jewelery at your request. If you liked something and want us to do it to you or when any of
            our items is running out of date.
        </p>
        <p>
            <i class="fa fa-truck"></i> The delivery of your chosen products is through a courier company, as may be desired at the address (house
            or office) you have chosen or at your chosen courier company office.
        </p>

        @include('layouts.middle_links')
    </div>
</div>
</body>
</html>
