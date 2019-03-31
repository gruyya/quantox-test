<?php

class StudentsController
{
	public function index()
	{
		$students = AppContainer::getDatabase()->selectAll('students');

		return require 'views/students.view.php';
	}

	public function show($id)
	{
		$student = AppContainer::getDatabase()->selectOne('students', $id);

		$studentGrade = AppContainer::getDatabase()->selectGrades($id);

		$grades = 0;
		$allGrades = [];
		
		foreach ($studentGrade as $key) {
			array_push($allGrades, $key->grade);
		}

		$average = $this->average($allGrades);

		$result = $this->result($average, $allGrades);

		$resultJson = array(
			'id' => $student->id,
			'name' => $student->name,
			'grades' => $allGrades,
			'result' => $result,
			'average' => $average
		);


		if ($_SESSION['email'] == "csm@csm.com") {
			header('Cache-Control: no-cache, must-revalidate');
			header('Content-Type: application/json');
			echo json_encode($resultJson);
		} else {
			header('Content-type: text/xml');
			        echo '<student>';
			            echo '<id>',htmlentities($student->id),'</id>';
			            echo '<name>',htmlentities($student->name),'</name>';
			            echo '<average>',htmlentities($average),'</average>';
			            echo '<grades>';
			            foreach($allGrades as $key => $grade) {
			                echo '<grade>',htmlentities($grade),'</grade>';
			            }
			            echo '</grades>';
			            echo '<result>',htmlentities($result),'</result>';
			        echo '</student>';
		}

	}

	public function result($average, $allGrades)
	{
		if ($_SESSION['email'] == "csm@csm.com") {
			$result = ($average >= 7) ? "pass" : "fail";
			return $result;
		} else {
			$maxGrade = max($allGrades);
			$result = ($maxGrade > 8) ? "pass" : "fail";
			return $result;
		}
	}

	public function average($allGrades)
	{
		if ($_SESSION['email'] == "csm@csm.com") {
			$numberOfGrades = count($allGrades);
			$grades = array_sum($allGrades);
			$average = $grades/$numberOfGrades;

			return $average;
		} else {
			if (count($allGrades) <= 2) {
				$numberOfGrades = count($allGrades);
				$grades = array_sum($allGrades);
				$average = $grades/$numberOfGrades;
				return $average;
			} else {
				asort($allGrades);
				array_shift($allGrades);
				$numberOfGrades = count($allGrades);
				$grades = array_sum($allGrades);
				$average = $grades/$numberOfGrades;
				return $average;
			}
		}
	}

}