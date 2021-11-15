
<link rel="stylesheet" type="text/css" href="css/css.css"/>

<?php

    $url = 'include/FHTW_Merchandise/produkte.json';     // Pfad auf JSON file
    $data = file_get_contents($url);    // Die Contents in einer Variable setzen
    $products = json_decode($data);   // Decodierung der Feed

    ?>

            <div class="container">
            <section id="shop">
                <h2 class="überschrift">Shop</h2>
                <div class="row">

                <?php

                //jedem Objekt eine eigene Variable zulegen
                foreach ($products as $produkt) {
                $id = $produkt->id;
                $titel = $produkt->titel;
                $bild = $produkt->bild;
                $beschreibung = $produkt->beschreibung;
                $preis = $produkt->preis;
                $formattiert = number_format($preis, 2, '.', ',');

                ?>
                
                <div class="col-sm6 col-md-4 col-lg-4">
                    <h3><?= $titel ?></h3>
                    <img id="produkte" src="include/FHTW_Merchandise/<?php echo $bild ?>">
                    <p><h4><?php echo $beschreibung;   ?></h4></p>
                    <p><h4><b>Preis: <?php echo $formattiert; ?>€</b></h4></p>

                <!--Bestell Button für User sichtbar (auschgeschlossen Admin)-->
                <?php

                if($_SESSION['username']!='admin') {
                      
                ?>
                
                <form action="index.php?page=Warenkorb" method="post">
                  <button type="submit" class="btn bg-primary text-light" id="produkt" name="produkt" value="<?php echo $id; ?>"><h4>Im Korb hinzufugen</h4></button>
                </form>

                <?php 
                  } 
                ?>
                </div>
              
              <?php 
                }
              ?>

              </div>
            
            </div>
          
          </section>
          </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>