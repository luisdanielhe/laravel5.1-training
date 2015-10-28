@extends('layouts.articles')

@section('content')

    <div class="content">
        <div class="row left-align">
                <div class="col s12 m12">
                    <a href="/articles" class="btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">replay</i></a>
                </div>
        </div>
        <div class="row">
            <div class="col s12 center-align">
                    <h4 class="Black">CREATE ARTICLE</h4>
                    <h5 class="thin">Complete all fields</h5>
            </div>
        </div>
    </div>
    @include('errors.list')
    <div class="content">
        <div class="row form-small">
            [!! FORM::open(['url' => 'articles', 'class' => 'col s12']) !!]
                @include('articles.form', ['submitButtonText' => 'Add article'])
            [!! FORM::close() !!]
        </div>
    </div>

@stop