@extends('layouts.articles')

@section('content')
[[--
<form method="POST" action="/auth/register">
    [!! csrf_field() !!]

    <div>
        Name
        <input type="text" name="name" value="[[ old('name') ]]">
    </div>

    <div>
        Email
        <input type="email" name="email" value="[[ old('email') ]]">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>

--]]
 <div class="content">
    <div class="row form-small center-align">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    [!! FORM::open(['method' => 'POST', 'action' => 'Auth\AuthController@postRegister','class' => 'col s12']) !!]
                        <div class="form-group">
                            <label>name</label>
                            [!! FORM::input('text', 'name', '', ['class'=> 'form-control']) !!]
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            [!! FORM::email('email', '', ['class'=> 'form-control']) !!]
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            [!! FORM::password('password', ['class'=> 'form-control']) !!]
                        </div>

                        <div class="form-group">
                            <label>Password confirmation</label>
                            [!! FORM::password('password_confirmation', ['class'=> 'form-control']) !!]
                        </div>

                        <div>
                            [!! FORM::submit('send',['class' => 'btn btn-primary']) !!]
                        </div>
                    [!! FORM::close() !!]
                </div>
            </div>
</div>
@endsection