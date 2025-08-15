<?php
session_start();

$selectedDate = $_POST['selectedDate'];

// Replace with your logic to check if the date is available in the database or using another method
$isAvailable = !isset($_SESSION['date']) || !in_array($selectedDate, $_SESSION['date']);

if ($isAvailable) {
  // Date is available
  echo "available";
  if (!isset($_SESSION['date'])) {
    $_SESSION['date'] = array();  // Initialize session array for storing registered dates (optional)
  }
  array_push($_SESSION['date'], $selectedDate);  // Add selected date to session array (optional)
} else {
  // Date is unavailable
  echo "unavailable";
}
?>