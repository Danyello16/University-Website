<link rel="stylesheet" type="text/css" href="css/css.css"/>



<!--Formular mit Eingabe und einer Auswahlmöglichkeit-->



            <div class="hintergrundbild2">
            <div class="container">
            <section id="kontakt">
                <h2 class="überschrift"><center>KONTAKT</center></h2>
                <div class="trennpunkte"></div>
                <form>
                    <div class="class1">
                    <label for="anrede">Anrede:</label>
                    </div>
                    <div class="class2">
                    <select id="anrede" style="width: 20%;" name="anrede">
                        <option value="Herr">Herr</option>
                        <option value="Frau">Frau</option>
                        <option value="nichtangeben">nicht angeben</option>
                    </select>
                    </div>
                    
                    <div class="class1">
                    <label for="name">Name:</label>
                    </div>
                    <div class="class2">
                    <input id="name" style="width: 40%;" name="name" type="text" placeholder="Vorname Nachname">
                    </div>
                    
                    <div class="class1">
                    <label for="email">E-mail:</label>
                    </div>
                    <div class="class2">
                    <input id="email" style="width: 40%;" name="email" type="text" placeholder="name@example.com">
                    </div>
                    
                    <div class="class1">
                    <label for="nachricht">Nachricht:</label>
                    </div>
                    <div class="class2">
                    <textarea id="nachricht" style="width: 40%; height: 20%;" name="nachricht"></textarea>
                    </div>
					<br>
					<button onclick="location.href='mailto:danyellosan@gmail.com';" style="width: 65px; height: 35px;" >Send Mail</button>
                </form>
            </section>
            </div>
            </div>