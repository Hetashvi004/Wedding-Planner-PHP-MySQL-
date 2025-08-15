<?php 
@include 'connection.php';
    
$disabledDatesJson = '['; // Start JSON array
$isFirst = true;
$sql = "SELECT date FROM tblbook";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $timestamp = strtotime($row["date"]);
    if (!$isFirst) {
      $disabledDatesJson .= ','; // Add comma after first element
    }
    $disabledDatesJson .= $timestamp;
    $isFirst = false;
  }
}

$disabledDatesJson .= ']'; // End JSON array

echo $disabledDatesJson; // Output the JSON data
?>