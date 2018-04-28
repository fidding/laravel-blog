<?php
namespace App\Services;

use App\Model\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class SiteMap
{
    /**
     * Return the content of the Site Map
     */
    public function getSiteMap()
    {
        if (Cache::has('site-map')) {
            return Cache::get('site-map');
        }
        $siteMap = $this->buildSiteMap();
        Cache::add('site-map', $siteMap, 120);
        return $siteMap;
    }
    /**
     * Build the Site Map
     */
    protected function buildSiteMap()
    {
        $postsInfo = $this->getPostsInfo();
        $dates = array_values($postsInfo);
        sort($dates);
        $lastmod = last($dates);
        $url = trim(url(), '/') . '/';
        $xml = [];
        $xml[] = '<?xml version="1.0" encoding="UTF-8"?'.'>';
        $xml[] = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $xml[] = '  <url>';
        $xml[] = "    <loc>$url</loc>";
        $xml[] = "    <lastmod>$lastmod</lastmod>";
        $xml[] = '    <changefreq>daily</changefreq>';
        $xml[] = '    <priority>0.8</priority>';
        $xml[] = '  </url>';
        foreach ($postsInfo as $id => $lastmod) {
            $xml[] = '  <url>';
            $xml[] = "    <loc>{$url}article/$id</loc>";
            $xml[] = "    <lastmod>$lastmod</lastmod>";
            $xml[] = "  </url>";
        }
        $xml[] = '</urlset>';
        return join("\n", $xml);
    }
    /**
     * Return all the posts as $url => $date
     */
    protected function getPostsInfo()
    {
        return Article::where('created_at', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->lists('updated_at', 'id')
            ->all();
    }
}
