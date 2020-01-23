
<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php"?>
<?php
if (!isset($_GET['catid']) || $_GET['catid'] == NULL){
    header('location:catlist.php');
}else{
    $id = $_GET['catid'];
}
?>

    <div class="grid_10">

        <div class="box round first grid">
            <h2>Update Category</h2>
            <div class="block copyblock">
<!--                Category update query-->
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $name = $_POST['name'];
                    $name = mysqli_real_escape_string($db->link, $name);
                    if (empty($name)){
                        echo "<span style='color:red;font-size:18px;'>Field must not be empty</span>";
                    } else{
                        $query = "UPDATE category SET name = '$name'WHERE id='$id'";
                        $update_cat =  $db->update($query);
                        if ($update_cat){
                            echo "<span style='color:green;font-size:18px;'>Category updated successfully</span>";
                        }else{
                            echo "<span style='color:red;font-size:18px;'>Category not updated</span>";
                        }
                    }
                }
                ?>
<!--                Show selected Category -->
                <?php
                    $query = "SELECT * FROM category WHERE id = '$id'";
                    $category = $db->select($query);
                    if ($category){
                    while ($result = $category->fetch_assoc()){
                ?>
                <form method="post">
                    <table class="form">
                        <tr>
                            <td>
                                <input type="text" name="name" value="<?php echo $result['name']?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="submit" Value="update" />
                            </td>
                        </tr>
                    </table>
                </form>
                <?php } } else{
                        echo "Category not found";
                    } ?>
            </div>
        </div>
    </div>
<?php include "includes/footer.php";?>