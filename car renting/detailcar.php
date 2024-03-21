
        
        <?php
            //$bd = new PDO('mysql:host=localhost;dbname=car;charset=utf8', 'root', '');
            include "dbconnect.php";
            $query = $bd->query('select * from voiture where imatriculation=' .$_GET['imatriculation']);
            $cls = $query->fetch();
            include"detailcar.phtml";
        ?>
        