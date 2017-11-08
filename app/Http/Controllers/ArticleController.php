<?php namespace App\Http\Controllers;

use App\Components\EndaPage;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Tag;
use Illuminate\Http\Request;

use App\Model\ArticleStatus;
use App\Model\Article;
use View;
class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $article = Article::getNewsArticle(8);
        viewInit();
        $page = new EndaPage($article['page']);
        return homeView('index', array(
            'articleList' => $article,
            'page' => $page
        ));
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::getArticleModelByArticleId($id);
        //没有文章
        if(!$article){
            return View::make('errors.404');
        }
        ArticleStatus::updateViewNumber($id);
        $data = array(
            'article' => $article,
        );
        viewInit();
        return homeView('article', $data);
    }

}
