<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php"?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Social Media</h2>
<!--   For update social media -->
    <?php
        //                      field Validation
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $facebook = $format->validation($_POST['facebook']);
            $github = $format->validation($_POST['github']);
            $skype = $format->validation($_POST['skype']);
            $linkedin = $format->validation($_POST['linkedin']);
            $google = $format->validation($_POST['google']);

            $facebook = mysqli_real_escape_string($db->link, $_POST['facebook']);
            $github = mysqli_real_escape_string($db->link, $_POST['github']);
            $skype = mysqli_real_escape_string($db->link, $_POST['skype']);
            $linkedin = mysqli_real_escape_string($db->link, $_POST['linkedin']);
            $google = mysqli_real_escape_string($db->link, $_POST['google']);

            if ($facebook == '' || $github == '' || $skype == '' || $linkedin == '' || $google == '') {
                echo "<span style='color:red;font-size:18px;'>Field must not be empty</span>";
            }else{
                $query = "UPDATE social SET facebook = '$facebook',
                                            github = '$github',
                                            skype = '$skype',
                                            linkedin = '$linkedin',
                                            google = '$google'
                                             WHERE id = '1'";
                $updated_row = $db->update($query);
                if ($updated_row) {
                    echo "<span class='success'>Data updated Successfully.</span>";
                } else {
                    echo "<span class='error'>Data Not updated !</span>";
                }
            }


        }
 ?>
                   <div class="block">
      <!--     For show social link from database-->
            <?php
            $query = "SELECT * FROM social WHERE id='1'";
            $social = $db->select($query);
            if ($social){
                while ($result = $social->fetch_assoc()){
             ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="facebook" value="<?php echo $result['facebook'] ?>" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Github</label>
                            </td>
                            <td>
                                <input type="text" name="github" value="<?php echo $result['github'] ?>"" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Skype</label>
                            </td>
                            <td>
                                <input type="text" name="skype" value="<?php echo $result['skype'] ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="linkedin" value="<?php echo $result['linkedin'] ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Google </label>
                            </td>
                            <td>
                                <input type="text" name="google" value="<?php echo $result['google'] ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php } }?>
                </div>
            </div>
        </div>
<?php include "includes/footer.php";?>