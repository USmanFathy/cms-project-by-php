
<?php 
    
    
function create(){
    global $connection ;
 if(isset($_POST['create'])){
     $categorey = $_POST["cat_title_create"];
     if ($categorey =="" || empty($categorey)){
         echo "this field should not be empty";
     }else{
         $quer = "INSERT INTO categories(cat_title) ";
         $quer .= "VALUES ('$categorey')";
         $result =mysqli_query($connection , $quer);
        header("location: categories.php");
}     }  
}
    
    
    
    
function showcategories(){
    global $connection ;
$query ="SELECT * FROM categories ";
$select = mysqli_query($connection , $query) ;   
                     
 while($row = mysqli_fetch_assoc($select)){
                        
$cat_title   =$row['cat_title'];
$cat_id      =$row['cat_id'];  
     echo"<tr>";
     echo "<td>{$cat_id}</td>";
     echo "<td>{$cat_title}</td>";
     echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
     echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
     echo "</tr>";
 }
                                           
}
    

function delete(){
  global $connection ;
if(isset($_GET['delete'])){
    $cat_id = $_GET['delete'];
    $query = "DELETE FROM categories ";
    $query .="WHERE cat_id =$cat_id";
    $select = mysqli_query($connection , $query) ;   
    header("location: categories.php");
}
}
    
    
function update_categorey(){
    global $connection ;
if (isset($_GET['edit'])){
$cat_id = $_GET['edit'];
$query ="SELECT * FROM categories WHERE cat_id= $cat_id ";
$select = mysqli_query($connection , $query) ;   
                     
 while($row = mysqli_fetch_assoc($select)){
                        
$cat_title   =$row['cat_title'];
$cat_id      =$row['cat_id'];  
                    
                      
                      ?>
<input type="text" value="<?php if(isset($cat_title)){echo $cat_title ;} ?>" class="form-control" name="cat_title_update">
                      <?php }} ?>

                   <?php 
if(isset($_POST['update'])){
 $cat_title_update = $_POST['cat_title_update'];
$quer = "UPDATE categories SET cat_title = '$cat_title_update' WHERE cat_id= $cat_id ";

$select = mysqli_query($connection , $quer) ;
        if(!$select){
            die('FAILED' . mysqli_error($connection));
        }
                            
                        }
} 
    
    
    
    
    
    
    
    
    
    
?>