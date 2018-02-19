 <div class="content-wrapper">
   <?php
     $uid = $_GET['uid'];
         $userid = $_SESSION['id'];
        if(isset($_POST['update_company']))
        {
            $name = $_POST['name'];
            $country = $_POST['country'];
            
             $update_company = mysqli_query($con,"UPDATE
    `company`
SET
    `Name` = '$name',
    `CID` = '$country'
WHERE
    `COID` = $uid
               ");
        if($update_company){
            $_SESSION['success'] = "Company updated Successfully";
            
        }
        else{
             echo mysqli_error;
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
        Update Skill Here
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Update Skill Form</li>
      </ol>
    </section>
     <!-- Main content -->
     <?php
         
         
         $company =  mysqli_query($con,"select * from company where COID = $uid");
         
         $fetchcompany = mysqli_fetch_array($company);
         
         ?>
    <!-- Content Header (Page header) -->
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Companies</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Skill Name" value="<?php echo $fetchcompany['Name'];?>">
                </div>
                 <div class="form-group">
                 <label for="exampleInputCountry">Select Country</label>
                  <select name="country">
                      <option>Select Country</option>
                      
                      <?php
                      $select_title = mysqli_query($con,"SELECT * FROM country");
                      
                      while($row = mysqli_fetch_array($select_title))
                      { 
                      if($row['CID'] == $fetchcompany['CID'])
                      {
                          $sel = "Selected";
                      }
                          else
                          {
                              $sel = "";
                          }
                      
                      ?>
                          
                      <option value ="<?php echo $row['CID']?>" <?php echo $sel ?> ><?php echo $row['COUNTRY_NAME'] ?></option>
                      
                     <?php } ?>
                  </select>
                  
                </div>
                 
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="update_company">Submit</button>
              </div>
            </form>
          </div>
          </div>
        
        
    
    
    
    
</div>
</section>
</div>