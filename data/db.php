<?php

class DbManage {
    private static $instance = null;
    private $dbConex;

    private function __construct($user, $password, $dataBase) {
        $server = "localhost";
        $dns = "mysql:host={$server};dbname={$dataBase}";

        try {
            $this->dbConex = new PDO($dns, $user, $password);
            $this->dbConex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error en la conexión a la base de datos: " . $e->getMessage());
        }
    }

    public static function getInstance($user, $password, $dataBase) {
        if (self::$instance === null) {
            self::$instance = new DbManage($user, $password, $dataBase);
        }

        return self::$instance;
    }

    public function getConnection() {
        return $this->dbConex;
    }
}

?>