<!-- Conexão com Banco de Dados -->
<?php

    define('HOST','localhost');
    define('DATABASENAME','dreamgarage');
    define('USER','root');
    define('PASSWORD','');


    class Connect {
        protected $connection;

        function __construct()
        {
            $this->connectionDatabase();
        }

        function connectionDatabase()
        {
            try
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            }
            catch (PDOException $e)
            {
                echo "ERROR: ".$e->getMessage();
                die();
            }
        }
    }
?>