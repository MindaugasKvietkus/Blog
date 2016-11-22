<?php
/**
 * Created by PhpStorm.
 * User: Mariukas
 * Date: 2016.11.21
 * Time: 10:04
 */

namespace app\Http\Controllers;


use App\Article as Article;
use App\Post;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class MainController
{
    public function index(){

        $articles = DB::table('articles')->get();

        return view('index', ['articles' => $articles]);
    }

    public function getArticle($id){

        $article = DB::table('articles')->where('id', '=', $id)->get();

        $post = DB::table('posts')->where('article_id', '=', $id)->get();

        return view('article_single', [
            'article' => $article,
            'post' => $post
        ]);
    }
/*
    public function adminLogin(Request $request){

        //$user = App\Users::all();

        $user = new User();
        if ($request->action){

        }
        if (($user->name === $_POST['name']) && ($user->password === $_POST['password'])){
        $user->name = $request->name;
        $user->password = $request->password;

            return redirect()->route('admin_home');
        }
    }

    public function adminIndex(){

        $articles = DB::table('articles')->get();

        return view('admin_base', ['articles' => $articles]);
    }
*/

    public function addArticle(Request $request){

        $article = new Article();

        $article->name = $request->name;

        $article->mini_text = $request->mini_text;

        $article->text = $request->text;

        $article->save();

        return redirect()->route('home');

    }

    public function deleteArticle($id){

        DB::table('articles')->where('id', '=', $id)->delete();

        return redirect()->route('home');

    }

    public function showEditArticle($id){

        $article = DB::table('articles')->where('id', '=', $id)->get();

        return view('admin_edit', ['article' => $article]);
    }

    public function editArticle(Request $request, $id){

        $article = Article::find($id);

        $article->name = $request->name;

        $article->mini_text = $request->mini_text;

        $article->text = $request->text;

        $article->save();

        return redirect()->route('home');

    }

    public function addPost(Request $request, $id){

        $post = new Post();

        $post->article_id = $id;

        $post->name = $request->name;

        $post->post = $request->post;

        $post->save();

        return redirect()->back();

    }

}