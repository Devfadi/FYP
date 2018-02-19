<?php

     $uid = $_SESSION['id'];
    $query  =  mysqli_query($con, "SELECT * FROM `country`");
    

    
?>
    <div class="content-wrapper">
    <?php
        if($query)
    {
        echo "";
    }
else
{
    echo mysqli_error;
}
        ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Countries
        <small>Preview</small>
      </h1>
    </section>
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Country Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
					<th><h3>Country Name</h3></th>
                </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_array($query)){?>
                <tr>
					<td><h4><?php echo $row['COUNTRY_NAME'] ?></h4></td>
                  <td><a href="index.php?page=addcountry&did=<?php echo $row['CID'];?>">Delete</a></td>
                  <td><a href="index.php?page=updatecountry&uid=<?php echo $row['CID'];?>">Update</a></td>
                  
                </tr>
                <?php }?>
                
                </tbody>
                
              </table>
            </div>
            
            
            <!-- /.box-body -->
          </div>
          </div>
         </div>
          </section>
    
</div>
