<?php

function getCategories(PDO $pdo):array
{
    
    $query = $pdo->prepare("SELECT * FROM category"); 
    $query->execute(); 
    //fetch() nous permet de récupérer une seule ligne

    return $query->fetchAll(PDO::FETCH_ASSOC); 

}
?>