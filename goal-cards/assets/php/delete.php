<?php
// delete card data from database.json

$selectedCardID = $_REQUEST['delete-card-id'];
echo "Card ID : " . $selectedCardID;

$filePath = './database.json';
$dirPath = "./$selectedCardID";
$databaseContent = json_decode(file_get_contents($filePath), true);
$databaseContent[$selectedCardID]['title'] = 'empty card';
unset($databaseContent[$selectedCardID]['description']);
unset($databaseContent[$selectedCardID]['color']);
unset($databaseContent[$selectedCardID]['all']);
unset($databaseContent[$selectedCardID]['now']);
unset($databaseContent[$selectedCardID]['order']);
$databaseContentJSON = json_encode($databaseContent);
$successCount = [];
if (file_put_contents($filePath, $databaseContentJSON)) {
    $successCount[] = 1;
    echo "<p>Successfully deleted one item from database.json file!</p>";
}

// delete folder related to the target card
$deleteFolders = system("rm -rf {$dirPath}");
if ($deleteFolders == "" || $deleteFolders != false) {
    $successCount[] = 1;
    echo "<p>Successfully deleted folders related to the target card!</p>";
}

if (count($successCount) == 2) {
    echo "<h4 class='red-text'>Successfully Deleted Card and Folders!</h4>";
}
