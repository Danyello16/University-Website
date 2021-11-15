<link rel="stylesheet" type="text/css" href="css/css.css"/>


<?php
if (isset($_POST['login'])){{}
		$userData = simplexml_load_file("./config/user.xml");   //Aus der XML Datei
		$username = $_POST['username'];
		$password = $_POST['password'];
	
	
	
if($username == trim($userData->user[0]->username) && $password == trim($userData->user[0]->password) || ($username == trim($userData->user[1]->username) && $password == trim($userData->user[1]->password)) || $username == trim($userData->user[2]->username) && $password == trim($userData->user[2]->password)) {
    header('Location: index.php?login=success');	//Checken ob die Login-Daten gut sind
		$_SESSION['username']=$_POST['username'];
		$_SESSION['password']=$_POST['password'];
}}



if (isset($_SESSION['username']))
{

?>
<div>
    <ul class="navbar-nav ml-auto" id="navbarbuttons">
		<li class="nav-item active"><a class="nav-link" href="index.php?page=Shop">Shop</a></li>
	</ul>
</div>



<?php
    if(isset($_SESSION["warenkorb"])){
?>
    <form action="index.php?page=Warenkorb" method="post">
          <button type="submit" class="btn btn-primary btn-dark" id="produkt" name="produkt" value="9">Warenkorb</button>
    </form>
	
<?php
    }
?>

    <a href="include/logout.php" class="btn btn-primary">Logout</a>
    </ul>
    </div>
    </nav>
    </header>
	
	
	
<?php
    include_once 'include/userGreeting.php';
}else {
?>



		<form method = "post">
			<input type = "text" class = "form" name = "username" placeholder = "Username">
			<input type = "password" class = "form" name = "password" placeholder = "Password">
			<button class = "btn btn-primary btn-md btn-success" type = "submit" name = "login" style="background-color:black;">Login</button>
    </form>
    </ul>
    </div>
    </nav>
    </header>
	

<?php
}
?>

</div>
</nav>
</header>