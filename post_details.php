<?php
if (!isset($_GET['id']) || $_GET['id'] == NULL){
    header("location:index.php");
}else{
    $id = $_GET['id'];
}
?>
<?php include "includes/header.php"?>


<!--    Blog Post Start
   ==================================================-->
<section class="blog_area py_80 bg_secondery full_row">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="blog_details">
<!--                    show post-->
                    <?php
                        $query = "SELECT * FROM post WHERE id=$id";
                        $post = $db->select($query);
                          if ($post){
                        while ($result = $post->fetch_assoc()){
                    ?>
                    <div class="blog_img overlay_one wow animated slideInUp"><img src="admin/<?php echo $result ['image'];?>" alt="image"></div>
                    <div class="blog_content bg_white">
                        <div class="blog_title mb_20 color_primary">
                            <h5><?php echo $result ['title'];?></h5>
                        </div>
                        <div class="admin">
<!--                            <img src="images/about/02.jpg" alt="image">-->
                            <span class="color_primary">By - <?php echo $result ['author'];?></span>
                        </div>
                        <div class="date color_primary float-left"><?php echo $format->formatDate($result['date']) ;  ?></div>
                        <!-- <div class="comments">
                            <i class="fa fa-comment" aria-hidden="true"></i>
                            <span class="color_primary">12</span>
                        </div> -->
                        <div class="single_blog_content d-inline-block mt_30 color_secondery wow animated slideInUp">
                            <p>  <?php echo $result ['body'];?></p>
                        </div>
                        <div class="share_post mt_30 wow animated slideInUp">
                            <h4 class="float-left mr_20">Share : </h4>
                            <div class="socal_media_2 d-inline-block">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        <?php  } ?> <!--end while-->
                          <?php  } else{
                              header("location:index.php");
                          } ?>
                   <!--  <div class="comment_area mt_60">
                        <h4 class="text-uppercase color_primary mb_30">Comments (04)</h4>
                        <ul class="user_comments">
                            <li class="mb_20 wow animated slideInUp">
                                <div class="comment_description bg_white p_20">
                                    <div class="author_img">
                                        <img src="images/comments/01.png" alt="images">
                                    </div>
                                    <div class="author_text">
                                        <div class="author_info">
                                            <h5 class="author_name color_primary">Rebecca D. Nagy </h5>
                                            <span>12 January, 2019 at 3.27 pm</span>
                                        </div>
                                        <p>Morbi potenti arcu litora. Laoreet euismod blandit euismod sit. Nisi eu Placerat ultricies faucibus interdum tellus risus. Iaculis velit.</p>
                                        <a href="#" class="btn btn_info mt_15">Replay</a>
                                    </div>
                                </div>
                            </li>
                            <li class="mb_20 wow animated slideInUp">
                                <div class="comment_description replied bg_white p_20">
                                    <div class="author_img">
                                        <img src="images/comments/02.png" alt="images">
                                    </div>
                                    <div class="author_text">
                                        <div class="author_info">
                                            <h5 class="author_name color_primary">Malina James</h5>
                                            <span>15 January, 2019 at 5.33 pm</span>
                                        </div>
                                        <p>Nec platea penatibus nisi ridiculus feugiat justo torquent hymenaeos suscipit platea montes. Metus porttitor fusce lectus tincidunt ornare.</p>
                                        <a href="#" class="btn btn_info mt_15">Replay</a>
                                    </div>
                                </div>
                            </li>
                            <li class="mb_20 wow animated slideInUp">
                                <div class="comment_description bg_white p_20">
                                    <div class="author_img">
                                        <img src="images/comments/03.png" alt="images">
                                    </div>
                                    <div class="author_text">
                                        <div class="author_info">
                                            <h5 class="author_name color_primary">Ahmad Hassan</h5>
                                            <span>16 January, 2019 at 12.03 pm</span>
                                        </div>
                                        <p>Hymenaeos maecenas, imperdiet morbi mauris sagittis libero fringilla congue purus viverra nisi aptent nascetur ultricies pede sem scelerisque ipsum class.</p>
                                        <a href="#" class="btn btn_info mt_15">Replay</a>
                                    </div>
                                </div>
                            </li>
                            <li class="mb_20 wow animated slideInUp">
                                <div class="comment_description bg_white p_20">
                                    <div class="author_img">
                                        <img src="images/comments/04.png" alt="images">
                                    </div>
                                    <div class="author_text">
                                        <div class="author_info">
                                            <h5 class="author_name color_primary">Patty Hurd</h5>
                                            <span>24 January, 2019 at 04.27 am</span>
                                        </div>
                                        <p>Euismod gravida laoreet vestibulum nostra sed. Ac quis auctor. Dui. Dictumst mus phasellus elit nec ornare hac faucibus interdum ligula.</p>
                                        <a href="#" class="btn btn_info mt_15">Replay</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <div class="replay mt_60 wow animated slideInUp">
                        <h4 class="text-uppercase color_primary mb_30">Leave A Replay</h4>
                        <form action="#" method="post" class="reply_form">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <input class="form-control" name="author_name" type="text" placeholder="Your Name*">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <input class="form-control" name="author_email" type="email" placeholder="Email Address*">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="author_comments" rows="7" placeholder="Type Comments..."></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-default">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            include "includes/sidebar.php";
            ?>
        </div>
    </div>
</section>
<!--    Blog Post End
==================================================-->
<?php include "includes/footer.php"; ?>
