<?php require_once('header.php'); ?>


<div class="col-xs-8 col-xs-offset-2 panel panel-danger">

    <div class="panel-heading">
        Error, Please check inserted data.
    </div>

    <div class="panel-footer">
        <a href="index.php" class="btn btn-danger btn-sm">Back</a>
    </div>

    <br/><br/>
    <div class="panel-body text-center">
        
        <?php
        require_once 'accessPDO.php';

        if (isset($_POST['install'])) {

            if (!empty($_POST['thehost']) && !empty($_POST['theusername']) && !empty($_POST['thedatabase']) && !empty($_POST['thepassword'])) {
                $thehost = $_POST['thehost'];
                $theusername = $_POST['theusername'];
                $thedatabase = $_POST['thedatabase'];
                $thepassword = $_POST['thepassword'];

                define('DB_HOST', $thehost);
                define('DB_PORT', '3306');
                define('DB_NAME', $thedatabase);
                define('DB_USERNAME', $theusername);
                define('DB_PASSWORD', $thepassword);

                $taken = new DbAccess();
                $cdbsql = 'CREATE DATABASE ' . DB_NAME;
                $ctsql = '';
                $taken->query($cdbsql);

                if ($taken) {
                    header("Location: index2.php");
                }
            } else {
                echo "Please complete all data fields<br>";
            }
        } else {
            echo "Please try again later, Sorry! <br>";
        }
        ?>
        
    </div>

</div>


<?php require_once('footer.php'); ?>
