<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php"?>
<?php
if (!isset($_GET['edit_postid']) || $_GET['edit_postid'] == NULL){
    header('location:postlist.php');
}else{
    $id = $_GET['edit_postid'];
}
?>
    <div class="grid_10">
        <div class="box round first grid">
            <h2>Add New Post</h2>
            <?php
            //                      field Validation
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $title = mysqli_real_escape_string($db->link, $_POST['title']);
                $category_id = mysqli_real_escape_string($db->link, $_POST['category_id']);
                $author = mysqli_real_escape_string($db->link, $_POST['author']);
                $tags = mysqli_real_escape_string($db->link, $_POST['tags']);
                $body = mysqli_real_escape_string($db->link, $_POST['body']);
//                            image validation
                $permited = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_temp = $_FILES['image']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
                $uploaded_image = "uploads/" . $unique_image;

                if ($title == '' || $category_id == '' || $author == '' || $tags == '' || $body == '') {
                    echo "<span style='color:red;font-size:18px;'>Field must not be empty</span>";
                } else{
                    if (!empty($file_name)) {
                        if ($file_size > 1048567) {
                            echo "<span class='error'>Image Size should be less then 1MB!</span>";
                        } elseif (in_array($file_ext, $permited) === false) {
                            echo "<span class='error'>You can upload only:-" . implode(', ', $permited) . "</span>";
                        } else {
                            move_uploaded_file($file_temp, $uploaded_image);
                            $query = "UPDATE post SET category_id = '$category_id',
                                                        title = '$title',
                                                         body = '$body',
                                                        image = '$uploaded_image',
                                                       author = '$author',
                                                         tags = '$tags' WHERE id = '$id'";
                            $updated_row = $db->update($query);
                            if ($updated_row) {
                                echo "<span class='success'>Data updated Successfully.</span>";
                            } else {
                                echo "<span class='error'>Data Not updated !</span>";
                            }
                        }
                    } else{
                        $query = "UPDATE post SET category_id = '$category_id',
                                                        title = '$title',
                                                         body = '$body',
                                                       author = '$author',
                                                         tags = '$tags' WHERE id = '$id'";
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
            <div class="block">
                <?php
                    $query = "SELECT * FROM post WHERE id = '$id'";
                    $getpost = $db->select($query);
                    if ($getpost){
                        while ($postresult = $getpost->fetch_assoc()){

                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">

                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?php echo $postresult['title'] ?>" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="category_id">
                                    <option >Select Category </option>
                                    <?php
                                    $query = "SELECT * FROM category";
                                    $show_category = $db->select($query);
                                    if ($show_category){
                                        while ($result = $show_category->fetch_assoc()){
                                            ?>
                                            <option
                                                <?php if ($postresult['category_id'] == $result['id']){?>
                                                selected = 'selected' <?php }?>
                                                
                                                value="<?php echo $result['id'] ?>"><?php echo $result['name'] ?></option>
                                        <?php  };   //end while
                                    }?>  <!-- end if -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <img src="<?php echo $postresult['image'] ?>" height="60px" width="100px" alt="">
                                <input type="file" name="image"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Author name</label>
                            </td>
                            <td>
                                <input type="text" name="author" value="<?php echo $postresult['author'] ?>"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" name="tags" value="<?php echo $postresult['tags'] ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"><?php echo $postresult['body'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                        <?php
                        }
                        }?>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
<?php include "includes/footer.php";?>