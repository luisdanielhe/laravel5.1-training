<div class="row left-align">
        <div class="col s12 m12">

            <p class="flow-text indent">You need to start with the comand:</p>
            <blockquote>
                <p class="flow-text">
                    <pre><code class="prettyprint" >
php artisan tinker
                    </code></pre>
                </p>
            </blockquote>
            <p class="flow-text indent">Later you can use its Eloquent's sintaxis normally.</p>
            <p class="flow-text indent">Example:</p>
            <blockquote>
                <p class="flow-text">
                    <pre><code class="prettyprint">
 {{-- For create a new object --}}
$practice = new App\Practice;
$practice->title ='My first Practice';
$practice->description ='Practice with tinker on console';
$practice->published_at = Carbon\Carbon::now();
 {{-- Show the object --}}
$practice->toArray();
 {{-- Save --}}
$practice->save();
 {{-- Create ans save an object with other way --}}
$practice = App\Practice::create( ['title' => '5-Blade', 'description' => 'in this practice we start with basic Blade', 'published_at' => Carbon\Carbon::now()]);
 {{-- Show all object saved --}}
App\Practice::all()->toArray();
 {{-- Update an object --}}
$practiceUpdate = App\Pratice::find(2);
$practiceUpdate->published_at = Carbon\Carbon::now();
$practiceUpdate->save();
                        </code></pre>
                </p>
            </blockquote>
        </div>
        <div class="col s12 m12">
            <p class="flow-text indent">Other example on console:</p>
            <img class="activator z-depth-4 materialboxed" data-caption="A picture of example about Finker on Laravel 5" src="[[[ asset('assets/images/example-finker.jpg') ]]]">
            <p class="flow-text indent">And the result is the next practice :)</p>
        </div>
</div>