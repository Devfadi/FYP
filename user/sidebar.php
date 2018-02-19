


<?php
//session_start();
    include('../connection.php');
$uid = $_SESSION['id'];
    $query  =  mysqli_query($con, "SELECT * FROM `user` WHERE USERID='$uid'");
    $row = mysqli_fetch_array($query);
?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../include/<?php echo $row['IMAGE']; ?>" class="img-circle" alt="User Image" style="height:47px;">
        </div>
        <div class="pull-left info">
          <p><?php echo $row['USERNAME'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Countries</span>
            <span class="fa fa-angle-left pull-right"></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=country"><i class="fa fa-circle-o"></i>Show Countries</a></li>
            <li><a href="index.php?page=addcountry"><i class="fa fa-circle-o"></i> Add Country</a></li>
           
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Companies</span>
            <span class="fa fa-angle-left pull-right"></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=showcompany"><i class="fa fa-circle-o"></i>Show Companies</a></li>
            <li><a href="index.php?page=addcompany"><i class="fa fa-circle-o"></i> Add Company</a></li>
           
            
          </ul>
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Items</span>
            <span class="fa fa-angle-left pull-right"></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=items"><i class="fa fa-circle-o"></i>Show Items</a></li>
            <li><a href="index.php?page=additems"><i class="fa fa-circle-o"></i> Add Items</a></li>
           
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Products</span>
            <span class="fa fa-angle-left pull-right"></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=products"><i class="fa fa-circle-o"></i>Show Products</a></li>
            <li><a href="index.php?page=addproducts"><i class="fa fa-circle-o"></i> Add Products</a></li>
           
            
          </ul>
        </li>
       
        
        
        
       
       
        
       
        
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>