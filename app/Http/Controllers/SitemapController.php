<?php namespace App\Http\Controllers;

use App\Components\EndaPage;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Services\SiteMap;

class SitemapController extends Controller
{
    private $sitemap = '';

    public function __construct(SiteMap $sitemap)
    {
        $this->sitemap = $sitemap;
    }

    public function index(Request $request)
    {
        $map = $this->sitemap->getSiteMap();
        return response($map)
            ->header('Content-type', 'text/xml');
    }
}
