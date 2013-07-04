<div class="container">
    <div class="row">
        <br>
	<div class="span2"><img id="logo" src="../uploads/logo8.png"></div>
	<div class="span10">
            <form action="" id="login-form">
		<fieldset>
            	<span class="text">
                    <input type="text" value="Usuario" onFocus="if(this.value=='Username'){this.value=''}" onBlur="if(this.value==''){this.value='Username'}">
		</span>
		<span class="text">
                    <input type="password" value="Password" onFocus="if(this.value=='Password'){this.value=''}" onBlur="if(this.value==''){this.value='Password'}">
		</span>
		<a href="#" class="btn btn-primary" onClick="document.getElementById('login-form').submit()"><span><span>Login</span></span></a>
		<span class="links"><a href="#"><small>¡Olvide mi contraseña!</small></a><br/></span>
		</fieldset>
            </form>
        </div>
		
	<div class="row"><!---Barra de navegación--->
            <div id="barra">
		<div class="span9">
                    <div class="navbar">
                        <div class="navbar-inner">	
                            <ul class="nav"><!-- <a class="brand" href="#">Speeder</a> -->
                                <li class="active"><a href="#">Inicio</a></li>
                                <li><a href="planes/planes.html">Planes</a></li>
                                <li><a href="servicios/servicios.php">Servicios</a></li>
                                <li><a href="nosotros/nosotros.php">¿Quiénes somos?</a></li>
                                <li><a href="diseno_web/diseno_web.html">Desarrollo web</a></li>
                                <li><a href="faq/faq.php">FAQ</a></li>
                                <li><a class="modalbox" href="#inline">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>