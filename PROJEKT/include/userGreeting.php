<?php
$username = $_SESSION['username'];
?>
<div class="bg-primary text-light">
<h5>Willkommen <?php
            $username = $_SESSION['username'];
            $userData = simplexml_load_file("./config/user.xml");
            if ($username == 'daniel') {
                echo $userData->user[0]->firstname;
                echo $userData->user[0]->lastname;
            }
            if ($username == 'bahar') {
                echo $userData->user[1]->firstname;
                echo $userData->user[1]->lastname;
            }
            if ($username == 'admin'){
                echo $userData->user[2]->firstname;
                echo $userData->user[2]->lastname;
            }
            ?>!</h5>
</div>
