<div class="site-content">
    <div class="blog no-sidebar">
        <div class="container">
            <div class="row">
                <div class="content-wrap">
                    <div class="main-content">
                        <div class="main-content-wrap">
                            <div class="content-inner">
                                <?php foreach ($model['articles'] as $article):?>
                                <article class="blog-post hentry">
                                    <div class="entry-wrapper">
                                        <div class="entry-header">
                                            <div class="entry-header-content">
                                                <h2 class="entry-title">
                                                    <a href="/blog/article?url=<?= $article['url'].'&id='.$article['id']?>"><?= $article['title']?></a>
                                                </h2>
                                                <div class="entry-meta">
                                                    <span>By</span>
                                                    <span class="entry-author">
                                                                <a href="#" class="entry-author-link">
                                                                    <span class="entry-author-name"><?= $article['username']?></span>
                                                                </a>
                                                            </span>
                                                    <span>in</span>
                                                    <span class="entry-categories"><a href="#">Inspires</a></span>
                                                    <span class="entry-time"><?= date('d/M/Y',$article['created_at']);?></span>
                                                </div>
                                            </div><!-- /.entry-header-content -->
                                        </div><!-- /.entry-header -->
                                        <div class="entry-cover">
                                            <a href="/blog/article?url=<?= $article['url'].'&id='.$article['id']?>">
                                                <img src="/images/blog/<?= $article['image']?>" alt="images">
                                            </a>
                                        </div><!-- /.entry-cover -->

                                        <div class="entry-content">
                                            <p>
                                                <?= rtrim(substr($article['text'], 0, 1000), "!,.-").'...' ?>

                                            </p>
                                            <div class="readmore"><a href="/blog/article?url=<?= $article['url'].'&id='.$article['id']?>" class="more-link">Read More</a></div>
                                        </div><!-- /.entry-content -->
                                    </div><!-- /.entry-wrapper -->
                                </article><!-- /.blog-post -->
                                <?php endforeach;?>

                            </div><!-- /.content-inner -->

                            <div class="navigation paging-navigation loadmore">
                                <div class="loop-pagination">
                                    <a href="#">Load More</a>
                                </div><!-- /.loop-pagination -->
                            </div><!-- /.nagivation -->

                        </div><!-- /.main-content-wrap -->
                    </div><!-- /.main-content -->
                </div><!-- /.content-wrap  -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.blog -->
</div><!-- /#site-content -->



