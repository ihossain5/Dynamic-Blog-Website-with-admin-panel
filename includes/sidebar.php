<div class="col-md-5 col-lg-4">
    <div class="blog_sidebar">
        <div class="widget mb_60 d-inline-block p_30 bg_white full_row wow animated slideInUp">
            <h3 class="widget_title mb_30 text-capitalize">Follow Me</h3>
            <div class="socal_media">
                <ul>
                    <?php
                    $query = "SELECT * FROM social WHERE id='1'";
                    $social = $db->select($query);
                    if ($social){
                    while ($result = $social->fetch_assoc()){
                    ?>
                    <li><a href="<?php echo $result['facebook']?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $result['github']?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $result['skype']?>" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $result['linkedin']?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $result['google']?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                    <?php } }?>
                </ul>
            </div>
        </div>
        <div class="widget mb_60 d-inline-block p_30 primary_link bg_white full_row wow animated slideInUp">
            <h3 class="widget_title mb_30 text-capitalize">Category</h3>
            <div class="category_sidebar">
                <?php
//                Show category & count post 
                $query ="SELECT category.name,category.category_id,COUNT(post.id) FROM post
                            RIGHT JOIN category ON post.category_id = category.category_id
                            GROUP BY name";
                $category = $db->select($query);
                if ($category){
                while ($result = $category->fetch_assoc()){
                ?>
                <ul>
                    <li><a href="posts.php?category=<?php echo $result ['category_id'];?>"><?php echo $result ['name'];?></a> 
                            <span><?php echo $result ['COUNT(post.id)'];  ?> </span>
                    </li>
                    <?php  } ?> <!--end while-->
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <div class="widget mb_60 d-inline-block p_30 primary_link bg_white full_row wow animated slideInUp">
            <h3 class="widget_title mb_30 text-capitalize">Recent Post</h3>
            <div class="recent_post">
                <ul>
                    <?php
                    $query = "SELECT * FROM post ORDER BY id DESC limit 5";
                    $post = $db->select($query);
                    if ($post){
                    while ($result = $post->fetch_assoc()){
                    ?>
                    <li class="mb_30">
                        <a href="post_details.php?id=<?php echo $result ['id'];?>">
                            <div class="post_img"><img src="admin/<?php echo $result ['image'];?>" alt="image"></div>
                            <div class="recent_post_content">
                                <h6><?php echo $format->textShorten( $result ['body'],60);?></h6>
                                <span class="color_gray"><?php echo $format->formatDate($result['date']) ;?></span>
                            </div>
                        </a>
                    </li>
                    <?php  } ?> <!--end while-->
                    <?php  } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
