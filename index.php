<!-- Rotas / Chamada de métodos -->
<!-- index.php vai mandar para controllers -->

<?php

    require_once('./controllers/clientsControllers.php');

    // Se o parametro 'a' existir ele pega caso contrario ele chama 'getAll'
    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller = new clientsControllers();
    $controller->{$action}();
?>