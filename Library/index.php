<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="wrapper">
		<header class="header clearfix">
			<a href="#" class="logo">БИБЛИОТЕКА</a>
		</header>
		<div class=""></div>
		<main class="main">
			<div class="content">
				<nav>
					<ul>
						<li><a href="index.php" class="active">NEWS</a></li>
						<li><a href="HISTORY.php"  >HISTORY</a></li>
						<li><a href="SUBSCRIPTIONS.php">SUBSCRIPTIONS</a></li>
						<li><a href="NEW ARRIVALS.php">NEW ARRIVALS</a></li>
						<li><a href="entrance.html">ENTER</a></li>
					</ul>


					<img src="content/image1.jpeg" alt="" width="100%">

					<?
					require_once 'connect.php';
					$query = "SELECT * FROM content";

					$result = mysqli_query($connect, $query) or die(mysqli_error($link));

					for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
					?>
					<!-- отображение контента -->

					<div class="show">
					<?
					//отображение контента из бд

					require_once 'connect.php';

					$query = mysqli_query($connect, "SELECT * FROM content WHERE `content`.`pagename` = 'NEWS'");

					while($articleee = mysqli_fetch_assoc($query))
					{
						echo '<h1>'.$articleee['name'].'</h1>'.'<br>' ;

						echo '<p>'.$articleee['text'].'</p>'.'<br>' ;

						echo '<em>'.$articleee['date'].'</em>'.'<br>'.'<br>'.'<br>' ;

					}
					?>








					<br>
					<br>
					</div>


				</nav>
			</div>
		</main>
		<footer>
                <p>Copyright &copy; 2021, designed by <a href="#">Волков Андрей Владимирович</a></p>
        </footer>
	</div>
</body>
</html>