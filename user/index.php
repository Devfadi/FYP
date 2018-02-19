<?php
include('header.php');
include('sidebar.php');
include('functions.php');

$page = '';
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        
    }
    
    switch($page){
        case 'country':
            
            include('showcountry.php');
            break;
        case 'addcountry':
            
            include('addcountry.php');
            break;
        case 'addcompany':
            
            include('addcompany.php');
            break;
        case 'signout':
            
            include('signout.php');
            break;
        case 'additems':
            
            include('additems.php');
            break;
            
		case 'addproducts':
            
            include('addproducts.php');
            break;
        case 'addexperience':
            include('addexperience.php');
            break;
            
        case 'showcompany':
            
            include('showcompany.php');
            break;
            
        case 'items':
            
            include('showitems.php');
            break;
            
        case 'products':
            
            include('showproducts.php');
            break;
            
        case 'updatecountry':
            
            include('updatecountry.php');
            break;
            
        case 'updateproducts':
            
            include('updateproducts.php');
            break;
            
        case 'updateitems':
            include('updateitems.php');
            break;
            
        case 'updatecompany':
            
            include('updatecompany.php');
            break;
        
        default:
            include('dashboard.php');
    }




include('footer.php');








?>