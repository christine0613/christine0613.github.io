<!DOCTYPE html>
<html>
<head>
	<title>Teddy 해인 Do - Quiz</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="https://kit.fontawesome.com/129e7cf8b7.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="header-container">
			<header class="page-header">
				<div class="header-left"></div>
				<div class="header-right"></div>
			</header>
		</div>
		<div class="content-container">
			<div class="notice">
				<h1>ĐIỀN FORM BẰNG TIẾNG VIỆT KHÔNG DẤU!</h1>
			</div>
			<div class="form-container">
				<form action="processQuiz.php" method="POST">
					<div class="form-group">
						<div class="quiz-question">
							<label>1. Ảnh này chụp ở đâu?</label>
						</div>
						<img src="pictures/1.jpg">
						<div class="quiz-answer">
							<input type="text" name="answer1" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="quiz-question">
							<label>2. Ảnh này được lấy từ poster của phim gì?</label>
						</div>
						<img src="pictures/2.jpg">
						<div class="quiz-answer">
							<input type="text" name="answer2" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="quiz-question">
							<label>3. Điền vào chỗ trống</label>
						</div>
						<div class="quiz-answer">
							Gián <input type="text" name="answer3" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="quiz-question">
							<label>4. Cân bằng phương trình? <span>H<sub>2</sub>SO<sub>4</sub> + 2NaOH <i class="fas fa-arrow-right"></i> ? + Na<sub>2</sub>SO<sub>4</sub></span></label>
						</div>
						<div class="quiz-answer">
							<input type="text" name="answer4" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="quiz-question">
							<label>5. Hội chứng Down bị gây ra bởi NST gì?</label>
						</div>
						<div class="quiz-answer">
							<input type="text" name="answer5" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="quiz-question">
							<label>6. Tên escape game chúng ta từng chơi?</label>
						</div>
						<img src="pictures/3.jpg">
						<div class="quiz-answer">
							<input type="text" name="answer6" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="quiz-question">
							<label>7. Cho hình chóp tứ giác đều S.ABCD có cạnh đáy bằng <i>a</i>, cạnh bên bằng <i>(a căn 5)/2</i>. Gọi O là tâm của ABCD. Tính góc giữa mặt bên (ABC) và mặt đáy (ABCD)?</label>
						</div>
						<div class="quiz-answer">
							<input type="number" name="answer7" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="quiz-question">
							<label>8. Ca sĩ thể hiện bài hát được sử dụng trong video tao làm chúc mừng sinh nhật mày năm ngoái?</label>
						</div>
						<audio controls>
							<source src="bdaysong.mp3" type="audio/mpeg">
						</audio>
						<div class="quiz-answer">
							<input type="text" name="answer8" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="quiz-question">
							<label>9. Đồ uống yêu thích của tao là gì?</label>
						</div>
						<div class="quiz-answer">
							<input type="radio" name="answer9" class="form-control-radio" value="Cappuccino" required>Cappuccino
							<input type="radio" name="answer9" class="form-control-radio" value="mintchoco" required>Mint Chocolate
							<input type="radio" name="answer9" class="form-control-radio" value="latte" required>Latte
							<input type="radio" name="answer9" class="form-control-radio" value="mochalatte" required>Mocha Latte
						</div>
					</div>
					<div class="form-group">
						<div class="quiz-question">
							<label>10. Ai là người gửi tin nhắn này?</label>
						</div>
						<img src="pictures/10.png">
						<div class="quiz-answer">
							<input type="text" name="answer10" class="form-control" required>
						</div>
					</div>
					<input type="submit" name="submit" value="Nộp bài!">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
