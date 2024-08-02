<?php 

   /* include_once '../lib/conf/connection.php';

    $obj=new Connection(); */

    include_once '../lib/helpers2.php';
    include_once '../view/Menu/head.php';

    echo "<div class='container'>";

    include_once '../view/Menu/menu.php';
    

    if (isset($_GET['modulo'])){
        resolve();
    }

    include_once '../view/Menu/footer.php';
    

?>