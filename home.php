<script type="text/javascript">
	
	(function($){
    $.fn.extend({ 
        //plugin name - rotaterator
        rotaterator: function(options) {
 
            var defaults = {
                fadeSpeed: 500,
                pauseSpeed: 100,
				child:null
            };
             
            var options = $.extend(defaults, options);
         
            return this.each(function() {
                  var o =options;
                  var obj = $(this);                
                  var items = $(obj.children(), obj);
				  items.each(function() {$(this).hide();})
				  if(!o.child){var next = $(obj).children(':first');
				  }else{var next = o.child;
				  }
				  $(next).fadeIn(o.fadeSpeed, function() {
						$(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
							var next = $(this).next();
							if (next.length == 0){
									next = $(obj).children(':first');
							}
							$(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
						})
					});
            });
        }
    });
})(jQuery);
	
	$(document).ready(function(){
		
		$('#rotate').rotaterator({fadeSpeed:800, pauseSpeed:2500});
		
		$(".more").hover(function(){
			$(this).parent().parent().find(".content-link-uteis").addClass("opacidade");
		});
		$(".more").mouseout(function(){
			$(this).parent().parent().find(".content-link-uteis").removeClass("opacidade");
		});
    
  });
</script>
<div id="content-home">
	<div class="content-home-absolute"></div>
    <div id="banner-rotativo">
    	<div id="slider0">
            <ul id="slider0Content">
                <li class="slider0Image" style="display: none;">
                    <img src="images/banner-rotativo.png" width="900" height="310" />
                    <span class="bottom" style="display: none;"><strong>Lorem ipsum dolor</strong><br>Consectetuer adipiscing elit. Donec eu massa vitae arcu laoreet aliquet.</span>

                </li>
                <li class="slider0Image" style="display: none;">
                    <img src="images/banner-rotativo.png" width="900" height="310" />
                    <span class="bottom" style="display: none;"><strong>Praesent</strong><br>Maecenas est erat, aliquam a, ornare eu, pretium nec, pede.</span>
                </li>
                <li class="slider0Image" style="display: list-item;">
                    <img src="images/banner-rotativo.png" width="900" height="310" />
                    <span class="bottom" style="display: inline;"><strong>In hac habitasse</strong><br>Quisque ipsum est, fermentum quis, sodales nec, consectetuer sed, quam. Nulla feugiat lacinia odio.</span>

                </li>
                <li class="slider0Image" style="display: none;">
                    <img src="images/banner-rotativo.png" width="900" height="310" />
                    <span class="bottom" style="display: none;"><strong>Fusce rhoncus</strong><br>Praesent pellentesque nibh sed nibh. Sed ac libero. Etiam quis libero.</span>
                </li>
                <li class="slider0Image" style="display: none;">
                    <img src="images/banner-rotativo.png" width="900" height="310" />
                    <span class="bottom" style="display: none;"><strong>Morbi malesuada</strong><br>Vivamus molestie leo sed justo. In rhoncus, enim non imperdiet feugiat, felis elit ultricies tortor.</span>

                </li>
                <div class="clear slider0Image"></div>
            </ul>
        </div>
    </div>
