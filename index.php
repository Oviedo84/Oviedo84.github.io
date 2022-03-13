<?php
    //print_r(PDO::getAvailableDrivers());

    $dbname = "prueba";
    $user = "root";
    $pass = "password123#@!";

    try{
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $pass);
    } catch(PDOexception $e){
        echo $e->getMessage();
    }

    /*class cliente{
        public $nombre;
        public function __construct($nombre)
        {
            $this->nombre = $nombre;
        }
    }

    $cliente = new cliente("nombre de prueba");
    $stmt = $dbh->prepare("INSERT INTO cliente(nombre) VALUES (:nombre)");
    $stmt->execute((array) $cliente);*/

    /*$stmt = $dbh->prepare("SELECT * FROM cliente");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    echo "<br> FETCH_OBJ </br>";
    while($row = $stmt->fetch()){
        echo "Nombre: " . $row->nombre . "<br>";
    }*/

    $stmt = $dbh->prepare("SELECT * FROM cliente");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    echo "<br> FETCH_ASSOC </br>";
    while($row = $stmt->fetch()){
        echo "Nombre: " . "{$row["nombre"]}" . "<br>";
    }

    /*try{
        $dbh->beginTransaction();
        $dbh->query("insert into cliente(nombre) values ('valor')");
        $dbh->commit();
    } catch(Exception $e){
        $dbh->rollback();
    }*/
?>