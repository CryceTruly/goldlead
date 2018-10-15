<?php   include "./header.php"?>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card card-body bg-light mt-5">
          <h2>Dashboard <small class="text-muted"><?php echo $_SESSION['email']; ?></small></h2>
          <p>Welcome to the dashboard </p>
          <p><a href="new.php" class="btn btn-info">Add Post</a></p>
        </div>

     
        <?php
if (isset($_GET['msg'])){

  ?>
     <div class="alert alert-success">
     <?php
  echo $_GET['msg'];

  ?>

        </div>
        <?php

}

?>
<?php
 $sql = 'SELECT * FROM posts';
 $stmt=$pdo->query($sql);
  if($stmt->rowCount()<1){?>


<h4>No posts yet</h4>
   
  <?php 
  }else{
    
    ?>
  <h2 class="mx-4 mt-4 mb-4">Latest Posts</h2>

  <table class="table table-striped">
  <tr>
  <th>Post Title </th>
  <th>Author </th>
  <th>Created </th>
  <th></th><th></th>
  </tr>

`<?php
while($row=$stmt->fetch(PDO::FETCH_OBJ)){
  ?>
  <tr>
  <td><a href="post.php?post=<?php  echo $row->id?>"> <?php echo $row->title ?></a></td>
  <td><?php echo $row->author ?></td>
  <td><?php echo $row->created_at ?></td>
  <td><a href="editpost.php?post=<?php  echo $row->id ?>" class="btn btn-link">Edit</a></td>
  <td><a  data-toggle="modal" data-target="#exampleModal" class="btn btn-warning">Delete</a>
  
  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Action</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this post?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-primary" href='removepost.php?post=<?php  echo $row->id ?>'>Yes</a>
      </div>
    </div>
  </div>
</div>
  </td>
  
  </tr>


  <?php
}

?>


</table>
 
 <?php


  }


  ?>

