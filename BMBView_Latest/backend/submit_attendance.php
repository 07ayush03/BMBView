<?php
// Process attendance submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $dept = $_POST['department'] ?? '';
  $emp  = $_POST['employee_id'] ?? '';
  $date = $_POST['date'] ?? '';
  $status = $_POST['status'] ?? '';
  echo "Attendance submitted for $emp in $dept on $date as $status.";
}
?>