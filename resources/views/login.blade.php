<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
{!! Html::style('plantilla/css/style.css') !!}
{!! Html::style('plantilla/css/slider.css') !!}
{!! Html::script('plantilla/js/modernizr.custom.28468.js') !!}
{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
{!! Html::style('bootstrap/css/bootstrap-theme.min.css') !!}
{!! Html::script('plantilla/js/jquery.min.js') !!}
{!! Html::script('plantilla/js/jquery.cslider.js') !!}
{!! Html::script('bootstrap/js/jquery.js') !!}
{!! Html::script('bootstrap/js/bootstrap.min.js') !!}

    
    <link rel="stylesheet" href="css/normalize.css">

    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
     
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 100%; display:block; }

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow:hidden; }

body { 
  width: 100%;
  height:100%;
  font-family: 'Open Sans', sans-serif;
  background: #092756;
  background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
  background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
  background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
  background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
  background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
.login { 
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -150px 0 0 -150px;
  width:300px;
  height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
  width: 100%; 
  margin-bottom: 10px; 
  background: rgba(0,0,0,0.3);
  border: none;
  outline: none;
  padding: 10px;
  font-size: 13px;
  color: #fff;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
  border: 1px solid rgba(0,0,0,0.3);
  border-radius: 4px;
  box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
  -webkit-transition: box-shadow .5s ease;
  -moz-transition: box-shadow .5s ease;
  -o-transition: box-shadow .5s ease;
  -ms-transition: box-shadow .5s ease;
  transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>

    <div class="login">
  <h1>Iniciar sesion</h1>
    <form method="post" action="login">
      <input type="text" name="NICK" placeholder="Nombre de usuario" required="required" />
        <input type="password" name="password" placeholder="Contraseña" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Ingresar</button>
        <button type="button" data-toggle = "modal" data-target = "#myModal2" class="btn btn-success btn-block btn-large">Registrarse</button>
    </form>
</div>
    
        <script src="js/index.js"></script>

    
    
<div class = "modal fade" id = "myModal2" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel3"  aria-hidden = "true">
   
   <div class = "modal-dialog" >
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Registrar nuevo usuario
            </h4>
         </div>
         <form class="form-horizontal" id="reg" method="POST" action="" name="form1">
         <div class = "modal-body">
          <fieldset class="fieldcuerpo solacep">
          <legend style="margin-bottom: 0;">
          <h5 class = "modal-title" id = "myModalLabel">
               Datos personales
            </h5>
            </legend>
              <div id="Info" style=" float: right;"></div>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="form-group">
              <label class="col-lg-3 control-label">CI :</label>
            <div class="col-md-8">
               <input placeholder="CARNET DE IDENTIDAD" class="form-control" type="number" step="1" min="0" name="ci_usu" id="ci_usu">
            </div>
            </div>
            <div class="form-group">
             
              <label class="col-lg-3 control-label"
              >Nombre :</label>
            <div class="col-md-8">
               <input placeholder="NOMBRE DEL USUARIO" class="form-control" name="nom_usu">
            </div>
            </div>
             <div class="form-group">
              <label class="col-lg-3 control-label">Apellido Paterno :</label>
            <div class="col-md-8">
               <input placeholder="APELLIDO PATERNO" class="form-control" name="apa_usu">

            </div>
            </div>
             <div class="form-group">
              <label class="col-lg-3 control-label">Apellido Materno :</label>
            <div class="col-md-8">
               <input placeholder="APELLIDO MATERNO" class="form-control" name="ama_usu">
            </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Correo :</label>
            <div class="col-md-8">
               <input placeholder="CORREO ELECTRONICO" type="email" class="form-control" name="ema_usu">
            </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Telefono :</label>
            <div class="col-md-8">
               <input type="number" placeholder="Telefono" class="form-control" name="tel_usu">
            </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Direccion :</label>
            <div class="col-md-8">
               <textarea placeholder="" class="form-control" name="dir_usu"></textarea>
            </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Fecha de nacimiento :</label>
            <div class="col-md-8">
               <input type="date" class="form-control" name="nom_usu">
            </div>
            </div>
            
         </fieldset>
         <fieldset class="fieldcuerpo solacep">
          <legend style="margin-bottom: 0;">
          <h5 class = "modal-title">
               Datos de cuenta
            </h5>
            </legend>
            <div id="mensajevalidacion" class="mensajevalidacion"></div>
         <div class="form-group">
              <label class="col-lg-3 control-label">Usuario :</label>
            <div class="col-md-8">
               <input placeholder="CI/ NICK DE USUARIO" class="form-control" name="nic_usu" id="nic_usu">
            </div>
            </div>
             <div class="form-group">
              <label class="col-lg-3 control-label">Password :</label>
            <div class="col-md-8">
               <input placeholder="CONTRASEÑA" type="password" class="form-control" name="password">
            </div>
            </div>
             <div class="form-group">
              <label class="col-lg-3 control-label">Repita password :</label>
            <div class="col-md-8">
               <input placeholder="REPITA CONTRASEÑA" type="password" class="form-control" name="conf_pas">
            </div>
            </div>
         </fieldset>
            </div>
         <input type="hidden" id="idalm">
         <div class = "modal-footer" style="border-top: 0;">
            <button type = "button" class = "btn btn-danger" data-dismiss = "modal"><span class="glyphicon glyphicon-remove" style="font-size: 10px;"></span>
               Cancelar
            </button>
            
            <button type = "submit" class = "btn btn-primary" onclick="this.form.action='cliente/registrar';"><span style="font-size: 10px;" class="glyphicon glyphicon-plus"></span>
               Registrar
            </button>
         </div>
         </form>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->
  </body>

</html>