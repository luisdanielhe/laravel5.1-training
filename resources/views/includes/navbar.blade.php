@if (isset($articles))
  <nav class="light-blue lighten-1" role="navigation">
@else
  <nav class="cyan" role="navigation">
@endif
    <div class="nav-wrapper container">
      <a href="/" class="brand-logo">Laravel 5.1 Training </a>
      <ul class="right hide-on-med-and-down">

        <li><a href="/practices" class="waves-effect waves-light" >Practices</a></li>
        <li><a href="/about" class="waves-effect waves-light">About</a></li>
        <li><a href="/contact" class="waves-effect waves-light">Contact</a></li>

        @if (Auth::guest())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">Register</a></li>
        @else
            <li>
                <a href="#">[[ Auth::user()->name ]]</a>
            </li>
            <li><a href="/auth/logout">Logout</a></li>
        @endif

        <li><a href="#Hello"><img src="[[[ asset('assets/images/invader.svg') ]]]" alt="ico" style="position: absolute; right: -35px;"></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav" style="left: -250px;">
        <li><a href="/practices" class="waves-effect waves-light" >Practices</a></li>
        <li><a href="/about" class="waves-effect waves-light">About</a></li>
        <li><a href="/contact" class="waves-effect waves-light">Contact</a></li>
        @if (Auth::guest())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">Register</a></li>
        @else
            <li>
                <a href="#">[[ Auth::user()->name ]]</a>
            </li>
            <li><a href="/auth/logout">Logout</a></li>
        @endif
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><img data-activates="nav-mobile" class="button-collapse" src="[[[ asset('assets/images/invader.svg') ]]]" alt=""></a>

    </div>
</nav>