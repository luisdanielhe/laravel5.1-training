<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[[ $title='Articles' ]]</title>
    @include('includes.head')
    @yield('style')
</head>
<body>
    @include('includes.navbar', ['articles' => true] )
    <section>
        <div class="container-articles">
            @yield('content')
        </div>
    </section>
    @include('includes.footer')
    @include('includes.javascript')
    @yield('javascript')
</body>
</html>
