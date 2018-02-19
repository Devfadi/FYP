<?php
session_start();
if(isset($_SESSION['id'])){
    header('location:user/index.php');
}


//$_SESSION['id'];
//$_SESSION['error'];
//$_SESSION['success'];
    include('connection.php');
    if(isset($_POST['submit'])){
        $user = $_POST['name'];
        $pass = $_POST['password'];
        if($user == '' || $pass == ''){
            $_SESSION['error'] = "must fill the required fields";
            header('location:login.php');
        }
        else{
           $sel = mysqli_query($con,"select * from user where USERNAME = '$user' and PASSWORD = '$pass' ");
            
            $row = mysqli_num_rows($sel);
            
            if($row>0){
                
                $user = mysqli_fetch_array($sel);
                $_SESSION['id'] = $user['USERID'];
                
            header('location:user/index.php');
        
        }
    }
    }

?>


<!doctype html>
<html>
    <!doctype html>
<html>
<head>
    <link rel="stylesheet" href="user/bootstrap/css/bootstrap.min.css">
    <title>
    Marks Count Down
        
    </title>
    <style>
        form{
            width:20%;
            margin: 0px auto;
        }
        table{
            width:80%;
            margin:0px auto;
            padding:5px;
            text-align: center;
            
        }
        td{
            padding:5px;
        }
        th{
            text-align: center;
            padding:6px;
            font-family: cursive,monospace;
        }
    </style>
    </head>
    <body>
          <?php
                if(isset($_SESSION['error'])){
                    
                
        
            ?>
       <div class="btn btn-danger"  style="width:100%;"><?php echo $_SESSION['error']; ?></div>
       <?php }?>
        <form method="post" action="" enctype="multipart/form-data">
            <fieldset>
            <legend>Admin Login
                </legend>
            
            <div>
            <label>User Name</label>
            <input type="number_format"  class="form-control" placeholder="User Name" name="name">
            </div>
            <div>
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div>
            <input type="submit" class="form-control btn-primary" value="Login" name="submit">
            <input type="reset" class="form-control btn-success" value="Reset" name="reset">
            </div>
                
                </fieldset>
        </form>
        
</body>
</html>