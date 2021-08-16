<?php 
switch ($_SERVER['SCRIPT_NAME']) {
	case '/finalProject/controller/login-form.php':
		// code...
	$CURRENT_PAGE ="Login";
	$PAGE_TITTLE ="Login Page";
		break;
	case '/finalProject/controller/registration-form.php':
		// code...
	$CURRENT_PAGE ="Registration";
	$PAGE_TITTLE ="Registration Page";
		break;
		case '/finalProject/controller/home-page.php':
		// code...
	$CURRENT_PAGE ="Home";
	$PAGE_TITTLE ="Home Page";
		break;
		case '/finalProject/controller/add-to-cart.php':
		// code...
	$CURRENT_PAGE ="Add to cart";
	$PAGE_TITTLE ="Add to cart Page";
		break;
		case '/finalProject/controller/shop-products.php':
		// code...
	$CURRENT_PAGE ="Products";
	$PAGE_TITTLE ="Shop products";
		break;
		case '/finalProject/controller/changePassword.php':
		// code...
	$CURRENT_PAGE ="Change Password";
	$PAGE_TITTLE ="Change Password";
		break;
		case '/finalProject/controller/view-profile.php':
		// code...
	$CURRENT_PAGE ="Profile";
	$PAGE_TITTLE ="Profile";

	
	default:
		// code...
		break;
}

?>