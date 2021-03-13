<?php
// create edited card data

$editedCardTitle = $_REQUEST['edit-card-title'];
$editedCardDescription = $_REQUEST['edit-card-description'];
$editedCardColor = strtolower($_REQUEST['edit-card-color']);
$editedCardDue = $_REQUEST['edit-card-due'];
$editedCardAll = $_REQUEST['edit-card-all'];
$editedCardNow = $_REQUEST['edit-card-now'];
$editedCardOrder = $_REQUEST['edit-card-order'];

if ($editedCardAll == '') {
    $newCardAll = null;
}
if ($editedCardNow == '') {
    $editedCardNow = null;
}
if ($editedCardOrder == '') {
    $editedCardOrder = null;
}

$editedCardContentArray = [
    "title" => $editedCardTitle,
    "description" => $editedCardDescription,
    "color" => $editedCardColor,
    "due" => $editedCardDue,
    "all" => $editedCardAll,
    "now" => $editedCardNow,
    "order" => $editedCardOrder
];

$selectedCardID = $_REQUEST['edit-card-id'];

$filePath = './database.json';
$databaseContent = json_decode(file_get_contents($filePath), true);
$databaseContent[$selectedCardID] = $editedCardContentArray;
$databaseContentJSON = json_encode($databaseContent);
if (file_put_contents($filePath, $databaseContentJSON)) {
    echo "<h4 class='blue-text'>Successfully edited one card!</h4>";
}
