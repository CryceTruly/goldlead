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




<h3>Latest Posts</h3>

<table class="table table-stripped">
<tr>
<th>Post Title </th>
<th>Author </th>
<th>Created </th>
<th></th><th></th>
</tr>

<?php
while($row=$stmt->fetch(PDO::FETCH_OBJ)){
  ?>
  <tr>
  <td><?php echo $row->title ?></td>
  <td><?php echo $row->author ?></td>
  <td><?php echo $row->created_at ?></td>
  <td><a href="editpost.php?post=<?php  echo $row->id ?>" class="btn btn-link">Edit</a></td>
  <td><a href='removepost.php?post=<?php  echo $row->id ?>' class="btn btn-warning">Delete</a></td>
  
  </tr>


  <?php
}

?>


</table>
    <?php


  }

?>

      </div>
    </div>
  </div>
</body>
</html>