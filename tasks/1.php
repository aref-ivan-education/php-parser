<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Курс парсинг</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="/js/scripts.js"></script>
</head>
<body>
	<a class="www" href=\'test.php\'   >ссылка 1</a>
	<a href=\'test.php\' class="www">ссылка 2</a>
	<p>Это абзац!</p>
	<a    href  =  "test.php"  >ссылка 3</a>
	<p>
		<a id="test" href="http://site.ru/test.php">ссылка 4</a>
	</p>
	<p class="www">Это <b>абзац!</b></p>
	<a href="test.php">ссылка 5</a>
	<a href="test.php"   class =   "www" >ссылка 6</a>
</body>
</html>
$regID="#<div\s+?.*?id=\"content\"[^>]*?>(.+?)</div>#su";
