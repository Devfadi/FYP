
        <div class="content-wrapper">

        <?php
                if(isset($_POST['add_edu']))
                {
                    $uid = $_SESSION['id'];
                    $title = $_POST['title'];
                    
                    $insert_country = mysqli_query($con,"INSERT INTO `country`(`COUNTRY_NAME`) VALUES ('$title')");
                    
                    if($insert_country)
                    {
                        $_SESSION['success'] = 'Successfully Added';
                    }
                    else
                    {
                        $_SESSION['error'] = 'Error occur';
                    }
                    
                }
            else if(isset($_GET['did'])){
        $eid = $_GET['did'];
        $delete_country = mysqli_query($con,"delete from country where CID = $eid ");
        if($delete_country){
            $_SESSION['success'] = "Education deleted Successfully";
        }
    }
            
            if(isset($_SESSION['success']))
                    {
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
                  <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Country Name">
                </div>            
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_edu">Submit</button>
              </div>
            </form>
          </div>
          </div>
        
        
    
    
    
    
</div>
</section>
</div>