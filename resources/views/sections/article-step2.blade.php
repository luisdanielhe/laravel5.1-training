<p class="flow-text indent"><span class="Black">ARTICLE's MODEL</span>, in this step you have to create a model woth the next comand:</p>

<blockquote>
    <pre><code class="prettyprint" >
=> php artisan make:model Article
    </code></pre>
</blockquote>

<p class="flow-text indent"><span class="Black">NOW</span> we go to Article's model to define the fillabe.</p>

<blockquote>
    <pre><code class="prettyprint">
< ?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'publiched_at'
    ];
}
    </code></pre>
</blockquote>