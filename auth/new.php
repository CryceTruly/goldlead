
<?php 
    include('header.php');
    require_once("db.php");


  // Process form when post submit
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Sanitize POST
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // Put post vars in regular vars
    $title =  trim($_POST['blog_title']);
    $body = trim($_POST['blog_description']);
    $author =$_SESSION['name'];
    $category = trim($_POST['category_id']);
    $created_at = date('Y-m-d H:i:s');

      //Upload Image Here
        
      if($_FILES['featured_image']['name']!="")
      {
          $featured_image = $_FILES['featured_image']['name'];
          //Generating New Image Name
          $new_image = 'GOLD_LEAD_BLOG_PHOTO'.rand(000,999).'.'."png";
          
          $featured_image = $new_image;
          
          $src = $_FILES['featured_image']['tmp_name'];
          $dst = '../img/'.$featured_image;
          
          $upload = move_uploaded_file($src, $dst);
          if($upload==false)
          {
              $_SESSION['upload_fail'] = "Failed to Upload Image.";
              header('location:new.php');
              die();
          }else{

          }
          
          
      }
      else
      {
          $featured_image = "";
      }

 // Prepare insert query
 $sql = 'INSERT INTO posts (title, body, author,category,featured_image) VALUES (:title, :body, :author,:category,:featured_image)';

 if($stmt = $pdo->prepare($sql)){
   // Bind params
   $stmt->bindParam(':title', $title, PDO::PARAM_STR);
   $stmt->bindParam(':body', $body, PDO::PARAM_STR);
   $stmt->bindParam(':author', $author, PDO::PARAM_STR);
   $stmt->bindParam(':category', $category, PDO::PARAM_STR);
   $stmt->bindParam(':featured_image', $featured_image, PDO::PARAM_STR);

   // Attempt to execute
   if($stmt->execute()){
     // Redirect to login
     header('location: index.php?msg='."Post added");
   } else {
     die('Something went wrong');
   }
 
 unset($stmt);

// Close connection
unset($pdo);

  
}
  }






  
    
?>

        
    <!-- Main Content Starts Here -->
    <section class="main container">

    <div class="card mt-5">
    <div class="card-body">
      <h5 class="card-title">Add a new post</h5>
      <form method="post" action="<?php   echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           
           <div class="form-group">
           <label for="title">Post Title *</label>
           <input type="text" id="title" name="blog_title" class="form-control"  required/>
           </div>
           <div class="form-group">
           <label for="body">Post Body *</label>
           <textarea name="blog_description" id="body" rows="10" class="form-control" required></textarea>
           </div>
           <div class="form-group">
    <label for="exampleFormControlSelect1">Choose a category</label>
    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
    <?php
                         
                           
                            $query = "SELECT * FROM categories";
                            $res = $pdo->query($query);
                          
                                $count_rows = $res->rowCount();
                                if($count_rows>0)
                                {
                                    //Display All Categories
                                    while($row=$res->fetch(PDO::FETCH_OBJ))
                                    {
                                        $category_id = $row->id;
                                        $category_title =$row->name;
                                        ?>
                                        <option value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>
                                        <?php
                                    }
                                }
                                else
                                {
                                    //Display None
                                    ?>
                                    <option value="0">None</option>
                                    <?php
                                }
                            
                        ?>
    </select>
  </div>
  <div class="custom-file">
  <input required type="file" class="custom-file-input" id="customFile" name="featured_image">
  <label class="custom-file-label" name="featured_image"  for="customFile">Choose a Featured Image</label>
</div>

             
            
                        <input type="submit" class="btn btn-lg btn-primary mt-3" name="submit" value="Add Post" />
             
        </form>
        
    </div>
  </div>
      
      
        <?php 
            if(isset($_SESSION['add_fail']))
            {
                echo $_SESSION['add_fail'];
                unset($_SESSION['add_fail']);
            }
            if(isset($_SESSION['upload_fail']))
            {
                echo $_SESSION['upload_fail'];
                unset($_SESSION['upload_fail']);
            }
        ?>
      