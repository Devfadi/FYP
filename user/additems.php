 <div class="content-wrapper">
   <?php
        if(isset($_POST['add_item']))
        {
            $uid = $_SESSION['id'];
            $name = $_POST['name'];
            $select_company = $_POST['select_company'];
            
            $insert_skill = mysqli_query($con,"INSERT INTO `item`(`ITEM_NAME`, `COID`) VALUES ('$name','$select_company')");
            
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
        $delete_company = mysqli_query($con,"delete from item where IID = $eid ");
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
                  <label for="exampleInputPassword1">Select Company</label>
                  <select class="form-control" id="exampleSelect" name="select_company">
                  	<option>Select ompany</option>
                  	 <?php
                      create_select_list("company");
                     ?>
                  </select>
                </div>
                 
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_item">Submit</button>
              </div>
            </form>
          </div>
          </div>
        
        
    
    
    
    
</div>
</section>
</div>