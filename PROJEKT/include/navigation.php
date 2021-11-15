					<!--Login für User und Admin-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
     




	 <!--hier beggint die Nav section-->
      <h1 id="firstword" class="text-light bg-dark">
        <a class="navbar-brand" href="index.php" ><h3>Fachhochschule Technikum Wien</h3></a>
		      <img src="images/technikum-logo.png" alt="Technikum Wien Logo" width="30%">
      </h1>
	  
      <!--First Heading-->
	  
	  
	  
    <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
      
	  
	  
	  
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" id="navbarbuttons">
		
		
		
          <!--Start von ungeordnete Liste-->
          <li class="nav-item active"><a class="nav-link" href="index.php?page=#News" >News</a></li>
		  
          <!--Liste mit relatives Linking-->
          <li class="nav-item active"><a class="nav-link" href="index.php?page=About">About</a></li>
		  

        </ul>
              <!--Ende von ungeordneten Listen-->
        <?php
			include_once 'include/login.php';
		?>
      </div>
    </nav>
	
	
			<!-- Die Links fur schnelles surfen-->
			
<center>
<div  class="container" id="quicklinks">
  <ul class="list-inline">
      <li class="list-inline-item"><a class="social-icon text-center"  href="https://www.technikum-wien.at/studium/?gclid=Cj0KCQiA9orxBRD0ARIsAK9JDxRBYw-OwJasl7ev40cs8gzD9enUCnquF9pX7agWdiwdfv23b9AQIXQaAgH7EALw_wcB%22%3EFH">Studiengang</a></li>
    <li class="list-inline-item"><a class="social-icon text-center"  href="index.php?page=#News">News</a></li>
    <li class="list-inline-item"><a class="social-icon text-center"  href="https://cis.technikum-wien.at/cis/index.html">CISseite</a></li>
	 <li class="list-inline-item"><a class="social-icon text-center"  href="https://moodle.technikum-wien.at/">Moodleseite</a></li> 
    <li class="list-inline-item"><a class="social-icon text-center"  href="https://www.technikum-wien.at/"> Das FH</a></li>  

  </ul>
</div>
</center>