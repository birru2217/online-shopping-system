<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <title>Online Shopping</title>

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Ethiopic:wght@400;700&display=swap" rel="stylesheet">

		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<link rel="stylesheet" href="css/font-awesome.min.css">

		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
		
		
		
         
		
		<style>
        #navigation {
          background: #FF4E50;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          
        }
        #header {
  
            background: #780206;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
        }
        #top-header {
              
  
            background: #870000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #190A05, #870000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          color: #1E1F29;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          

        }
        .footer-links li a {
          color: #1E1F29;
        }
        .mainn-raised {
            
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }
       
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
        
	:lang(am) {
		font-family: 'Noto Sans Ethiopic', sans-serif !important;
	}
       
        
        </style>

    </head>
	<body>
		<header>
			<div id="top-header">
				<div class="container">
					
					<ul class="header-links pull-right">
						<li>
  <a href="#" data-toggle="modal" data-target="#Admin_login">
    <i class="fa fa-lock"></i> <span class="lang-admin">Admin</span>
  </a>
</li>
						
						
						<li>
							<select id="langSelect" onchange="translateHeader(this.value)" style="background: transparent; color: #FFF; border: 1px solid rgba(255,255,255,0.4); font-size: 12px; cursor: pointer; outline: none; padding: 2px 5px; margin-left: 5px; margin-right: 5px;">
								<option value="en" style="background: #190A05; color: #FFF;">English</option>
								<option value="am" style="background: #190A05; color: #FFF;">አማርኛ</option>
								<option value="om" style="background: #190A05; color: #FFF;">Afaan Oromoo</option>
							</select>
						</li>

						<li><?php
                             include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> <span class="lang-hi">HI</span> '.$row["first_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="#" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> <span class="lang-account">My Account</span></a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                                             ?>
                               
                                </li>				
					</ul>
					
				</div>
			</div>
			<div id="header">
				<div class="container">
					<div class="row">
						<div id="logo-column" class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
								<font id="logo-text" style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif" class="lang-logo">
                                        Online Shop
                                    </font>
									
								</a>
							</div>
						</div>
						<div id="search-column" class="col-md-6">
							<div class="header-search">
								<form method="GET" action="search.php" style="display: flex; width: 100%;">
									<select class="input-select" id="cat-select" style="flex: 0 0 auto;">
										<option value="0" class="lang-all-cat">All Categories</option>
										<option value="1" class="lang-men">Men</option>
										<option value="1" class="lang-women">Women</option>
									</select>
									<input class="input" name="keyword" id="search" type="text" placeholder="Search here" required style="flex: 1 1 auto;">
									<button type="submit" id="search_btn" class="search-btn lang-search-btn" style="flex: 0 0 auto;">Search</button>
								</form>
							</div>
						</div>
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								

								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span class="lang-cart">Your Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">
										
											
										</div>
										
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  edit cart</a>
											
										</div>
									</div>
										
									</div>
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								</div>
						</div>
						</div>
					</div>
				</div>
			</header>
		<nav id='navigation'>
			<div class="container" id="get_category_home">
                
            </div>
				</nav>
            

		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
													
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>
													
                        </div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">

                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>

                        </div>
                      </div> 
		<div class="modal fade" id="profile" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>My Profile</h4>
      </div>

      <div class="modal-body">
        <?php
        include "db.php";

        if(isset($_SESSION["uid"])){
            $uid = $_SESSION["uid"];
            $sql = "SELECT * FROM user_info WHERE user_id='$uid'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
        ?>
<?php if(!empty($row['image'])){ ?>
  <center>
    <img src="uploads/<?php echo $row['image']; ?>" 
         width="120" height="120" 
         style="border-radius:50%;">
  </center>
  <br>
<?php } ?>
        <form method="POST" enctype="multipart/form-data">

  <input type="text" name="name" value="<?php echo $row['first_name']; ?>" class="form-control"><br>

  <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control"><br>

  <input type="file" name="image" class="form-control"><br>

  <button name="update" class="btn btn-primary">Update</button>

</form>

        <?php
        if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    if(!empty($imageName)){
        move_uploaded_file($tmpName, __DIR__ . "/uploads/" . $imageName);

        $update = "UPDATE user_info 
                   SET first_name='$name', email='$email', image='$imageName' 
                   WHERE user_id='$uid'";
    } else {
        $update = "UPDATE user_info 
                   SET first_name='$name', email='$email' 
                   WHERE user_id='$uid'";
    }

    if(mysqli_query($con,$update)){
        echo "<br><div class='alert alert-success'>Updated Successfully!</div>";
    } else {
        echo "<br><div class='alert alert-danger'>Error updating!</div>";
    }
} }
        ?>
          
      </div>

    </div>
  </div>
