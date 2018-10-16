<?php
require_once "header.php";

?>
<div class="container mt-3">

<?php
require_once("db.php");
$id= $_GET['post'];

$sql="SELECT * FROM posts WHERE id ='$id'";
$q=$pdo->query($sql);
$row=$q->fetch(PDO::FETCH_OBJ);
?>
<h2><?php echo $row->title ?></h2>
<small>Post by <strong><?php echo $row->author; ?></strong> on <?php echo $row->created_at  ?></small>
<hr>
<p><?php  echo $row->body;?></p>
<img height=300 width=900 src="../img/<?php  echo $row->featured_image; ?>" alt="photo" class="img-fluid mb-5">
<br>
<?php
?>


</div>
