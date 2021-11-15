<div id='warenkorb'>



<?php
      //ausgewaehltes Produkt eine ID uebergeben + error fixed
      
	  $produktId = (int)$_POST["produkt"];
	

	
      //Daten aus der Jason Datei uebernommen
      $data = file_get_contents("include/FHTW_Merchandise/produkte.json");
      $products = json_decode($data);



      //fuer den Warenkorb ein Array erstellt, um dann spater die Produkte abzuspeichern und eine Session Variable uebergeben
      $warenkorb = array();
	  //error fixed undefined index
	  if(isset($warenkorb)){
      $warenkorb = $_SESSION["warenkorb"];


      $a = 1;
      $i = 1;
      $gesamtpreis= 0;
	
	
      foreach ($products as $produkt) {
        $id[$a] = $produkt->id;
        $titel[$a] = $produkt->titel;
        $bild[$a] = $produkt->bild;
        $preis[$a] = (float)$produkt->preis;
        $formattiert[$a] = number_format($preis[$a], 2, '.', ',');
    
	
        //Wenn das Produkt mit dem foreach ubereinstimmt, wird dieses angezeigt 
        if ($id[$a] == $produktId) {
	
	
          ?>
            <div class="container">
            <div class="row">
    <div class="col-sm">


              <h2><p><?= $titel[$a] ?></h2> </b>
              <h3><p>wurde zu ihrem Warenkorb hinzugefügt</p></h3>
              <img src="include/FHTW_Merchandise/<?php echo $bild[$a]?>" style="width:10%;">
              <div>
                <p><h4><b><?php echo $formattiert[$a];  ?></b></h4></p>
              </div>
            </div>
            </div>
            </div>
            <?php
			
			
			
            //Produkte als Array in einer Session Variable gespeichert
            $warenkorb[$produktId]++;
            if(isset($warenkorb)){
			$_SESSION["warenkorb"] = $warenkorb;
    
	
	  }}
        $a++;
      }
	  }
	  
      //Warenkorb wird angezeigt
      if (!empty($produktId)) { 
		
		
		
        ?>
          <h2>Ihr Warenkorb:</h2>
          
		  <div>
          <table class="table ">
            <thead>
              <tr>
                <th scope="col">Produkt ID</th>
                <th scope="col">Name</th>
                <th scope="col">Preis pro Stk</th>
                <th scope="col">Menge</th>
                <th scope="col">Preis</th>
                <th scope="col">Bild</th>
              </tr>
            </thead>
            <tbody>
          <?php
    
	
	
	
	
	
        //Produkte im Warenkorb werden angezeigt
	  if(!empty($warenkorb)){ 

          for(; $i < $a; $i++) {
            if (isset($warenkorb[$i])){
    
            echo "<tr>";
            echo "<td>$id[$i]</td>";
            echo "<td>$titel[$i]</td>";
            echo "<td>$formattiert[$i]</td>";
            echo "<td>$warenkorb[$i]</td>";
            //Preis wird mit der Anzhal der Produkte multipliziert
            $neupreis = $formattiert[$i] * $warenkorb[$i];
            //Gesamtpreis im Warenkorb
            $gesamtpreis = $gesamtpreis + $neupreis;
            $neupreis = number_format($neupreis, 2, '.', ',');
            echo "<td>$neupreis</td>";
            echo "<td><img class='warenpic' src='include/FHTW_Merchandise/$bild[$i]'  style='width:10%;'></td>";
            echo "</tr>";
            }
        }
		
		
                    echo "<td>Gesamtpreis: </td>";
                    $gesamtpreis = number_format($gesamtpreis, 2, '.', ',');
                    echo "<td>$gesamtpreis</td>";
      } else {
        echo "<div> <h2>Leerer Warenkorb</h2> </div>";
      }
    
    
	
	
               ?>
            </tbody>
          </table>
          </div>
		  
    
        <?php
      }
	  
    
	
	
    ?>

<form action="index.php?page=Warenkorb" method="post">
   <input type="submit" name="leeren" value="leeren"/>
</form>



<?php 
if(isset($_POST["leeren"])) {

  unset($_SESSION['warenkorb']);
  echo "<center><h3>Der warenkorb ist leer</h3></center>";
}
?>
</div>

