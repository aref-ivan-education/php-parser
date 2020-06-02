<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Курс парсинг</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="/js/scripts.js"></script>
</head>
<body>
	<div id="menu">
		<ul>
			<li><a href="/index.php">Главная <img src="icon1.png"></a></li>
			<li><a href="/news.php"  class="active">Новости</a></li>
			<li><a href="/contacts.php">Контакты <img src="icon2.png"></a></li>
			<li><a href="/company.php">О компании</a></li>
			<li><a href="/map.php">Как добраться <img src="icon3.png"></a></li>
		</ul>
	</div>
	<div   id="content"  >
		<h1>О компании</h1>
		<script   src="/js/scripts.js"  ></script>
		<div>
			<h2> <a href="">Новости</a> </h2>
			<img src="image1.png">
			<p>Lorem ipsum <b>dolor sit amet</b>, consectetur <span class="test" style="color: red">adipiscing elit</span>. Cras sollicitudin ultrices dictum. Nullam non diam vestibulum, interdum nibh quis, sollicitudin sem. Vivamus sit amet sagittis massa. Cras aliquet lacus at interdum blandit. Quisque quis tellus nunc. Cras at nisi laoreet, suscipit nibh quis, pellentesque diam. </p>
			<p>Pellentesque habitant morbi <span class="test">tristique</span> senectus et netus et malesuada fames ac turpis egestas. Etiam a bibendum orci. Sed fermentum consequat mauris adipiscing condimentum. Phasellus id convallis nunc. Nullam vel mollis purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras nec neque vel risus accumsan sollicitudin quis ut velit. Fusce et libero hendrerit, accumsan enim non, dictum eros. Proin sem justo, porta id magna quis, consequat scelerisque urna. </p>
			<p class="more"><a href="news.php">подробнее...</a></p>
		</div>
		<div>
			<h2><a href="">О компании</a></h2>
			<img   width="200px" src=\'../image2.png\'  >
			<p class="www">Sed non ante vitae nunc lacinia tristique nec quis nisl. Integer a fringilla elit, vitae accumsan massa. Fusce ac tempor est. In ultricies mi sit amet nunc posuere eleifend. Cras vulputate hendrerit sodales. Mauris lectus magna, feugiat vitae sagittis id, suscipit ac dui. Sed a orci a ipsum iaculis gravida. Integer nec fringilla turpis. Sed dapibus turpis rutrum lacus mattis egestas. Aliquam viverra libero vitae mi pellentesque lobortis. Donec varius elit in aliquam consectetur. </p>
			<p style="color: red;" class="www"> Sed fermentum consequat mauris adipiscing condimentum. Phasellus id convallis nunc. Nullam vel mollis purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras nec neque vel risus accumsan sollicitudin quis ut velit. Fusce et libero hendrerit, accumsan enim non, dictum eros. Proin sem justo, porta id magna quis, consequat scelerisque urna. </p>
			<p class="more"><a href="about.php">подробнее...</a></p>
			<p class="test more"><a href="about.php">подробнее...</a></p>
			<p class="more www"><a href="about.php">подробнее...</a></p>
			<p class="test more www"><a href="about.php">подробнее...</a></p>
		</div>
		<script>
			var i = 5;
			alert(i);
		</script>
		<div>
			<h2>  <a href   =   "test.php">Интересное</a>  </h2>
			<img  src  = "http://google.ru/image3.png"  >
			<img src="http://google.ru/image4.png"/>
			<p>Mauris et metus vitae lectus interdum auctor non sit amet odio. Morbi laoreet feugiat dapibus. Nulla ultricies sollicitudin est id blandit. Fusce justo nisl, tristique id fringilla ut, consectetur eu purus. Curabitur facilisis ipsum augue, vel varius turpis malesuada eget. Pellentesque et ante vestibulum, semper lorem quis, bibendum urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean hendrerit tortor a cursus fermentum. Nunc suscipit sem laoreet interdum ullamcorper. Fusce volutpat orci ut ante aliquam, vitae cursus nulla dignissim. Fusce dignissim suscipit suscipit. </p>
			<p>Etiam a bibendum orci. Sed fermentum consequat mauris adipiscing condimentum. Phasellus id convallis nunc. Nullam vel mollis purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras nec neque vel risus accumsan sollicitudin quis ut velit. Fusce et libero hendrerit, accumsan enim non, dictum eros. Proin sem justo, porta id magna quis, consequat scelerisque urna. </p>
			<p   class=\'more\' ><a href="interesting.php">подробнее...</a></p>
		</div>
	</div>
	<div  id="footer"  > 
	</div>
</body>
</html>