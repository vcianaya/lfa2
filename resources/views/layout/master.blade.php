<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>COMA y. (, .)</title>
{!! Html::style('plantilla/css/style.css') !!}
{!! Html::style('plantilla/css/slider.css') !!}
{!! Html::script('plantilla/js/modernizr.custom.28468.js') !!}
{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
{!! Html::style('bootstrap/css/bootstrap-theme.min.css') !!}
{!! Html::script('plantilla/js/jquery.min.js') !!}
{!! Html::script('plantilla/js/jquery.cslider.js') !!}
{!! Html::script('bootstrap/js/jquery.js') !!}
{!! Html::script('bootstrap/js/bootstrap.min.js') !!}
@yield('scripts')

</head>
<body>
<div class="wrap">
	<div class="main"><!-- start main -->
		<div class="grid1_of_1"><!-- start grid1_of_1 -->
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="login " href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Pedidos </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="" href="{{ url('menu') }}">Registar Menu</a></li>
            <li><a href="{{url('administrar/menu')}}">Administrar Menu</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Platos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="registrarPlato" href="#">Registar Plato</a></li>
            <li><a href="{{url('administrar/plato')}}">Administrar Plato</a></li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido(a) <?php echo Auth::user()->NICK; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="registrarPlato" href="#">Ver Perfil</a></li>
            <li><a href="{{url('logout')}}">Cerrar sesion</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		<div class="grids_of_2"><!-- start grids_of_2 -->	
@yield('cuerpo')<!--aqui todo el contenido del cuerpo-->
						<div class="clear"></div>
<!--			<div  class="grid_bottom">
				<h2>algun contenido de pie</h2>
			</div>-->
		</div><!-- end grids_of_2 -->	
		</div><!-- end grid1_of_1 -->
		<div class="grid1_of_2"><!-- start grid1_of_2 -->
			<div class="grid1_of_list1"><!-- start grid1_of_list1 -->
				<div class="grid_img">
					<img src="{{url('plantilla/images/pic1.jpg') }}"></img>
				</div>
				<div class="grid_text">
					<div class="grid_text1">
						<h4>MENU </h4>
						<h5>Coma y punto</h5>
					</div>
					<ul class="list1">
						<li class="active"><a href="#">Sajta <span>25 bs</span> </a></li>
						<li><a href="#">Pollo Dorado<span>15 bs</span> </a></li>
						<li class="active"><a href="#">green salad<span>2pcs</span> </a></li>
						<li><a href="#">onions <span>0,5lb</span> </a></li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
			<div class="grid1_of_list2"><!-- start grid1_of_list2 -->
				<div class="grid1_of_list">
					<img src="{{url('plantilla/images/pic2.jpg') }}"></img>
					<h4>Plato mas vendido :</h4>
					<h4>Sajta</h4>
				</div>
				<ul class="list2">
					<li><p>Ventas</p><span>230</span></li>
					<li><p>Porcentaje</p> <span>52%</span></li>
					<div class="clear"></div>
				</ul>
			</div><!-- end grid1_of_list2 -->
		</div><!-- end grid1_of_2 -->
	</div><!-- end main -->
</div>
</body>
</html>