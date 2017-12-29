<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

                <div id="comments" class="comments-area">
                    <h4 class="comments-title">2 thoughts on “Modern Design In Britain”</h4>

                    <ul class="comment-list" >
                        <li>
                            <?php if(!empty($comments)):?>
                            <?php foreach ($comments as $comment):?>

                                <article class="comment-body">
                                    <div class="comment-meta">
                                        <div class="comment-author">
                                            <img src="<?= '/images/users/'.$comment['img']??'/images/users/default_img.jpg'?>" alt="images">
                                            <b class="fn"><a href="#" class="url"><?= $comment['first_name'].' '.$comment['last_name']?></a></b>
                                            <span class="says">says:</span>
                                        </div>
                                        <div class="comment-metadata">
                                            <a href="#"><span><?= date('d/M/Y',$comment['created_at']);?></span></a>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p><?= $comment['comment']?></p>
                                    </div>
                                    <div class="reply">
                                        <a class="comment-reply-link" href="#" id="<?= $comment['id']?>">Reply</a>
                                    </div>
                                </article>

                                <?php if(isset($comment['answers'])):?>
                                    <?php foreach ($comment['answers'] as $answer):?>
                                            <ul class="children">
                                                <li>
                                                    <article class="comment-body">
                                                        <div class="comment-meta">
                                                            <div class="comment-author">
                                                                <img src="<?= '/images/users/'.$comment['img']??'/images/users/default_img.jpg'?>" alt="images">
                                                                <b class="fn"><a href="#" class="url"><?= $comment['first_name'].' '.$comment['last_name']?></a></b>
                                                                <span class="says">says:</span>
                                                            </div>
                                                            <div class="comment-metadata">
                                                                <a href="#"><span><?= date('d/M/Y',$comment['created_at']);?></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p><?= $answer['comment']?></p>
                                                        </div>
                                                        <div class="reply">
                                                            <a class="comment-reply-link" href="#" id="<?= $comment['parent_id']?>">Reply</a>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul><!-- /.children -->
                                    <?php endforeach;?>
                                 <?php endif;?>
                            <?php endforeach;?>
                            <?php endif;?>
                        </li>
                    </ul><!-- /.comment-list -->

                    <div  class="comment-respond">
                        <h4 id="reply-title" class="comment-reply-title">Leave a Reply</h4>
                        <form  class="comment-form" method="post">
                            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>

                            <p class="comment-form-comment"><label>Comment</label> <textarea id="comment" name="Comment[comment]" required="required"></textarea></p>
                            <input type="hidden" name="Comment[parent_id]" id="parent_id" value="">
                            <input type="hidden" name="Comment[object_id]"  value="<?= $model['id']?>">
                            <input type="hidden" name="Comment[user_id]" value="<?= YII::$app->user->id?>">
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"></p>
                        </form><!-- /#commentform -->
                    </div><!-- /.comment-respond -->
                </div><!-- /.comments-area -->


                <script>
                    // A $( document ).ready() block.
                    $( document ).ready(function() {

                        $( "form" ).submit(function( event ) {
                            event.preventDefault();

                            $.ajax({
                                type: $(this).attr('method'),
                                url: '/blog/article?url=<?= $model['url']?>&id=<?= $model['id']?>',
                                data: new FormData(this),
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function(html){

                                    $('#comments').html(html);
                                }
                            });
                        });
                    });
                </script>

                <script>
                    var anchors = document.getElementsByClassName('comment-reply-link');
                    for(var i = 0; i < anchors.length; i++) {
                        var anchor = anchors[i];
                        anchor.onclick = function() {
                            document.getElementById('parent_id').value = this.id;
                        }
                    }
                </script>