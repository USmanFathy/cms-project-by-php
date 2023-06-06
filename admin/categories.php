<!--//includes -->
<?php include "includes/admin_header.php"?>


    <div id="wrapper">

        <!-- Navigation -->
<?php include"includes/nav.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                    <div class="col-xs-6">
<?php    create() ;   ?>
                
     <form action="" method="post">
                    <div class="form-group">
                      <label for="cat-title">Add  Category</label>
                       <input type="text" class="form-control" name="cat_title_create">
                      
                    </div>
                    <div class="form-group">
                        <input type="submit" name="create" class="btn btn-primary" value="Add Categorey">
                    </div>    
 <?php if(isset($_GET['edit'])){
            $cat_id = $_GET['edit'];
         include "includes/update_categories.php"; }?>
         </div>

                       
                    <div class="col-xs-6">
                           <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>ID</th>
                                       <th>Categorey Title</th>
                                   </tr>
                               </thead>
                          
                           <tbody>
<?php             
showcategories() ;
delete();
?>
                       
                       
                               
                               </tbody>

                            </table>
                       </div>
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       <!--
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
-->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php" ?>
