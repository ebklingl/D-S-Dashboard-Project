<?php

require '../../app/common.php';

$taskId = intval()$_GET['taskId'] ?? 0);

if ($taskId < 1) {
  throw new Exception('Invalid Task ID');
}


// 1. Go to the database and get all word associated with the $taskId
$workArr = Work::getAllWorkByTask($taskId);

// 2. Convert to JSON
$json = json_encode($workArr);

// 3. Print
echo $json;
