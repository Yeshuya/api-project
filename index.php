<?php 
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
//credits: john paul maja :D <3

  include('google/google-confirm.php');
  if($login_button == true){
    include('facebook/facebook-confirm.php');
  }
?>


<html>
	<head> 
		<title> API INVENTORY </title>
		<link rel="stylesheet" type="text/css" href="css/styles_index.css">
	</head>
	<body>
		<div class="header">
			<a href="index.php"><h3> API INVENTORY </h3></a>
		</div>
		<div class="topnav_container">
			<div class="topnav">
				<div class="dropdown">
				    <button class="dropbtn">Product
				    	<i class="fa fa-caret-down"></i>
				    </button>
				    <div class="dropdown-content">
				      <a href="index.php?page=Product">Manage Product</a>
				      <a href="index.php?page=AddProd">Add Product</a>
				    </div>
				</div>
				<div class="dropdown">
				    <button class="dropbtn">Category
				    	<i class="fa fa-caret-down"></i>
				    </button>
				    <div class="dropdown-content">
				      <a href="index.php?page=Category">Category List</a>
				    </div>
				</div>
			</div>
		</div>
		<br>
    <div class="content">
        <?php //google ------ credits: john paul maja :D <3
        if($login_button == ''){
          switch($page){
				case 'Product':
					require_once 'product_list.php';
				break;
				case 'Category':
					require_once 'category_list.php';
				break;
				case 'AddProd':
					require_once 'addproduct.php';
				break;
				case 'Details':
					require_once 'product_details.php';
				break;
				case 'Update':
					require_once 'updateproduct.php';
				break;
				case 'Delete':
					require_once 'deleteproduct.php';
				break;	
				default:
				break;
			}
          }
        }else{
          echo '<div align="center">'.$login_button . '</div>';
        }

        ?>
        <br>
        <?php //facebook
            if(isset($facebook_login_url)){
            echo '<div align="center">' .$facebook_login_url. '</div>';
            }else{
             switch($page){
				case 'Product':
					require_once 'product_list.php';
				break;
				case 'Category':
					require_once 'category_list.php';
				break;
				case 'AddProd':
					require_once 'addproduct.php';
				break;
				case 'Details':
					require_once 'product_details.php';
				break;
				case 'Update':
					require_once 'updateproduct.php';
				break;
				case 'Delete':
					require_once 'deleteproduct.php';
				break;	
				default:
				break;
			}
              }
            }
          
        ?>
      </div>
      <div class="footer">
        <h1>Maja | API</h2> <!-- credits: john paul maja :D <3 -->
      </div>
    </body><!-- credits: john paul maja :D <3 -->
</html>




