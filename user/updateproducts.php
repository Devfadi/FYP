 <div class="content-wrapper">
   <?php
     $uid = $_GET['uid'];
         $userid = $_SESSION['id'];
        if(isset($_POST['update_product']))
        {
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            
             $update_product = mysqli_query($con,"UPDATE
    `product`
SET
    `PRICE` = '$price',
    `STOCK` = '$stock'
WHERE
    `PID` = $uid
               ");
        if($update_product){
            $_SESSION['success'] = "Product updated Successfully";
            
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
         
         
         $product =  mysqli_query($con,"select * from product where PID = $uid");
         
         $fetchproduct = mysqli_fetch_array($product);
         
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
              <h3 class="box-title">Products</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body">
               <div class="form-group">
                 <label for="exampleInputCountry">Company</label>
                  <select name="company" class="form-control" readonly>
                      <option>Select Company</option>
                      
                      <?php
                      $select_title = mysqli_query($con,"SELECT * FROM company");
                      
                      while($row = mysqli_fetch_array($select_title))
                      { 
                      if($row['COID'] == $fetchproduct['COID'])
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
                 <div class="form-group">
                 <label for="exampleInputCountry">Item</label>
                  <select name="company" class="form-control" readonly>
                      <option>Select Item</option>
                      
                      <?php
                      $select_title = mysqli_query($con,"SELECT * FROM item");
                      
                      while($row = mysqli_fetch_array($select_title))
                      { 
                      if($row['IID'] == $fetchproduct['IID'])
                      {
                          $sel = "Selected";
                      }
                          else
                          {
                              $sel = "";
                          }
                      
                      ?>
                          
                      <option value ="<?php echo $row['IID']?>" <?php echo $sel ?> ><?php echo $row['ITEM_NAME'] ?></option>
                      
                     <?php } ?>
                  </select>
                  
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="Enter Skill Name" value="<?php echo $fetchproduct['PRICE'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stock</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="stock" placeholder="Enter Skill Name" value="<?php echo $fetchproduct['STOCK'];?>">
                </div>
                 
                 
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="update_product">Submit</button>
              </div>
            </form>
          </div>
          </div>
        
        
    
    
    
    
</div>
</section>
</div>