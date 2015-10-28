@if (isset($articles))
  <nav class="light-blue darken-4">
@else
<nav class="cyan">
@endif
    <div class="nav-wrapper">
      <a href=""><img src="[[[ asset('assets/images/nav.svg') ]]]" alt=""></a>
      <a href="/" class="brand-logo">Laravel 5.1 Training</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/practices" class="waves-effect waves-light" >Practices</a></li>
        <li><a href="/about" class="waves-effect waves-light">About</a></li>
        <li><a href="/contact" class="waves-effect waves-light">Contact</a></li>
      </ul>
    </div>
</nav>