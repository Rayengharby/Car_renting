
  <?php
  session_start();
  if(!isset($_SESSION['id'])){
    header("location:./authentification.php");
    exit();
  }
       // $bd = new PDO('mysql:host=localhost;dbname=car;charset=utf8', 'root', '');
       include"dbconnect.php";
        $query = $bd->query('select * from voiture');
        //var_dump($query);
        $cls = $query->fetchAll();
        // Utilisation de PDO::FETCH_ASSOC pour obtenir un tableau associatif
        // au lieu d'un tableau indexé
        //var_dump($cls);
        include"book.phtml";
        ?>

    