@extends('layouts.articles')

@section('content')

    <div class="content">
        <div class="row left-align">
                <div class="col s12 m12">
                    <a href="[[ URL::previous() ]]" class="btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">replay</i></a>
                </div>
        </div>
        <div class="row">
            <div class="col s12 center-align">
                    <h4 class="Black">EDIT ARTICLE:</h4>
                    <h5 class="thin">[[ $article->title ]]</h5>
            </div>
        </div>
    </div>
    @include('errors.list')

    <div class="content">
        <div class="row form-small">
            [!! FORM::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id], 'class' => 'col s12']) !!]
                @include('articles.form', ['submitButtonText' => 'Update article'])
            [!! FORM::close() !!]
        </div>
    </div>

@stop