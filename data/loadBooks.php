<?php
include 'config.php';

$searchTerm = isset($_POST['bookSearch']) ? $_POST['bookSearch'] : '';
$selectedCategories = isset($_POST['categories']) ? $_POST['categories'] : array();

try {
    $query = "SELECT * FROM titulos WHERE 1=1";
    $params = array();

    if (!empty($searchTerm)) {
        $query .= " AND titulo LIKE ?";
        $params[] = '%' . $searchTerm . '%';
    }

    if (!empty($selectedCategories)) {
        $categoryConditions = array_map(function ($category) {
            return "tipo = ?";
        }, $selectedCategories);
        $query .= " AND (" . implode(" OR ", $categoryConditions) . ")";
        $params = array_merge($params, $selectedCategories);
    }

    $statement = $dbConnection->prepare($query);
    $statement->execute($params);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

 
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
} catch (PDOException $e) {
    echo json_encode(['error' => "Error al realizar la consulta: " . $e->getMessage()]);
}
?>
