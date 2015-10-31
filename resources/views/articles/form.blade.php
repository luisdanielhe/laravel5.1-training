[[-- Temporary --]]
[!! FORM::hidden('user_id', 1) !!]

<div class="row">
        <div class="input-field col s12">
            [!! FORM::text('title', null, ['class' => 'validate']) !!]
            [!! FORM::label('title', 'Title') !!]
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            [!! FORM::textarea('body', null, ['class' => 'materialize-textarea', 'length' => '120']) !!]
            [!! FORM::label('body', 'Body') !!]
        </div>
    </div>
    <div class="row">
        <div class=" col s12">
            [!! FORM::label('published_at', 'Published on:') !!]
            [!! FORM::input('date', 'published_at', date('Y-m-d'), null, ['class' => 'validate']) !!]
        </div>
    </div>
    <div class="row center-align">
        <div class="col s12">
            [!! FORM::submit($submitButtonText, ['class' => 'btn']) !!]
        </div>
</div>