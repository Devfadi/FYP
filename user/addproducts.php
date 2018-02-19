 <div class="content-wrapper">
   <?php
        if(isset($_POST['add_product']))
        {
            $uid = $_SESSION['id'];
            $select_company = $_POST['select_company'];
            $select_item = $_POST['select_item'];
			$price = $_POST['price'];
			$stock = $_POST['stock'];
            
            $insert_product = mysqli_query($con,"INSERT INTO `product`(`COID`, `IID`, `PRICE`, `STOCK`) VALUES ('$select_company','$select_item','$price','$stock')");
            
             if($insert_product)
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
        $delete_company = mysqli_query($con,"delete from product where PID = $eid ");
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
                  <label for="exampleInputPassword1">Select Company</label>
                  <select class="form-control" id="comp_select" name="select_company">
                  	<option>Select Company</option>
                  	 <?php
                      create_select_list("company");
                     ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Select Item</label>
                  <select class="form-control" id="item_select" name="select_item">
                  	<option>Select Item</option>
                  	 <?php
                      //create_select_list("item");
                     ?>
                  </select>
                </div>
                 
                 <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="text" name="price" class="form-control"/>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Stock</label>
                  <input type="number" name="stock" class="form-control"/>
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_product">Submit</button>
              </div>
            </form>
          </div>
          </div>
        
        
    
    
    
    
</div>
</section>
</div>