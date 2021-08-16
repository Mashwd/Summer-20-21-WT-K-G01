<?php
	switch ($_SERVER['SCRIPT_NAME']) {
		case '/e-commerce/view/register.php':
			$CURRENT_PAGE = "Create Account";
			$PAGE_TITLE = "Create account page";
			break;
		case '/e-commerce/view/login.php':
			$CURRENT_PAGE = "Please log-in!";
			$PAGE_TITLE = "log-in page";
			break;
		case '/e-commerce/view/adminHome.php':
			$CURRENT_PAGE = "Dashboard";
			$PAGE_TITLE = "Admin dashboard";
			break;
		case '/e-commerce/view/viewProfile.php':
			$CURRENT_PAGE = "Profile Information";
			$PAGE_TITLE = "View profile";
			break;
		case '/e-commerce/view/editProfile.php':
			$CURRENT_PAGE = "Edit Profile";
			$PAGE_TITLE = "Edit profile";
			break;
		case '/e-commerce/view/accountList.php':
			$CURRENT_PAGE = "Account List";
			$PAGE_TITLE = "Account list";
			break;
		case '/e-commerce/view/addAccount.php':
			$CURRENT_PAGE = "Add accounts";
			$PAGE_TITLE = "Add accounts";
			break;
			case '/e-commerce/view/postedNotice.php':
			$CURRENT_PAGE = "Posted Notice";
			$PAGE_TITLE = "Notice Page";
			break;
		default:
			$CURRENT_PAGE = "Home";
			$PAGE_TITLE = "Home Page";
			break;
	}
?>