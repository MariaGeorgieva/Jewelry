<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacts</title>

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
            background-image: url("https://pixabay.com/get/eb34b70f2ef2073ed1534705fb094092e776e4d018ac104495f5c479a5e4b5bd/pink-2160666_1920.jpg");
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
            letter-spacing: .1rem;
            text-decoration: none;
            /*text-transform: uppercase;*/
        }

    </style>
</head>
<body>


<div class="flex-center position-ref full-height">
    @include('layouts.links')

    <div class="content">
        <i class="fa fa-diamond"></i>

        <div class="title m-b-md">
            {{--<i class="fa fa-diamond"></i>J.A.W.--}}
            Contacts
        </div>

        <p>
            e-mail: m.georgieva17<i class="fa fa-at"></i>icloud.com
        </p>
        <br>
        @include('layouts.middle_links')
    </div>
</div>
</body>
</html>
