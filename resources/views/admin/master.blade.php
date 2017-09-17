<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <!--  Material Dashboard CSS    -->
    <link href="css/try/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/mymodal.css">
    <style>
        .Alert {
            padding-top: 10px;
        }

        .Alert--info {
            background: #2548ce;
        }

        .Alert--success {
            background: #23ff14;
        }

        .Alert--error {
            /*background: #ff0000;*/
            color: red;
        }
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-left {
            display: flex;
            justify-content: left;
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
            position: relative;
            /*right: 10px;*/
            /*top: 18px;*/
        }

        .content {
            text-align: left;

        }

        .title {
            font-size: 40px;

        }

        i,.list-group > a {
            color: #636b6f;
            padding: 10px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .page-item, .page-link {
            color: #636b6f;
            /*padding: 5px;*/
            font-size: 18px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;

        }

        .m-b-md {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-4 col-lg-3">
            <!-- admin sidebar-->
            @include('admin.sidebar')
        </div>
        <div class="col-md-9 col-sm-8 col-lg-9">
            <!-- dashboard sections-->
            @yield('countData')

            @yield('upload')
            @yield('show')
            @yield('delete')
            @yield('edit')

            @yield('groupCreate')
            @yield('deleteGroup')
            @yield('editGroup')
            
            @yield('createSection')
            @yield('editSection')
            @yield('deleteSection')

        </div>
    </div>
</div>
<script src="\js\modal.js"></script>
</body>
</html>