</div>
<div id="link-uteis-home">
	<div id="link-empresa" class="box-link-uteis">
    	<div class="titulo-link-uteis">
        	<div class="arrows-titulo"></div>
            <div class="titulo-h3">
            	<h3>empresa</h3>
            </div>
        </div>
        <div class="content-link-uteis">
        	<!--<p class="titulo">
            	Perfuração de estacas de diâmetro 30 cm à 80 cm com 21 metros de profundidade. 
            </p>-->
            <p class="content">
            A <font color="#fafafa">MEGAGEO</font> é uma empresa do grupo <font color="#fafafa">JL ENGENHARIA DE FUNDAÇÕES E COMÉRCIO</font>, que atua no segmento de estacas hélice contínua monitorada.
            </p>
        </div>
        <a href="<?=$urlAbsoluta?>Empresas" target="_self">
          <span class="more">SAIBA MAIS</span>
          <div id="link-empresa-a"></div>
        </a>
    </div>
    <div id="link-obras" class="box-link-uteis">
    	<div class="titulo-link-uteis">
        	<div class="arrows-titulo"></div>
            <div class="titulo-h3">
            	<h3>obras</h3>
            </div>
        </div>
        <div class="content-link-uteis">
        	<!--<p class="titulo">
            	Perfuração de estacas de diâmetro 30 cm à 80 cm com 21 metros de profundidade. 
            </p>-->
            <div id="rotate">
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Racional Engenharia Ltda<br />
                <font color="#a4a4a4">Obra: </font> VIVO<br />
                <font color="#a4a4a4">Local: </font> Santana do Parnaíba/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Construtora Garopaba<br />
                <font color="#a4a4a4">Obra: </font> Residencial Lumiere<br />
                <font color="#a4a4a4">Local: </font> Piracicaba/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Construtora Valadares Contijo S/A<br />
                <font color="#a4a4a4">Obra: </font> Edifício Letóile<br />
                <font color="#a4a4a4">Local: </font> Campinas/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Cooperativa Habitacional Nova Aliança<br />
                <font color="#a4a4a4">Obra: </font> Prédio Residencial (03 Torres)<br />
                <font color="#a4a4a4">Local: </font> Valinhos/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> CPN Engenharia e Construções Ltda<br />
                <font color="#a4a4a4">Obra: </font> Edifício Clermont Ferrant<br />
                <font color="#a4a4a4">Local: </font> Campinas/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> PP Snacks Serviços Ltda<br />
                <font color="#a4a4a4">Obra: </font> Galpão Industrial<br />
                <font color="#a4a4a4">Local: </font> Jundiaí/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Cilare Empreendimentos<br />
                <font color="#a4a4a4">Obra: </font> Galpão Industrial<br />
                <font color="#a4a4a4">Local: </font> Jundiaí/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Planej Construtora e Incorporadora Ltda<br />
                <font color="#a4a4a4">Obra: </font> Prédio Residencial<br />
                <font color="#a4a4a4">Local: </font> São José dos Campos/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Enac Empreendimento e Construções<br />
                <font color="#a4a4a4">Obra: </font> Concessionária Tempo Ford<br />
                <font color="#a4a4a4">Local: </font> Campinas/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> HM 17 Empreendimentos Imobiliários SPE<br />
                <font color="#a4a4a4">Obra: </font> Condomínios Residenciais<br />
                <font color="#a4a4a4">Local: </font> Cajamar/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> HM 25 Empreendimentos Imobiliários SPE<br />
                <font color="#a4a4a4">Obra: </font> HM25 – Parque das Colinas<br />
                <font color="#a4a4a4">Local: </font> Valinhos/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Irmãos Russi Ltda<br />
                <font color="#a4a4a4">Obra: </font> Supermercados Irmãos Russi<br />
                <font color="#a4a4a4">Local: </font> Itatiba/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Lico´s Empreendimentos Imobiliários Ltda<br />
                <font color="#a4a4a4">Obra: </font> Edifício Residencial<br />
                <font color="#a4a4a4">Local: </font> Guarujá/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Pavão Indústria e Comércio Ltda<br />
                <font color="#a4a4a4">Obra: </font> Prédio Residencial<br />
                <font color="#a4a4a4">Local: </font> Guarulhos/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Bromberg Construtora Ltda<br />
                <font color="#a4a4a4">Obra: </font> Edifício Residencial Argentio<br />
                <font color="#a4a4a4">Local: </font> Campinas/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Mogmo Construtora e Incorporadora Ltda<br />
                <font color="#a4a4a4">Obra: </font> Edifício Residencial Melina<br />
                <font color="#a4a4a4">Local: </font> Valinhos/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Pinese Vieira Engenharia<br />
                <font color="#a4a4a4">Obra: </font> Shopping Via Vale Garden<br />
                <font color="#a4a4a4">Local: </font> Taubaté/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Construtora Queiroz Galvão<br />
                <font color="#a4a4a4">Obra: </font> Premiere Morumbi Condomínio Clube<br />
                <font color="#a4a4a4">Local: </font> Paulínia/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> BCS Construtora e Incorporadora<br />
                <font color="#a4a4a4">Obra: </font> Supermercado Pague Menos<br />
                <font color="#a4a4a4">Local: </font> Hortolândia/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Enac Empreendimentos, construções e Comércio Ltda<br />
                <font color="#a4a4a4">Obra: </font> Master Business Park<br />
                <font color="#a4a4a4">Local: </font> Jundiaí/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Construtora e Incorporadora Guarany<br />
                <font color="#a4a4a4">Obra: </font> SENAI Bragança Paulista<br />
                <font color="#a4a4a4">Local: </font> Bragança Paulista/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Construcamp Obras e Projeto Ltda<br />
                <font color="#a4a4a4">Obra: </font> Americana Office Tower<br />
                <font color="#a4a4a4">Local: </font> Americana/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> INI 2 Implantações Imobiliárias<br />
                <font color="#a4a4a4">Obra: </font> GR2-Condomínio Industrial<br />
                <font color="#a4a4a4">Local: </font> Campinas/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> MHN Construções e Comércio Ltda<br />
                <font color="#a4a4a4">Obra: </font> Edifício Veneza<br />
                <font color="#a4a4a4">Local: </font> Campinas/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Possato Construções e Comércio Ltda<br />
                <font color="#a4a4a4">Obra: </font> Edifício Empresarial Oswaldo Cruz<br />
                <font color="#a4a4a4">Local: </font> Campinas/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> MAZZETO E BARELA ARQUITETURA<br />
                <font color="#a4a4a4">Obra: </font> Germek<br />
                <font color="#a4a4a4">Local: </font> São João da Boa Vista/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> SAÚVAS INCORPORADORA E ADMINISTRADORA<br />
                <font color="#a4a4a4">Obra: </font> Hotel Intercity<br />
                <font color="#a4a4a4">Local: </font> Vinhedo/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> METROCON CONSTRUTORA LTDA<br />
                <font color="#a4a4a4">Obra: </font> Shopping<br />
                <font color="#a4a4a4">Local: </font> Jaguariúna/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> BRASWELL PAPEL E CELULOSE<br />
                <font color="#a4a4a4">Obra: </font> Galpão Industrial<br />
                <font color="#a4a4a4">Local: </font> Paulínia/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> HS TRESSOLDI INCORPORAÇÕES<br />
                <font color="#a4a4a4">Obra: </font> Residencial Aquarius<br />
                <font color="#a4a4a4">Local: </font> São José dos Campos/SP
              </p>
              <p class="content">
                <font color="#a4a4a4">Cliente: </font> Queiroz Galvão Desenvolvimento Imobiliário<br />
                <font color="#a4a4a4">Obra: </font> Atmosphera<br />
                <font color="#a4a4a4">Local: </font> Jundiaí/SP
              </p>
            </div>
        </div>
        <a href="<?=$urlAbsoluta?>Obras" target="_self">
        	<span class="more" style="color:#282828">SAIBA MAIS</span>
        	<div id="link-obras-a"></div>
        </a>
    </div>
    <div id="link-orcamento" class="box-link-uteis">
    	<div class="titulo-link-uteis">
        	<div class="arrows-titulo"></div>
            <div class="titulo-h3">
            	<h3>orçamento</h3>
            </div>
        </div>
        <div class="content-link-uteis">
        	<!--<p class="titulo">
            	Perfuração de estacas de diâmetro 30 cm à 80 cm com 21 metros de profundidade. 
            </p>-->
            <p class="content">
            FAÇA SEU ORÇAMENTO COM <strong>SEGURANÇA</strong> E <strong>AGILIDADE</strong>!
            </p>
        </div>
        <a href="<?=$urlAbsoluta?>Orcamento" target="_self">
        <span class="more" style="color:#e77843">SAIBA MAIS</span>
            <div id="link-orcamento-a">
            </div>
        </a>
    </div>
</div>
<script type="text/javascript">
$('#slider0').s3Slider({
	timeOut: 3000
});
</script>
