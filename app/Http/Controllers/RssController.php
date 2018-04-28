<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Services\RssFeed;

class RssController extends Controller
{
    private $rss = '';

    public function __construct(RssFeed $rss)
    {
        $this->rss = $rss;
    }

    public function index()
    {
        $rss = $this->rss->getRSS();
        return response($rss)
            ->header('charset', 'utf-8')
            ->header('Content-type', 'application/rss+xml');
    }

}
