 <div class="row tabs">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#step1">Migrates</a></li>
        <li class="tab col s3"><a href="#step2">Model</a></li>
        <li class="tab col s3"><a href="#step3">Controller</a></li>
        <li class="tab col s3 disabled"><a href="#step4">Relationship</a></li>
        <li class="tab col s3 disabled"><a href="#step5">Middelware</a></li>
      </ul>
    </div>
</div>
<div class="row">
    <div class="col s12 m12">
        <div id="step1" class="col s12">
            @include('sections.article-step1')
        </div>
        <div id="step2" class="col s12">
            @include('sections.article-step2')
        </div>
        <div id="step3" class="col s12">
            @include('sections.article-step3')
        </div>
        <div id="step4" class="col s12">
            @include('sections.article-step4')
        </div>
        <div id="step5" class="col s12">
            @include('sections.article-step5')
        </div>
    </div>
</div>

<div class="row left-align">
    <div class="col s12 m12">
        <a href="/articles" class="btn-floating btn-large waves-effect waves-light blue">Views</a>
    </div>
</div>
