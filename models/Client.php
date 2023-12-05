<!-- Consulta/Regras de Negócios -->

<?php

    require_once('./configuration/connect.php');

    class ClientModel extends Connect{
        private $table;

        function __construct()
        {
            // Chama a função do construtor do connect.php|| herda
            parent::__construct();
            $this->table = 'cliente';
        }

        function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultSelect = $sqlSelect->fetchAll();
            return $resultSelect;
        }
    }
?>