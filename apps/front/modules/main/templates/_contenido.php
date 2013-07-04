<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<style>
    div.ext,a.button
		{
			margin:0px;
			padding:5px;
			text-align:center;
			background:#e5eecc;
			border:solid 1px #c3c3c3;
		}
		div.ext
		{
			height:320px;
			width:600px;
			display:none;
			position:relative;
		}
</style>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="slider-wrapper theme-light">
                <div id="slider" class="nivoSlider">
                    <img src="uploads/banner1.gif"  title="Dominio gratis en todos los paquetes" />
                    <img src="uploads/banner2.gif" data-thumb="images/banner2.gif" alt="" title="Páginas web desde $5000.00" />
                    <img src="uploads/banner3.gif" data-thumb="images/banner3.gif" alt="" data-transition="slideInLeft" title="Contrata desde $40.00 mensuales" />
                    <img src="uploads/banner2.gif" data-thumb="images/banner2.gif" alt="" title="20% de descuento en cualquier plan a 12 meses" />
                </div>
            </div>
        </div>
        
        <div class="span6"><!-- Buscador -->
            <h3>¡Busca y registra tu dominio gratis!</h3>
        </div>
        <div class="span6">
            <br>
            <div id="buscador">
                <form action="resultados.php" method="post">
                    <b>www.&nbsp; </b><input type="text" name="ipdomain" size="38" /> <a class="button">&nbsp;.com &nbsp;</a></span>
                    &nbsp; <input type="submit" value="Buscar Dominio" />
                    <div id="et" class="ext">						
                        <input type="checkbox" value="true" id="searchAllExtensions" name="searchAllExtensions">
                        <label for="searchAllExtensions">Buscar Todos</label><br />
                        <h5>Extensiones Populares</h5>
                        <input type="checkbox" value=".com" name="tlds[]" id="tlds1" checked=""><label for="tldcom">.com</label>
                        <input type="checkbox" value=".mx" name="tlds[]" id="tlds7"><label for="tldus">.mx</label>
                        <input type="checkbox" value=".com.mx" name="tlds[]" id="tlds8"><label for="tldme">.com.mx</label><br />
                        <input type="checkbox" value=".org.mx" name="tlds[]" id="tlds9"><label for="tldco">.org.mx</label>
                        <input type="checkbox" value=".edu.mx" name="tlds[]" id="tlds10"><label for="tldca">.edu.mx</label>
                        <input type="checkbox" value=".gob.mx" name="tlds[]" id="tlds11"><label for="tldmobi">.gob.mx</label><br />
                        <input type="checkbox" value=".net" name="tlds[]" id="tlds2"><label for="tldnet">.net</label>
                        <input type="checkbox" value=".org" name="tlds[]" id="tlds3"><label for="tldorg">.org</label>
                        <input type="checkbox" value=".us" name="tlds[]" id="tlds4"><label for="tldin">.us</label><br />
                        <input type="checkbox" value=".info" name="tlds[]" id="tlds5"><label for="tldinfo">.info</label>
                        <input type="checkbox" value=".biz" name="tlds[]" id="tlds6"><label for="tldco.uk">.biz</label>
                        <input type="checkbox" value=".name" name="tlds[]" id="tlds12"><label for="tldbiz">.name</label>
                        <h5>Más Extensiones</h5>
                        <input type="checkbox" value=".ws" name="tlds[]" id="tlds13"><label for="tldxxx">.ws</label>
                        <input type="checkbox" value=".tv" name="tlds[]" id="tlds14"><label for="tldde">.tv</label>
                        <input type="checkbox" value=".mobi" name="tlds[]" id="tlds15"><label for="tldtv">.mobi</label><br />
                        <input type="checkbox" value=".me" name="tlds[]" id="tlds16"><label for="tldeu">.me</label>
                        <input type="checkbox" value=".la" name="tlds[]" id="tlds17"><label for="tldorg.uk">.la</label>
                        <input type="checkbox" value=".asia" name="tlds[]" id="tlds18"><label for="tldme.uk">.asia</label><br />
                        <input type="checkbox" value=".ca" name="tlds[]" id="tlds19"><label for="tldcc">.ca</label>
                        <input type="checkbox" value=".eu" name="tlds[]" id="tlds20"><label for="tldws">.eu</label>
                        <input type="checkbox" value=".cc" name="tlds[]" id="tlds21"><label for="tldws">.cc</label><br />
                        <input type="checkbox" value=".nu" name="tlds[]" id="tlds22"><label for="tldbz">.nu</label>
                        <input type="checkbox" value=".de" name="tlds[]" id="tlds23"><label for="tldcm">.de</label>
                        <input type="checkbox" value=".jp" name="tlds[]" id="tlds24"><label for="tldnu">.jp</label>
                    </div>
                </form>		
           </div>
        </div>	 			 
    </div>


    <div class="span12">
        <h2>Nuestros planes</h2>
        <div class="span12">
            <div class="span12">
                <ul id="listac">
                        <li class="icon-hdd"></li>Espacio en disco
                        <li class="icon-resize-horizontal"></li>Transferencia
                        <li class="icon-envelope"></li>Cuentas de correo
                        <li class="icon-globe"></li>Dominios
                        <li class="icon-list-alt"></li>Bases de datos
                </ul>
            </div>
            <ul id="plan1">
                <div id="tituloplan">Plan Básico</div>
                <ul id="caracplan">
                    <li><i class="icon-hdd icon-white"></i>4</li>
                    <li><i class="icon-resize-horizontal icon-white"></i>1 Zero</li>
                    <li><i class="icon-envelope icon-white"></i>Sin límite</li>
                    <li><i class="icon-globe icon-white"></i>Sin límite</li>
                    <li><i class="icon-list-alt icon-white"></i>Sin límite</li>
                </ul>
                <ul>
                    <div class="botones"><a href="#" class="modern embossed-link">Elegir</a></div>
                </ul>
            </ul>

            <ul id="plan1">
                <div id="tituloplan">Plan Básico</div>
                <div>
                <ul id="caracplan">
                    <li><i class="icon-hdd icon-white"></i>4</li>
                    <li><i class="icon-resize-horizontal icon-white"></i>1 Zero</li>
                    <li><i class="icon-envelope icon-white"></i>Sin límite</li>
                    <li><i class="icon-globe icon-white"></i>Sin límite</li>
                    <li><i class="icon-list-alt icon-white"></i>Sin límite</li>
                </ul>
                <ul>
                    <div class="botones"><a href="#" class="modern embossed-link">Elegir</a></div>
                </ul>
                </div>
            </ul>

            <ul id="plan1">
                <div id="tituloplan">Plan de lujo</div>
                <div>
                <ul id="caracplan">
                    <li><i class="icon-hdd icon-white"></i>40</li>
                    <li><i class="icon-resize-horizontal icon-white"></i>2 Zeros</li>
                    <li><i class="icon-envelope icon-white"></i>Sin límite</li>
                    <li><i class="icon-globe icon-white"></i>Sin límite</li>
                    <li><i class="icon-list-alt icon-white"></i>Sin límite</li>
                </ul>
                <ul>
                    <div class="botones"><a href="#" class="modern embossed-link">Elegir</a></div>
                </ul>
                </div>
            </ul>

            <ul id="plan1">
                <div id="tituloplan">Plan ilimitado</div>
                <div>
                <ul id="caracplan">
                    <li><i class="icon-hdd icon-white"></i>4,000</li>
                    <li><i class="icon-resize-horizontal icon-white"></i>4 zeros</li>
                    <li><i class="icon-envelope icon-white"></i>Sin límite</li>
                    <li><i class="icon-globe icon-white"></i>Sin límite</li>
                    <li><i class="icon-list-alt icon-white"></i>Sin límite</li>
                </ul>
                <ul>
                    <div class="botones"><a href="#" class="modern embossed-link">Elegir</a></div>
                </ul>
                </div>
        </ul>
            <br><br><br>
       </div>
    </div>
</div>


<script type="text/javascript">
     $.noConflict();
    jQuery(document).ready(function($) {
        $('#slider').nivoSlider();
    // Code that uses jQuery's $ can follow here.
    });
 </script>