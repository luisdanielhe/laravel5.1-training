<div class="row left-align">
        <div class="col s12 m12">
            <p class="flow-text indent"><span class="Black">FIRST</span> you need define The array in the controller or where ever you want:</p>
            <blockquote>
                <p class="flow-text">
                    <pre><code class="prettyprint" >
$people = [ 'Luis', 'Vanita', 'Reni', 'Ricardo', 'Argenis' ]
                    </code></pre>
                </p>
            </blockquote>
            <p class="flow-text indent"><span class="Black">LATER</span> we have to built the list with the people and we should add a condition to any error if don't have a people variable.</p>
            <p class="flow-text indent">Example:</p>
            <blockquote>
                <p class="flow-text">
                    <pre><code class="prettyprint">
@ if (count($people))
    < ul class="collection with-header" >
        < li class="collection-item" > < h4 > People i know more than you< /h4 >< /li >
        @ foreach ($people as $person)
        < li class="collection-item" >{ { $person } }< /li >
        @ endforeach
    < /ul >
@ endif
                        </code></pre>
                </p>
            </blockquote>

            <p class="flow-text indent">The result:</p>

        </div>
</div>
[[-- #### This is a example or activity --]]
<div class="row left-align">
        <div class="col s12 m12">

            [[--*/  $people = [ 'Luis', 'Vanita', 'Reni', 'Ricardo', 'Argenis' ] /*--]]

            @if (count($people))
                    <ul class="collection with-header">
                        <li class="collection-item"> <h4>People i know more than you</h4></li>
                        @foreach ($people as $person)
                        <li class="collection-item">[[ $person ]]</li>
                        @endforeach
                    </ul>
            @endif
</div>