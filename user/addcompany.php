 <div class="content-wrapper">
   <?php
        if(isset($_POST['add_company']))
        {
            $uid = $_SESSION['id'];
            $name = $_POST['name'];
            $select_country = $_POST['select_country'];
            
            $insert_skill = mysqli_query($con,"INSERT INTO `company`(`NAME`, `CID`) VALUES ('$name','$select_country')");
            
             if($insert_skill)
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
        $delete_company = mysqli_query($con,"delete from company where COID = $eid ");
        if($delete_company){
            $_SESSION['success'] = "Skill deleted Successfully";
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
        Add Skills Here
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Add skills Form</li>
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
              <h3 class="box-title">Skills</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Skill Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Select Country</label>
                  <select class="form-control" id="exampleSelect" name="select_country">
                  	<option>Select Country</option>
                  	 <?php
                      $select_country = mysqli_query($con,"SELECT * FROM country");
                      
                      while($row = mysqli_fetch_array($select_country))
                      { ?>
                          
                      <option value ="<?php echo $row['CID']?>" ><?php echo $row['COUNTRY_NAME'] ?></option>
                      
                     <?php } ?>
                  </select>
                </div>
                 
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_company">Submit</button>
              </div>
            </form>
          </div>
          </div>
        
        
    
    
    
    
</div>
</section>
</div>