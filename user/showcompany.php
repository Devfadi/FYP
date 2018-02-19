<?php
     $uid = $_SESSION['id'];
    $query  =  mysqli_query($con, "SELECT company.COID, company.Name, country.COUNTRY_NAME FROM `company`, `country` WHERE country.CID = company.CID");
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
                  <th>Country</th>
                  <th>Delete</th>
                  <th>Update</th>
                </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_array($query)){?>
                <tr>
                  <td><?php echo $row['Name'] ?></td>
                  <td><?php echo $row['COUNTRY_NAME'] ?></td> 
                  <td><a href="index.php?page=addcompany&did=<?php echo $row['COID'];?>">Delete</a></td>
                  <td><a href="index.php?page=updatecompany&uid=<?php echo $row['COID'];?>">Update</a></td>  
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
