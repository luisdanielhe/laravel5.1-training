<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[[ $title ]]</title>
    @include('includes.head')
    <style>
    html, body {
        height: 100%;
    }

    .body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        height: 70%;
    }

    .container-welcome {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content-welcome {
        text-align: center;
        display: inline-block;
    }

    .title-welcome {
        font-size: 96px;
        font-weight: 100;
        font-family: 'Lato';
    }
</style>
</head>
<body>
    @include('includes.navbar')
    <div class="body">
        <div class="container-welcome">
            <div class="content-welcome">
                 @yield('content')
            </div>
        </div>
    </div>

    @include('includes.javascript')
    @yield('javascript')
</body>
</html>
