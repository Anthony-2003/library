<?php

include '../config.php';

$searchTerm = isset($_POST['bookSearch']) ? $_POST['bookSearch'] : '';
$selectedCategories = isset($_POST['categories']) ? $_POST['categories'] : array();

try {
    $query = "SELECT * FROM titulos WHERE 1=1";
    $params = array();

    if (!empty($searchTerm)) {
        $searchTermWithWildcards = '%' . $searchTerm . '%';
        $query .= " AND titulo LIKE :searchTerm";
        $params[':searchTerm'] = $searchTermWithWildcards;
    }

    if (!empty($selectedCategories)) {
        $categoryConditions = array_map(function ($index, $category) {
            $paramName = ':category' . $index;
            return "tipo = $paramName";
        }, array_keys($selectedCategories), $selectedCategories);
        $query .= " AND (" . implode(" OR ", $categoryConditions) . ")";
        foreach ($selectedCategories as $index => $category) {
            $params[':category' . $index] = $category;
        }
    }

    $statement = $dbConnection->prepare($query);

    if (!empty($params)) {
        foreach ($params as $paramName => $paramValue) {
            $statement->bindValue($paramName, $paramValue, PDO::PARAM_STR);
        }
    }

    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Retornar los resultados como JSON
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
} catch (PDOException $e) {
    echo json_encode(['error' => "Error al realizar la consulta: " . $e->getMessage()]);
}


?>
