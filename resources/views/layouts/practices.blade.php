<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[[ $title ]]</title>
    @include('includes.head')
    @yield('style')
</head>
<body>
    @include('includes.navbar')
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>
    @include('includes.javascript')
    @yield('javascript')
</body>
</html>
