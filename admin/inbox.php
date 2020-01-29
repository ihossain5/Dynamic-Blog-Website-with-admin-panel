<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php"?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <?php
//                    Seen Message from inbox
                    if (isset($_GET['seen_id'])){
                        $seen_id = $_GET['seen_id'];
                        $query = "UPDATE contact SET status = '1'WHERE id='$seen_id'";
                        $update_status =  $db->update($query);
                        if ($update_status){
                            echo "<script>window.location = 'inbox.php'; </script>";
                        }else{
                            echo "<span style='color:red;font-size:18px;'>Category not updated</span>";
                        }
                    }
                ?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
                            <?php
//                            Show messages  from Database
                            $query = "SELECT * FROM contact WHERE status ='0' ORDER BY id DESC ";
                            $message = $db->select($query);
                            if ($message){
                            $i = 0;
                            while ($result = $message->fetch_assoc()){
                            $i++;
                            ?>
							<td><?php echo $i;?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['email'];?></td>
							<td><?php echo $result['subject'];?></td>
							<td><?php echo $format->textShorten($result['message'],100);?></td>
							<td><?php echo $format->formatDate($result['date']);?></td>
							<td><a href="view_message.php?msg_id=<?php echo $result['id']; ?>">View</a> ||
                                <a href="?seen_id=<?php echo $result['id']; ?>">Seen</a>
                            </td>
						</tr>
                        <?php } }?>
					</tbody>
				</table>
               </div>
            </div>
            <div class="box round first grid">
                <h2>Seen Messages</h2>
                <?php
//                 unseen message query
                        if (isset($_GET['unseen_id'])){
                        $unseen_id = $_GET['unseen_id'];
                        $query = "UPDATE contact SET status = '0'WHERE id='$unseen_id'";
                        $update_status =  $db->update($query);
                        if ($update_status){
                            echo "<script>window.location = 'inbox.php'; </script>";
                        }else{
                            echo "<span style='color:red;font-size:18px;'>Category not updated</span>";
                        }
                    }

//                For delete message query form Database
                    if (isset($_GET['delete_id'])){
                        $delete_id = $_GET['delete_id'];
                        $delete_query = "DELETE FROM contact WHERE id= '$delete_id'";
                        $delete_data = $db->delete($delete_query);
                        if ($delete_data){
                            echo "<span style='color:green;font-size:18px;'>Message deleted successfully</span>";
                        }else{
                            echo "<span style='color:red;font-size:18px;'>Message not deleted</span>";
                        }
                    }

                ?>
                <div class="block">
                    <table class="data display datatable" id="example">
                        <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <?php
                            //                            Show messages  from Database
                            $query = "SELECT * FROM contact WHERE status ='1' ORDER BY id DESC ";
                            $message = $db->select($query);
                            if ($message){
                            $i = 0;
                            while ($result = $message->fetch_assoc()){
                            $i++;
                            ?>
                            <td><?php echo $i;?></td>
                            <td><?php echo $result['name'];?></td>
                            <td><?php echo $result['email'];?></td>
                            <td><?php echo $result['subject'];?></td>
                            <td><?php echo $format->textShorten($result['message'],100);?></td>
                            <td><?php echo $format->formatDate($result['date']);?></td>
                            <td><a href="view_message.php?msg_id=<?php echo $result['id']; ?>">View</a> ||
                                <a href="?unseen_id=<?php echo $result['id']; ?>">Unseen</a> ||
                                <a href="?delete_id=<?php echo $result['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php } }?>
                        </tbody>

                    </table>
               </div>
            </div>
        </div>
        <script type="text/javascript">

            $(document).ready(function () {
                setupLeftMenu();

                $('.datatable').dataTable();
                setSidebarHeight();


            });
        </script>
<?php include "includes/footer.php";?>