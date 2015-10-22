<div class="row left-align">
        <div class="col s12 m12">

            <p class="flow-text indent">You need to start creating a migration on console of the next way:</p>
            <blockquote>
                <p class="flow-text">
                    <pre><code class="prettyprint" >
=> php artisan migrate
=> php artisan make:migration create_articles_table --create="articles"
                    </code></pre>
                </p>
            </blockquote>
            <p class="flow-text indent">Later configure a migration in "database > migrations > date_create_articles_table.php".</p>
            <blockquote>
                <p class="flow-text">
                    <pre><code class="prettyprint">
< ?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
                        </code></pre>
                </p>
            </blockquote>
        </div>
        <div class="col s12 m12">
            <p class="flow-text indent">Now you should create and configure the Model:</p>
            <blockquote>
                <p class="flow-text">
                    <pre><code class="prettyprint" >
=> php artisan make:model Article
                    </code></pre>
                </p>
            </blockquote>
            <p class="flow-text indent">Add a method.</p>
            <blockquote>
                <p class="flow-text">
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
                </p>
            </blockquote>
        </div>
        <div class="col s12 m12">
            <p class="flow-text indent">And the last create the controller and views:</p>
            <blockquote>
                <p class="flow-text">
                    <pre><code class="prettyprint" >
=> php artisan make:controller ArticlesController
                    </code></pre>
                </p>
            </blockquote>
            <p class="flow-text indent">Add a methods.</p>
            <blockquote>
                <p class="flow-text">
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
                </p>
            </blockquote>
        </div>
</div>
<div class="row left-align">
    <div class="col s12 m12">
        <a href="/articles" class="btn-floating btn-large waves-effect waves-light blue">Views</a>
    </div>
</div>