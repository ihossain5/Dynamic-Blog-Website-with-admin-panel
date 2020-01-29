<div class="clear">
</div>
</div>
<div class="clear">
</div>
<div id="site_info">
    <!--    For show social link from database-->
    <?php
    $query = "SELECT * FROM footer WHERE id='1'";
    $copyright = $db->select($query);
    if ($copyright){
    while ($result = $copyright->fetch_assoc()){
    ?>
        <p><?php echo $result['copyright'] ?> <?php echo date('Y')?> </p>
    <?php } }?>
</div>
</body>
</html>

