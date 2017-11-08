<div class="blog-timeline">
    @if(!empty($articleList))
        @foreach($articleList['data'] as $article)
            <article class="entry">
                <span class="entry-date">{{ $article->created_at->format('d') }}
                    <span>{{ $article->created_at->format('m') }}月</span>
                </span>
                <span class="entry-format">
                    <em class="fa fa-file-text"></em>
                </span>
                <h1 class="entry-title"><a href="{{ route('article.show',array('id'=>$article->id)) }}" title="{{ $article->title }}">{{ $article->title }}</a></h1>
                <div class="entry-content">
                    <p>{{ strCut(conversionMarkdown($article->content),80) }}</p>
                </div>
                <footer class="entry-footer clearfix">
                    <span class="entry-label">
                        <em class="fa fa-tags"></em>
                        &nbsp;标签:&nbsp;
                        @if($article->tags)
                            @foreach($article->tags as $tag)
                                <a href="/search/tag/{{$tag['id']}}" title="{{$tag['name']}}">{{$tag['name']}}</a>
                            @endforeach
                        @endif
                    </span>
                    <span class="entry-separator">/</span>
                    <span class="">
                        <em class="fa fa-eye"></em>
                        &nbsp;浏览:&nbsp;
                        <a>{{ $article->click }}</a>
                    </span>
                    <!-- <span class="entry-separator">/</span>by
                         <a href="" class="entry-author">洪加煌</a> -->
                    <a href="{{ route('article.show',array('id'=>$article->id)) }}" class="entry-readmore text-right pull-right">
                        阅读全文
                        <em class="fa fa-angle-right"></em>
                    </a>
                </footer>
            </article>
        @endforeach
        <!-- 分页 -->
        <div class="pagination text-center">
            <nav>
                {!! $articleList['page']->render($page) !!}
            </nav>
        </div>
    @endif
</div>
