<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php"?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock">
                   <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $name = $_POST['name'];
                            $name = mysqli_real_escape_string($db->link, $name);
                            if (empty($name)){
                                echo "<span style='color:red;font-size:18px;'>Field must not be empty</span>";
                            } else{
                                $query = "INSERT INTO category (name) VALUES ('$name')";
                                $create_cat =  $db->crate($query);
                                if ($create_cat){
                                    echo "<span style='color:green;font-size:18px;'>Category created successfully</span>";
                                }else{
                                    echo "<span style='color:red;font-size:18px;'>Category not crated</span>";
                                }
                            }
                        }
                   ?>
                 <form method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include "includes/footer.php";?>