<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Конкотенатор</title>
	<link rel="stylesheet" href="pages/landing.css">
</head>
<body>
	<div class="work_form">	
		<form method="post" action="index.php?action=engine">
			<div class="area_work_form">
				<span>Позиция в базе</span><input id="position" type="number" name="position">
			</div>

			<div class="area_work_form">
				<span>Инфо для базы</span><textarea id="content" name="content"></textarea>
			</div>

			<input class="submit_key" type="submit" value="Инекция"><!--отправка гет и пост-->
		</form>
	<div>	
</body>
</html>