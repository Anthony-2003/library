<?php
include 'config.php';

$searchTerm = isset($_POST['authorSearch']) ? $_POST['authorSearch'] : '';

try {
    $query = "SELECT a.*, f.fotografia FROM autores AS a INNER JOIN fotografias AS f ON a.id_autor = f.id_autor";
    
    if (!empty($searchTerm)) {
        $query .= " AND nombre LIKE '%$searchTerm%'";
    }

    $result = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result, JSON_UNESCAPED_UNICODE);

} catch (PDOException $e) {
    echo json_encode(['error' => "Error al realizar la consulta: " . $e->getMessage()]);
}

?>
