@extends('layouts.articles')

@section('content')


 [[--
 <form method="POST" action="/auth/login">
    [!! csrf_field() !!]

    <div>
        Email
        <input type="email" name="email" value="[[ old('email') ]]">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>

--]]

    <div class="content">
        <div class="row center-align form-small">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">

                        [!! FORM::open(['method' => 'POST', 'action' => 'Auth\AuthController@postLogin', 'class' => 'col s12']) !!]
                            <div class="form-group">
                                <label>Email</label>
                                [!! FORM::email('email', '', ['class'=> 'form-control']) !!]
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                [!! FORM::password('password', ['class'=> 'form-control']) !!]
                            </div>
                            <div class="checkbox">
                                <label><input name="remember" type="checkbox"> Remember me</label>
                            </div>
                            <div>
                                [!! FORM::submit('login',['class' => 'btn btn-primary']) !!]
                            </div>
                        [!! FORM::close() !!]
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop