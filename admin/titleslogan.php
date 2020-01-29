<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php"?>
    <style>
        .left{float: left;width: 60%;}
        .right{float: left; width: 40%;}
        .right img{height: 140px; width: 150px;}
    </style>
<div class="grid_10">
            <div class="box round first grid">
                <h2>Update Site Title and Description</h2>
<!--            For Update website Title & Logo-->
                <?php
                //                      field Validation
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $title = $format->validation($_POST['title']);
                    $title = mysqli_real_escape_string($db->link, $_POST['title']);

//                            image validation
                    $permited = array( 'png');
                    $file_name = $_FILES['logo']['name'];
                    $file_size = $_FILES['logo']['size'];
                    $file_temp = $_FILES['logo']['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $same_name = 'logo' . '.' . $file_ext;
                    $uploaded_image = "uploads/" . $same_name;

                    if ($title == '') {
                        echo "<span style='color:red;font-size:18px;'>Field must not be empty</span>";
                    } else{
                        if (!empty($file_name)) {
                            if ($file_size > 1048567) {
                                echo "<span style='color:red;font-size:18px;'>Image Size should be less then 1MB!</span>";
                            } elseif (in_array($file_ext, $permited) === false) {
                                echo "<span style='color:red;font-size:18px;'>You can upload only:-" . implode(', ', $permited) . "</span>";
                            } else {
                                move_uploaded_file($file_temp, $uploaded_image);
                                $query = "UPDATE title SET   title = '$title',
                                            logo = '$uploaded_image'
                                            WHERE id = '1'";
                                $updated_row = $db->update($query);
                                if ($updated_row) {
                                    echo "<span class='success'>Data updated Successfully.</span>";
                                } else {
                                    echo "<span class='error'>Data Not updated !</span>";
                                }
                            }
                        } else{
                            $query = "UPDATE title SET title = '$title'
                                             WHERE id = '1'";
                            $updated_row = $db->update($query);
                            if ($updated_row) {
                                echo "<span class='success'>Data updated Successfully.</span>";
                            } else {
                                echo "<span class='error'>Data Not updated !</span>";
                            }
                        }
                    }
                }
                ;?>


<!--               For show blog title  & logo from database-->
                <?php
                $query = "SELECT * FROM title WHERE id='1'";
                $title = $db->select($query);
                if ($title){
                    while ($result = $title->fetch_assoc()){


                ?>
                <div class="block sloginblock">
                    <div class="left">
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Website Title</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $result['title'] ;?>"  name="title" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Upload Logo</label>
                            </td>
                            <td>
                                <input type="file" name="logo"/>
                            </td>
                        </tr>
						 <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    </div>
                    <div class="right">
                        <img src="<?php echo $result['logo'] ;?>" alt="logo">
                    </div>
                    <?php    } /* end while  */
                    }   ?>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
<?php include "includes/footer.php";?>