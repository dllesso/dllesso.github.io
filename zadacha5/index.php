<?php
require "db.php";
?>

<!doctype html>
<html>
<head>
   <meta charset = "utf-8">
   <link rel="stylesheet" href="style.css"/>
   <title></title>
</head>

<body >
<div> 
  </br>
  </br>
 <center>
<svg class = "cvadrik" ><cvadrik x1="220" y1="20" stroke="black" stroke-width="2"/><text  x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small">D</text></svg>
<svg class = "cvadrik1"><cvadrik1 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small1">E</text></svg>
<svg class = "cvadrik2"><cvadrik2 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small2">M</text></svg>
<svg class = "cvadrik1"><cvadrik1 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small1">O</text></svg>
<svg class = "cvadrik2"><cvadrik2 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small2">-</text></svg>
<svg class = "cvadrik" ><cvadrik x1="220" y1="20" stroke="black" stroke-width="2"/><text  x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small">С</text></svg>
<svg class = "cvadrik1"><cvadrik1 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small1">А</text></svg>
<svg class = "cvadrik2"><cvadrik2 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small2">Й</text></svg>
<svg class = "cvadrik1"><cvadrik1 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small1">Т</text></svg>
 </center>
 </br>
 </hr>
 <center>
 <p class ="green"><em>Доброго времени суток!</br>
 Мы рады приветствовать вас на нашем DEMO сайте, где Вы найдёте много интересного.</em></p>
 </center>

 </div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
    <div class="main">
        <div class="block">
        <p class ="smoll"><em>случайное видео из сети</em></p>
        <iframe width="280" height="157" src="https://www.youtube.com/embed/zLWVFYdo5pI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> 
        <div class="block0">
            <center><p class ="smoll"><em>картинки из сети</em></p></center>
            <center><img border="0" src="imgs/smart-fortwo-34.jpg" class="foc" tabindex="1"/><img border="0" src="imgs/IMG_4282.jpg" class="foc" tabindex="1"/><img border="0" src="imgs/img_37480.jpg" class="foc" tabindex="1"/>
			<img border="0" src="imgs/s1200.jpg" class="foc" tabindex="1"/></center>
        </div>
        
		    </br> 
			<?php if( isset($_SESSION['logged_user']) ): ?> //выполнение условия авторизации
<p class ="smoll">Авторизован</br>
Приветствуем <?php echo $_SESSION['logged_user']->login; ?></p>
<hr>
<p class ="smoll"><a href="/logout.php">EXIT</a></p>
<?php else: ?>
<center><em><p class ="smoll">Вы не авторизованны</p></em></center></br> //если пользователь не авторизован
            <form action="signup.php" method="get" id="nameform">
            </form>
            <center><button type="submit" form="nameform" value="Submit"><strong>регистрация</strong></button>
            </br> 
			</br>
			<form action="login.php" method="get" id="nameform1">
            </form>
            <center><button type="submit" form="nameform1" value="Submit"><strong>вход</strong></button>
			</center>
 </div>

 <hr>
 <?php endif; ?> //окончание выполнения условия авторизации
 <center><p class ="smoll"><a href="tab.php">Список наших пользователей</a></p></center>
</div>
    </body>
</html>
