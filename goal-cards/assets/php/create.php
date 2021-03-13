<?php

// get user input, turn it into array

$newCardTitle = $_REQUEST['create-new-card-title'];
$newCardDescription = $_REQUEST['create-new-card-description'];
$newCardColor = strtolower($_REQUEST['create-new-card-color']);
$newCardDue = $_REQUEST['create-new-card-due'];
$newCardAll = $_REQUEST['create-new-card-all'];
$newCardNow = $_REQUEST['create-new-card-now'];
$newCardOrder = $_REQUEST['create-new-card-order'];

if ($newCardAll == '') {
    $newCardAll = null;
}
if ($newCardNow == '') {
    $newCardNow = null;
}
if ($newCardOrder == '') {
    $newCardOrder = null;
}

$newCardContentArray = [
    "title" => $newCardTitle,
    "description" => $newCardDescription,
    "color" => $newCardColor,
    "due" => $newCardDue,
    "all" => $newCardAll,
    "now" => $newCardNow,
    "order" => $newCardOrder
];

// add new card info to database.json

$filePath = './database.json';
if (file_exists($filePath)) {
    $databaseContent = json_decode(file_get_contents($filePath), true);
    $newCardID = count($databaseContent);
    $databaseContent[] = $newCardContentArray;
    $databaseContentJSON = json_encode($databaseContent);
    file_put_contents($filePath, $databaseContentJSON);
} else {
    $newCardID = 0;
    $initialContent = [$newCardContentArray];
    $initialContentJSON = json_encode($initialContent);
    file_put_contents($filePath, $initialContentJSON);
}

// create new folder

$newDirectoryPathName = "./$newCardID";

$exploded = explode('/', $_SERVER['REQUEST_URI']);
$stepsToRoot = count($exploded) - 2;
$prefixIshPath = '';
for ($i = 0; $i < $stepsToRoot; $i++) {
    $prefixIshPath = $prefixIshPath . '../';
}

echo "Created new directory " . $newDirectoryPathName;
$indexPHPFileToBeCopied = $prefixIshPath . "goal-cards/index.php";
$createPHPFileToBeCopied = $prefixIshPath . "goal-cards/create.php";
$editPHPFileToBeCopied = $prefixIshPath . "goal-cards/edit.php";
$deletePHPFileToBeCopied = $prefixIshPath . "goal-cards/delete.php";

$successCounter = [];
if ((mkdir($newDirectoryPathName))) {
    echo "<p>Successfully created new directory!</p>";
    $successCounter[] = 1;
} else {
    echo "<p>failed to create new directory...</p>";
}

if (copy($indexPHPFileToBeCopied, "$newDirectoryPathName/index.php")) {
    echo "<p>Successfully created new index.php file!</p>";
    $successCounter[] = 1;
} else {
    echo "<p>failed to create new index.php file...</p>";
}

if (copy($createPHPFileToBeCopied, "$newDirectoryPathName/create.php")) {
    echo "<p>Successfully created new create.php file!</p>";
    $successCounter[] = 1;
} else {
    echo "<p>failed to create new create.php file...</p>";
}

if (copy($editPHPFileToBeCopied, "$newDirectoryPathName/edit.php")) {
    echo "<p>Successfully created new edit.php file!</p>";
    $successCounter[] = 1;
} else {
    echo "<p>failed to create new write.php file...</p>";
}

if (copy($deletePHPFileToBeCopied, "$newDirectoryPathName/delete.php")) {
    echo "<p>Successfully created new delete.php file!</p>";
    $successCounter[] = 1;
} else {
    echo "<p>failed to create new delete.php file...</p>";
}

if (count($successCounter) == 5) {
    echo "<h4 class='blue-text'>Everything done!</h4>";
}
