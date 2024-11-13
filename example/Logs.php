<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Virdiggg\LogParserCI3\MYViewer;

try {
    $logs = new MYViewer();
    $logs->setPath(__DIR__);

    $date = '2024-11-13';
    $logs->setName('log-' . $date);
    $result = $logs->getLogs();

    echo json_encode($result);
    return;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}