<?php

include '../assets/conn/dbconnect.php';
session_start();
//delete
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sql = "DELETE FROM doctorschedule WHERE scheduleId = '$id';";
  $result = mysql_query($sql);

  //check data deleted or not
if ($result) {
  echo "data deleted";
  header("location: addschedule.php?deleted");
}
else
echo "data Not Deleted";
}
?>