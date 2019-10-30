<?php
	session_start();

	$answer1 = strtolower($_POST['answer1']);
	$answer2 = strtolower($_POST['answer2']);
	$answer3 = strtolower($_POST['answer3']);
	$answer4 = strtolower($_POST['answer4']);
	$answer5 = strtolower($_POST['answer5']);
	$answer6 = strtolower($_POST['answer6']);
	$answer7 = strtolower($_POST['answer7']);
	$answer8 = strtolower($_POST['answer8']);
	$answer9 = strtolower($_POST['answer9']);
	$answer10 = strtolower($_POST['answer10']);

	$score = 0;

	if ($answer1 == "note coffee" || $answer1 == "the note coffee") {
		$score += 100;
	}
	if ($answer2 == "doctor who") {
		$score += 100;
	}
	if ($answer3 == "chuong") {
		$score += 100;
	}
	if ($answer4 == "2h2o") {
		$score += 100;
	}
	if ($answer5 == 21 || $answer5 == "21") {
		$score += 100;
	}
	if ($answer6 == "decode") {
		$score += 100;
	}
	if ($answer7 == 60 || $answer7 == "60") {
		$score += 100;
	}
	if ($answer8 == "jason mraz") {
		$score += 100;
	}
	if ($answer9 == "mintchoco") {
		$score += 100;
	}
	if ($answer10 == "hung" || $answer10 == "hoang hung") {
		$score += 100;
	}

	$_SESSION['score'] = $score;
	header("Location: reward.php");
	exit;

?>