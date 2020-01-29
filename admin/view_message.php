<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php"?>
<?php
if (!isset($_GET['msg_id']) || $_GET['msg_id'] == NULL){
    echo "<script>window.location = 'inbox.php'; </script>";
}else{
    $id = $_GET['msg_id'];
}
?>
    <div class="grid_10">
        <div class="box round first grid">
            <h2>View Message</h2>
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){
               echo "<script>window.location = 'inbox.php'; </script>";
            }
            ?>
            <div class="block">
                <?php
//                show message query
                $query = "SELECT * FROM contact WHERE id = '$id'";
                $getmessage = $db->select($query);
                if ($getmessage){
                while ($result = $getmessage->fetch_assoc()){

                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['name'] ?>" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['email'] ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Subject</label>
                            </td>
                            <td>
                                <input type="text" readonly  value="<?php echo $result['subject']?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Message</label>
                            </td>
                            <td>
                                <textarea  style="width: 60%" readonly rows="12"><?php echo $result['message'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="ok" />
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