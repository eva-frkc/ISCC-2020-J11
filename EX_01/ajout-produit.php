<?php
function connect_to_database()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "BaseTest01";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Vous êtes connectés <br>";
        

        $sql = "INSERT INTO
produit
VALUES(8,'T-shirt noir','T-shirt coton de couleur noire',15.50,10)";
        $pdo->exec($sql);
        echo 'Entrée ajoutée dans la table';
    } catch (PDOException $e) {
        echo "Erreur" . $e->getMessage();
    }
}
connect_to_database();
?>