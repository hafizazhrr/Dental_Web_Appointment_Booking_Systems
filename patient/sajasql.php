<?php
error_reporting(0);
require '../assets/conn/dbconnect.php';


$sql = "SELECT appoinment.patientIC, doctorschedule.doctorname as scheduleId
							FROM appoinment
							INNER JOIN doctorschedule on appoinment.scheduleId=doctor.scheduleId";

$results = $db -> query($sql);

if ($results->num_rows) {
	while ($row = $results -> fetch_object()) {
		echo "{$row->patientIC} ({$row->scheduleId})";
	}

} else {
	echo 'No results';
}
