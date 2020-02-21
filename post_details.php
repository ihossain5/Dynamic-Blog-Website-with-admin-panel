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
                    </div>
                        <?php  } ?> <!--end while-->
                          <?php  } else{
                              header("location:index.php");
                          } ?>
             
                   <div id="disqus_thread"></div>
<script>

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://ismailhossain.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
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
