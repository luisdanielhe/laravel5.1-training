<p class="flow-text indent">Here we are going to create a Article's <span class="Black">CONTROLLER</span> and  some <span class="Black">VIEWS</span>.</p>
<p class="flow-text indent">We can create the controller automatically with only writing this on the console:</p>

<blockquote>
    <pre><code class="prettyprint" >
=> php artisan make:controller ArticlesController
    </code></pre>
</blockquote>

<p class="flow-text indent">With <span class="Black">ALL METHOHS</span> will look this way.</p>

<blockquote>
    <pre><code class="prettyprint">
< ?php
namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $title = 'Article';
        return view('articles.index', compact('articles','title'));
    }
    public function create()
    {
        $title = 'Article';

    }
    public function store(Request $request)
    {
        $title = 'Article';
    }
    public function show($id)
    {
        $title = 'Article';
        $article = Article::find($id);
        return view('articles.show', compact('article','title'));
    }
    public function edit($id)
    {
        $title = 'Article';
    }
    public function update(Request $request, $id)
    {
        $title = 'Article';
    }
    public function destroy($id)
    {
        $title = 'Article';
    }
}
    </code></pre>
</blockquote>