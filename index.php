<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Кинопоиск</title>
    <style type="text/css">
    	body {
    		background-color: #e6e6e6
    	}
    	.main {
    		background-color: white;
    		
    		margin-top: 50px;
    	}
    	.main h3 {
    		color: #f60;;
    	}
    </style>	
  </head>
  <body>
    <div class="" style="height: 100px; background-color: #444444">
    	<div class="container">
    		<div class="row">
	    		<div class="col-2">
	    			<img src="img\logo.png" class="w-100">
	    		</div>
	    		<div class="col-6 pt-4">
	    			<input type="" name="" placeholder="поиск на сайте" class="w-100">
	    		</div>
	    		<div class="col-4 pt-4 text-right" style="color: #c7c7c7">
	    			<h3>Войти</h3>
	    		</div>
    		</div>
    	</div>
    	<div class="col-6 mx-auto shadow-lg main px-0">
    		<h3 class="text-center bg-success p-2">5 лучших фильмов 2019</h3>
    		
    		<div class="text-center"> <!-- Див для списка фильмов -->
                <?php
                    $films = [
                        ["id" => "1)", "name" => "В метре друг от друга", "img" => "1.jpg", "dis" => "Пространство, в котором они существуют, диктует жестокое условие – влюбленные должны находиться не ближе метра друг от друга, им недоступно даже прикосновение. Но истинная любовь не знает границ, и чем сильнее чувства, тем больше соблазн нарушить правила…"],
                        ["id" => "2)", "name" => "Идеальное свидание", "img" => "2.jpg", "dis" => "Старшеклассник по имени Брукс создает мобильное приложение, с помощью которого любая девушка может арендовать его в качестве бойфренда."],
                        ["id" => "3)", "name" => "Drive", "img" => "3.jpg", "dis" => "Автогонщик знакомится с организаторами уличных гонок . Вскоре он понимает, что ввязался в опасную игру грабителей банков и коррумпированных чиновников."],
                        ["id" => "4)", "name" => "В высокой траве", "img" => "4.jpg", "dis" => "Кэл с беременной сестрой Бэкки направляются на машине в Сан-Диего, где девушка сможет отдать ребёнка на усыновление. Остановившись из-за тошноты Бэкки на обочине рядом с заросшим полем, ребята слышат крики о помощи - мальчик заблудился в высокой траве и не может выбраться. Без особых раздумий оба отравляются спасать малыша, не догадываясь, что найти дорогу назад будет очень непросто."],
                        ["id" => "5)", "name" => "Хижина Любви", "img" => "5.jpg", "dis" => "Городская девушка выигрывает отель в новозеландской деревне и вместе с подрядчиком Джейком Тейлором пытается привести его в порядок."]
                    ];
                    // $id = ["1", "2", "3"];
                    // $name = ["В метре друг от друга", "Идеальное свидание", "Drive"];
                    // $img = ["1.jpg", "2.jpg", "3.jpg"];
                    // $des = ["Пространство, в котором они существуют, диктует жестокое условие – влюбленные должны находиться не ближе метра друг от друга, им недоступно даже прикосновение. Но истинная любовь не знает границ, и чем сильнее чувства, тем больше соблазн нарушить правила…", "Старшеклассник по имени Брукс создает мобильное приложение, с помощью которого любая девушка может арендовать его в качестве бойфренда.", "Автогонщик знакомится с организаторами уличных гонок . Вскоре он понимает, что ввязался в опасную игру грабителей банков и коррумпированных чиновников."];

                    for ($i=0; $i < 5; $i++) { 
                       // echo "<h2>$id[$i]" . ' ' . "$name[$i]</h2>";
                       // echo "<img src='$img[$i]'>";
                       // echo "<p>$des[$i]</p>";

                    
                        echo "<h2>" . $films[$i]["id"] . ' ' . $films[$i]["name"]. "</h2>";
                        echo "<img src='". $films[$i]["img"] ."' class='col-4'>";
                        echo "<p class='mr-5 ml-5'> ". $films[$i]["dis"] ." </p>";
                    }
                ?>
	 
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>