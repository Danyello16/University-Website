<?php

if(isset($username) && $_SESSION['username']=='admin') {
 ?>
<section  id="addform"> 
                    <div>
                    <form action="" method="post" name="News" enctype="multipart/form-data">
                    
                        
                            <div class="form-group">
                                <label for="Tittle">Tittle</label>
                                <input type="Text" id="Tittle" name="Tittle" placeholder="tittle" class="form-control"/>
                            </div>
                        
                    
                            
                            <div class="form-group">
                            <label for="Text">Text</label>
                            <textarea name="News" id="News" class="form-control" placeholder="News"></textarea>
                            </div>
                       
                            <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="Upload" name="Upload">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        
                        
                            <label for="absenden"></label>
                            <div>
                                <button name="submit" id="submit" type="submit" class="btn btn-primary">Nachricht absenden</button >
                            </div>
                         
                    </form>
                    </div>        
</section>
<!--------------------------------------------------- get new News----------------------------------------------------------------->

<?php
    if (isset($_POST['submit'])){
        
            $Tittle_post = $_POST['Tittle'];
            $News_post = $_POST['News'];
 
            
            if ($Tittle_post != null && $News_post != null){
     
            $Allowextension = array("gif","jpeg","jpg","png");
            $FileExtension = explode('.',$_FILES["Upload"]["name"]);
            $extention = end($FileExtension);
            
            if (in_array($extention,$Allowextension))
            {
               if($_FILES["Upload"]["error"] == 0)
               {
                   $timeStamp = date("ymd_His");

                    move_uploaded_file($_FILES["Upload"]["tmp_name"],"include\News\image\\$timeStamp.jpg");  

                    $Tittle = fopen("include\News\Tittle\\$timeStamp.txt","w+");
                    fwrite($Tittle, $Tittle_post );
                    fclose($Tittle);

                    $Text = fopen("include\News\Text\\$timeStamp.txt","w+");
                    fwrite($Text, $News_post );
                    fclose($Text);
                    
                    ?>

                    <div class="alert alert-success">
                    <strong>Die Informationen wurden aufgezeichnet</strong>
                    </div>

                    <?php 
                     $_POST['Tittle'] = null;
                     $_POST['News'] = null;
                     unset($_POST['submit']);
   
                }
             
            }
            else {
                
            ?>

            <div class="alert alert-danger">
            <strong>Deine file nicht Richtig</strong>
            </div>

            <?php } 
                       
            }       
           
            
            else {
                
            ?>

            <div class="alert alert-danger">
            <strong>Bitte geben Sie Alle Informationen ein</strong>
            </div>

            <?php }   
    }
?>
<?php  } ?>

<!----------------------------------------------------------------- News section ------------------------------------------------------>

<section>
    <div class="New2">
        <h2><a> NEWS </a></h2>
        <div class="row">
                <?php
                
                    $dir = 'include\News\Text';

                    // Open a directory, and read its contents
                    if (is_dir($dir)){
                        if ($dh = opendir($dir)){
                            while (($file = readdir($dh)) !== false){
                               if($file != "." && $file != ".." ){
                                
   
                              $fileTittle = fopen("include\News\Tittle\\$file",'r'); 
                              $fileNews = fopen("include\News\Text\\$file",'r');
                              
                              $FileExtension1 = explode('.',$file);
                              $extention1 = $FileExtension1[0];
                             
                                ?>
                                <div class="col-xs-12 col-sm-6 col-md-6 " id="team1">
                                
                                    <img class="card-img-top" src="include\News\image\<?php echo $extention1 .".jpg" ;?>" alt="Card image" style="width:100%">
                                    
                                    <h3>
                                        <?php
                                        while (!feof($fileTittle)){
                                            $readfile = fgets($fileTittle);
                                            echo $readfile;
                                        }?>
                                    </h3>   

                                    <p>
                                        <?php
                                        while (!feof($fileNews)){
                                            $readfile = fgets($fileNews);
                                            echo $readfile;
                                        }?>
                                    </p>
                                </div>
                                <?php
                                }       
                            }              
                        closedir($dh);
                        }
                    }
                ?>    

        </div>
    </div>
</section>
			
