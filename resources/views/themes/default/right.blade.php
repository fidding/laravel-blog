<div class="widget">
    <h3>热门文章</h3>
    <ul class="hotest-posts-list">
        @if(!empty($hotArticleList))
            @foreach($hotArticleList as $hotArticle)
                <li class="clearfix ">
                    <div class="entry-content">
                        <h5>
                            <a href="{{ route('article.show',array('id'=>$hotArticle->id)) }}"  class="mini-repo-list-item css-truncate" title="{{ $hotArticle->title }}">{{$hotArticle->title}}</a>
                        </h5>
                        <p class="text-right">
                            <em class="fa fa-calendar-o"></em> {{ $hotArticle->created_at->format('Y/m/d') }}
                        </p>
                    </div>
                </li>
            @endforeach
        @endif
    </ul>
</div>


<div class="widget">
    <h3>标签云</h3>
    <div class="tagcloud clearfix">
        @if(!empty($tagList))
            @foreach($tagList as $tag)
                <a href="{{ url('search/tag',['id'=>$tag->id]) }}" title="{{ $tag->name }}">{{ $tag->name }}</a>
            @endforeach
        @endif
    </div>
</div>

<div class="widget">
    <h3>友情链接</h3>
    <ul class="friendlink boxed-group-inner mini-repo-list">
        @if(!empty($linkList))
            @foreach($linkList as $link)
                <li class="public source ">
                    <a href="{{ $link->url }}" target="_blank"  class="mini-repo-list-item css-truncate">
                        <span class="repo-and-owner css-truncate-target">
                            {{ $link->name }}
                        </span>
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</div>
