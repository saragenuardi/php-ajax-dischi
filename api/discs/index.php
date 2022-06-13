<?php require __DIR__ . '/../../includes/data/discs.php';

header('Content-Type: application/json');
echo json_encode($discs);