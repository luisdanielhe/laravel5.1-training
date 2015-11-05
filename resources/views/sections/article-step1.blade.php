<p class="flow-text indent"><span class="Black">START CREATING</span> a <span class="Black">MIGRATION</span> on console of the next way:</p>

<blockquote>
    <pre><code class="prettyprint" >
=> php artisan migrate
=> php artisan make:migration create_articles_table --create="articles"
    </code></pre>
</blockquote>

<p class="flow-text indent"><span class="Black">Now</span> you need to configure a migration at:</p>
<pre>database > migrations > date_create_articles_table.php</pre>

<blockquote>
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
</blockquote>

<p class="flow-text indent">The <span class="Black">NEXT STEP</span>, you should write this on console to migrate the data base:</p>

<blockquote>
    <pre><code class="prettyprint" >
=> php artisan migrate
    </code></pre>
</blockquote>