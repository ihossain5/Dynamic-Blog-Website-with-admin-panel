<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php"?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>
                <!--   For update copyright media -->
                <?php
                //                      field Validation
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $copyright = $format->validation($_POST['copyright']);

                    $copyright = mysqli_real_escape_string($db->link, $_POST['copyright']);

                    if ($copyright == '') {
                        echo "<span style='color:red;font-size:18px;'>Field must not be empty</span>";
                    }else{
                        $query = "UPDATE footer SET copyright = '$copyright'  WHERE id = '1'";
                        $updated_row = $db->update($query);
                        if ($updated_row) {
                            echo "<span class='success'>Data updated Successfully.</span>";
                        } else {
                            echo "<span class='error'>Data Not updated !</span>";
                        }
                    }


                }
                ?>

                <div class="block copyblock">
    <!--    For show social link from database-->
        <?php
        $query = "SELECT * FROM footer WHERE id='1'";
        $copyright = $db->select($query);
        if ($copyright){
            while ($result = $copyright->fetch_assoc()){
        ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo  $result['copyright'] ?>" name="copyright" class="large" />
                            </td>
                        </tr>
						
						 <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                <?php  } }?>
                </div>
            </div>
        </div>
<?php include "includes/footer.php";?>