<?php
     $uid = $_SESSION['id'];
    $query  =  mysqli_query($con, "SELECT product.PID, company.Name, item.ITEM_NAME, product.PRICE, product.STOCK FROM `company`, `item` , `product` WHERE company.COID = product.COID AND item.IID = product.IID");
?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Skills
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Skills</li>
      </ol>
    </section>
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Company</th>
                  <th>Item</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Delete</th>
                  <th>Update</th>
                </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_array($query)){?>
                <tr>
                  <td><?php echo $row['Name'] ?></td>
                  <td><?php echo $row['ITEM_NAME'] ?></td> 
                  <td><?php echo $row['PRICE'] ?></td> 
                  <td><?php echo $row['STOCK'] ?></td> 
                  <td><a href="index.php?page=addproducts&did=<?php echo $row['PID'];?>">Delete</a></td>
                  <td><a href="index.php?page=updateproducts&uid=<?php echo $row['PID'];?>">Update</a></td>  
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            
            
            <!-- /.box-body -->
          </div>
          </div>
         </div>
          </section>
    
</div>
