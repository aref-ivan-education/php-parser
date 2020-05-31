<!DOCTYPE html>
<html lang="ru">
<head>
	<meta   charset  =  "utf-8"   >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>    Курс парсинг    </title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="/js/scripts.js"></script>
</head>
<body class="site">
	<a class="www" href=\'test.php\'   >ссылка 1</a>
	charset="eee">
	<a href=\'test.php\' class="www">ссылка 2</a>
	<p>Это <i>абзац</i>!</p>
	<div  class="rrr"   id="content"  >
		<a> Бракованная ссылка без href.</a>
		<p>Это абзац!</p>
		<a    href  =  "test.php"  >ссылка 3</a>
		<p class=\'www\'>
			<a id="test" href="http://site.ru/test.php">ссылка 4</a>
		</p>
		<p class="www">Это <b>абзац1!</b></p>
		<p class="www">Это <b>абзац2!</b></p>
		<a href="test.php">ссылка 5</a>
		<a href="test.php"   class =   "www" >ссылка 6</a>
	</div>
	<script src="/js/scripts.js"></script>
	<div  class="sidebar"  >
		<a href="test.php">ссылка 7</a>
		<a href="test.php"   class =   "www" >ссылка 8</a>
	</div>
	<div  class="pag"  >
		<ul>
			<li><a href="test.php?page=1">1</a></li>
			<li   class  =  "active"  >   <a href="test.php?page=2">2</a>   </li>
			<li><a href="test.php?page=3">3</a></li>
			<li><a href="test.php?page=4">4</a></li>
			<li><a href="test.php?page=5">5</a></li>
		</ul>
	</div>
	<div  id="footer"  > 
		<p>
			Абзац из #footer.
		</p>
		<p    class   =   "eee">
			eee внутри #footer
		</p>
		<p>
			Абзац из #footer
		</p>
	</div>
	<p class="eee">
		eee вне #footer
	</p>
</body>
</html>