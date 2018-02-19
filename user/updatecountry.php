
        <div class="content-wrapper">

        <?php
                $uid = $_GET['uid'];
         $userid = $_SESSION['id'];
                if(isset($_POST['update_country']))
                {
                    $title = $_POST['title'];
					
                     $update_country = mysqli_query($con,"update country SET

               COUNTRY_NAME     = '$title'
               where CID = $uid;
              
               ");
        if($update_country){
            $_SESSION['success'] = "Country updated Successfully";
            
        }
        else{
             $_SESSION['error'] = "error";
        }
        
    } 
         
         
        
         
         
         
         
         if(isset($_SESSION['success'])){
             echo "<div class='btn btn-success'style='width:100%;'>".$_SESSION['success']."</div>";
             unset($_SESSION['success']);
         }
         
         
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>
     <!-- Main content -->
     <?php
         
         
         $country =  mysqli_query($con,"select * from country where CID = $uid ");
         
         $fetchcountry = mysqli_fetch_array($country);
         
         ?>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Education Title" value="<?php echo $fetchcountry['COUNTRY_NAME'];?>">
                </div>              
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="update_country">Submit</button>
              </div>
            </form>
          </div>
          </div>
        
        
    
    
    
    
</div>
</section>
</div>