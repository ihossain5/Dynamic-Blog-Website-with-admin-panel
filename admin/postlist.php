<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php"?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
                            <th width="5%">SL No</th>
							<th width="13%">Post Title</th>
                            <th width="25%">Description</th>
							<th width="10%">Category</th>
							<th width="10%">Image</th>
							<th width="10%">Author</th>
							<th width="5%">Tags</th>
							<th width="10%">Date</th>
							<th width="12%"> Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                        $query = "SELECT post.*, category.name FROM post INNER JOIN category
                                   ON post.category_id = category.id
                                   ORDER BY post.title DESC ";
                        $post = $db->select($query);
                        if ($post){
                            $i = 0;
                            while ($result =  $post->fetch_assoc()){
                                $i++;
                    ?>
						<tr class="odd gradeX">
							<td><?php echo $i ?></td>
							<td><?php echo $result['title'] ?></td>
							<td><?php echo $format->textShorten($result['body'],100)  ?></td>
							<td><?php echo $result['name'] ?></td>
							<td><img src="<?php echo $result['image'] ?>" height="40px" width="80px" alt=""></td>
							<td><?php echo $result['author'] ?></td>
							<td><?php echo $result['tags'] ?></td>
							<td><?php echo $format->formatDate($result['date'])  ?></td>
							<td><a href="edit_post.php?edit_postid=<?php echo $result['id'] ?>">Edit</a>
                                || <a  onclick="return confirm('Are you sure to Delete?')" href="delete_post.php?del_postid=<?php echo $result['id'] ?>">Delete</a></td>
						</tr>
                    <?php }
                        }?>
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