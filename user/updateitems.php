 <div class="content-wrapper">
   <?php
     $uid = $_GET['uid'];
         $userid = $_SESSION['id'];
        if(isset($_POST['update_item']))
        {
            $name = $_POST['item'];
            $company = $_POST['company'];
            
             $update_item = mysqli_query($con,"UPDATE
    `item`
SET
    `ITEM_NAME` = '$name',
    `COID` = '$company'
WHERE
    `IID` = $uid
               ");
        if($update_item){
            $_SESSION['success'] = "Item updated Successfully";
            
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
         
         
         $item =  mysqli_query($con,"select * from item where IID = $uid");
         
         $fetchitem = mysqli_fetch_array($item);
         
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
                  <input type="text" class="form-control" id="exampleInputEmail1" name="item" placeholder="Enter Skill Name" value="<?php echo $fetchitem['ITEM_NAME'];?>">
                </div>
                 <div class="form-group">
                 <label for="exampleInputCountry">Select Company</label>
                  <select name="company">
                      <option>Select Company</option>
                      
                      <?php
                      $select_title = mysqli_query($con,"SELECT * FROM company");
                      
                      while($row = mysqli_fetch_array($select_title))
                      { 
                      if($row['COID'] == $fetchitem['COID'])
                      {
                          $sel = "Selected";
                      }
                          else
                          {
                              $sel = "";
                          }
                      
                      ?>
                          
                      <option value ="<?php echo $row['COID']?>" <?php echo $sel ?> ><?php echo $row['Name'] ?></option>
                      
                     <?php } ?>
                  </select>
                  
                </div>
                 
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="update_item">Submit</button>
              </div>
            </form>
          </div>
          </div>
        
        
    
    
    
    
</div>
</section>
</div>