</div><div class="modal fade" id="Admin_login" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Admin Login</h4>
      </div>

      <div class="modal-body">
       <form method="POST" action="admin/login.php">
           <label>Email</label>
  <input type="email" name="email" class="form-control"><br>
<label>Password</label>
  <input type="password" name="password" class="form-control"><br>

  <button name="login" class="btn btn-danger">Login</button>
</form>
      </div>

    </div>
  </div>
</div>

<script>
const translations = {
    en: {
        admin: "Admin",
        account: "My Account",
        hi: "HI",
        logo: "Online Shop",
        searchPlaceholder: "Search here",
        searchBtn: "Search",
        cart: "Your Cart",
        allCat: "All Categories",
        men: "Men",
        women: "Women"
    },
    am: {
        admin: "አስተዳዳሪ",
        account: "የእኔ አካውንት",
        hi: "ሰላም",
        logo: "የመስመር ላይ ገበያ",
        searchPlaceholder: "እዚህ ይፈልጉ...",
        searchBtn: "ፈልግ",
        cart: "የእርስዎ ጋሪ",
        allCat: "ሁሉም",
        men: "ወንዶች",
        women: "ሴቶች"
    },
    om: {
        admin: "To'ataa",
        account: "Herrega Koo",
        hi: "Akkam",
        logo: "Online Shop", 
        searchPlaceholder: "Barbaadi...",
        searchBtn: "Barbaadi",
        cart: "Guuboo",
        allCat: "Hundumaa", 
        men: "Dhiira",
        women: "Dubartii"
    }
};

function translateHeader(lang) {
    document.documentElement.setAttribute('lang', lang);
    localStorage.setItem('userWebsiteLang', lang);
    
    const t = translations[lang] || translations.en;
    
    // አይኮኖቹ እንዳይጠፉ ይዘቱን ብቻ የመቀየር ዘዴ
    const elAdmin = document.querySelector('.lang-admin');
    if(elAdmin) elAdmin.childNodes[elAdmin.childNodes.length - 1].nodeValue = " " + t.admin;
    
    const elAccount = document.querySelector('.lang-account');
    if(elAccount) elAccount.childNodes[elAccount.childNodes.length - 1].nodeValue = " " + t.account;
    
    const elHi = document.querySelector('.lang-hi');
    if(elHi) elHi.childNodes[elHi.childNodes.length - 1].nodeValue = " " + t.hi;
    
    if(document.querySelector('.lang-logo')) document.querySelector('.lang-logo').textContent = t.logo;
    if(document.querySelector('.lang-search-btn')) document.querySelector('.lang-search-btn').textContent = t.searchBtn;
    if(document.querySelector('.lang-cart')) document.querySelector('.lang-cart').textContent = t.cart;
    if(document.querySelector('.lang-all-cat')) document.querySelector('.lang-all-cat').textContent = t.allCat;
    if(document.querySelector('.lang-men')) document.querySelector('.lang-men').textContent = t.men;
    if(document.querySelector('.lang-women')) document.querySelector('.lang-women').textContent = t.women;
    
    const searchInput = document.getElementById('search');
    if(searchInput) searchInput.setAttribute('placeholder', t.searchPlaceholder);

    // ቁልፉ (Search Button) ወደ ታች እንዳይወርድ መጠኑን በራስ-ሰር የማስተካከያ ዘዴ
    const logoText = document.getElementById('logo-text');
    const catSelect = document.getElementById('cat-select');
    const searchBtn = document.getElementById('search_btn');

    if (lang === 'om' || lang === 'am') {
        if(logoText) logoText.style.fontSize = '24px'; 
        if(catSelect) catSelect.style.fontSize = '12px';
        if(searchBtn) searchBtn.style.padding = '0 15px';
    } else {
        if(logoText) logoText.style.fontSize = '33px';
        if(catSelect) catSelect.style.fontSize = 'inherit';
        if(searchBtn) searchBtn.style.padding = 'inherit';
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const savedLang = localStorage.getItem('userWebsiteLang') || 'en';
    const langSelect = document.getElementById('langSelect');
    if(langSelect) {
        langSelect.value = savedLang;
    }
    translateHeader(savedLang);
});
</script>