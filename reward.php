<?php
	session_start();

	$score = $_SESSION['score'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teddy 해인 Do</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="https://kit.fontawesome.com/129e7cf8b7.js" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Mày có <?= $score?> điểm!</h1>
	<button class="draw-btn">Quay quà đi mày</button>
	<div id="show-content1"></div>
	<div id="show-content2"></div>
	<div id="show-confirm"></div>

	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$('.draw-btn').click(function(){
			let small = ['01 cốc trà sữa', '01 gói bim bim', '01 bát bún', '01 đĩa cơm rang', '15 phút hát karaoke ở booth'];
			let medium = ['01 cốc trà sữa', '01 gói bim bim', '01 bát bún', '01 đĩa cơm rang', '15 phút hát karaoke ở booth', '30 phút hát karaoke ở booth', '01 mặt nạ đất sét Aztec', '01 hộp mặt nạ My Beauty Diary'];
			let big = ['01 cốc trà sữa', '01 gói bim bim', '01 bát bún', '01 đĩa cơm rang', '15 phút hát karaoke ở booth', '30 phút hát karaoke ở booth', '01 mặt nạ đất sét Aztec', '01 hộp mặt nạ My Beauty Diary', '01 chai sữa tắm', '01 hộp chocolate', '01 thỏi son'];
			let score = "<?php echo $score; ?>";

			console.log(score);

			if (0 < score && score < 300){
				let item = small[Math.floor(Math.random()*small.length)];
				document.getElementById("show-content1").innerHTML = item;
				document.getElementById("show-confirm").innerHTML = "Để confirm nhận quà hãy screenshot màn hình này và gửi cho tao";
			} else if (301 < score && score < 700){
				let item = medium[Math.floor(Math.random()*medium.length)];
				document.getElementById("show-content1").innerHTML = item;
				document.getElementById("show-confirm").innerHTML = "Để confirm nhận quà hãy screenshot màn hình này và gửi cho tao";
			} else if (701 < score && score < 1000){
				let item1 = big[Math.floor(Math.random()*big.length)];
				let item2 = big[Math.floor(Math.random()*big.length)];
				document.getElementById("show-content1").innerHTML = item1;
				document.getElementById("show-content2").innerHTML = item2;
				document.getElementById("show-confirm").innerHTML = "Để confirm nhận quà hãy screenshot màn hình này và gửi cho tao";
			};
		});
	</script>
</body>
</html>