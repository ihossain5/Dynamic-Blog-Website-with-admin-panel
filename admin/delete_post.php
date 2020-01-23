<?php include "../config/config.php"?>
<?php include "../db/Database.php"?>

<?php
$db =new Database();

    if (!isset($_GET['del_postid']) || $_GET['del_postid'] == NULL){
        header('location:postlist.php');
    }else{
        $delete_id = $_GET['del_postid'];

        $query = "SELECT * FROM post WHERE id = '$delete_id'";
        $getData = $db->select($query);
        if ($getData){
            while ($delimg = $getData->fetch_assoc()){
                $imglink = $delimg['image'];
                unlink($imglink);
            }
        }
        $delquery = "DELETE FROM post WHERE  id = '$delete_id'";
        $delData = $db->delete($delquery);
        if ($delData){
            echo "<script>alert('Data deleted successfully')</script>";
            echo "<script>window.location = 'postlist.php'; </script>";
        }else{
            echo "<script>alert('Data not deleted ')</script>";
            echo "<script>window.location = 'postlist.php'; </script>";
        }
}