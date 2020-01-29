
<!--    Start Footer
===================================================-->
<footer class="p_20 color_primary bg_secondery full_row text-center wow animated slideInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="copyright">
                    <!--    For show social link from database-->
                    <?php
                    $query = "SELECT * FROM footer WHERE id='1'";
                    $copyright = $db->select($query);
                    if ($copyright){
                    while ($result = $copyright->fetch_assoc()){
                    ?>
                    <p><?php echo $result['copyright'] ?> <?php echo date('Y')?></p>
                    <?php } }?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--    End Footer
===================================================-->
</div>
</div>
<!--	Wrapper End
=======================================================-->
<!--    Js Links
===================================================-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from themetrading.com/html/runaway/template/regular/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 20:22:25 GMT -->
</html>