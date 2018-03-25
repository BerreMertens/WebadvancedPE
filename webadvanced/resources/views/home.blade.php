<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
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
            float: right;
            width:100%;
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

        .lijst{
            list-style-type: none;

        }
        li{
            font-size: 24px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="top-right links">
        <a href="{{ url('/') }}">welcome</a>
    </div>


    <div class="content">
        <div class="title m-b-md">
           Nieuwe auto
        </div>
            <form method="post" action="/home" id="insert">

                {{csrf_field()}}
                <p>merk</p>
                <input name="merk" type="text">
                <p>model</p>
                <input name="model" type="text">
                <p>prijs</p>
                <input name="prijs" type="number">
                <p></p>
                <input type="submit" content="save">
            </form>




    </div>

</div>
</body>
</html>