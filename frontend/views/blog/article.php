
<div class="site-content">
    <div class="single-post no-sidebar">
        <div class="container">
            <div class="row">
                <div class="content-wrap">
                    <div class="main-content">
                        <div class="main-content-wrap">
                            <div class="content-inner">
                                <article class="blog-post hentry">
                                    <div class="entry-wrapper">
                                        <div class="entry-header">
                                            <div class="entry-header-content">
                                                <h2 class="entry-title">
                                                    <?= $model['title']?>
                                                </h2>
                                                <div class="entry-meta">
                                                    <span>By</span>
                                                    <span class="entry-author">
                                                                <a href="#" class="entry-author-link">
                                                                    <span class="entry-author-name"><?= $model['username']?></span>
                                                                </a>
                                                            </span>
                                                    <span>in</span>
                                                    <span class="entry-categories"><a href="#">Inspires</a></span>
                                                    <span class="entry-time"><?= date('d/M/Y',$model['created_at']);?></span>
                                                </div>
                                            </div><!-- /.entry-header-content -->
                                        </div><!-- /.entry-header -->
                                        <div class="entry-cover">
                                                <img src="/images/blog/<?= $model['image']?>" alt="images">
                                        </div><!-- /.entry-cover -->

                                        <div class="entry-content">
                                           <p><?= $model['text'];?></p>
                                        </div><!-- /.entry-content -->
                                    </div><!-- /.entry-wrapper -->
                                </article><!-- /.blog-post -->
                            </div><!-- /.content-inner -->

                            <div class="navigation post-navigation">
                                <ul class="nav-links">
                                    <li class="prev-post">
                                        <a href="#">
                                            <div class="link-inner">
                                                <span class="post-title">Benesse Art Site Naoshima</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="go-back">
                                        <a href="blog.html">
                                            <div class="icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="next-post">
                                        <a href="#">
                                            <div class="link-inner">
                                                <span class="post-title">A weekend in London UK</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- /.nagivation -->

                            <?php require_once ('comments.php');?>
                        </div><!-- /.main-content-wrap -->
                    </div><!-- /.main-content -->
                </div><!-- /.content-wrap  -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.blog -->
</div><!-- /#site-content -->
       
        