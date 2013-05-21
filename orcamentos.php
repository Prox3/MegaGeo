<?php $title = 'MegaGeo';
	  $description = 'Com equipamentos modernos aliados a um com corpo técnico especializado, a MegaGeo está altamente capacitada para trabalhos de fundação.';
	  $keywords = 'engenharia, fundacoes, bate estaca, obras';
	  $organization = 'MegaGeo';
	  $activeMenu = '#orcamentos';
 ?>
<?php require("header.php")?>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/ViewModels/indexViewModel.js"></script>
<!-- Inicio Section 6 Contato  -->
<div id="struct-orcamento">
	<div id="titulo-orcamento">
        <div class="arrows-titulo"></div>
        <div class="titulo-h3">
            <h3>orçamento <span>solicite</span></h3>
        </div>
    </div>
    <form class="dadosForm" id="form1" action="#" method="post">
    <div id="dados-pessoais-orcamentos" class="paddingOrcamento">
        <div class="nome EspacoEntreAccordion">
            <p><label>Nome:</label></p>
            <p><input type="text" id="txtNome" name="txtNome" value=""/></p>
        </div>
        
        <div class="telEmail EspacoEntreAccordion">
            <div class="tel leftBox">
                <p><label>Telefone:</label></p>
                <p><input type="text" id="txtTelefone" name="txtTelefone" value=""/></p>
            </div>
            <div class="email rightBox">
                <p><label>E-mail:</label></p>
                <p><input type="text" id="txtEmail" name="txtEmail" value=""/></p>
            </div>
        </div>
        
        <div class="empresa EspacoEntreAccordion">
            <p><label>Empresa:</label></p>
            <p><input type="text" id="txtEmpresa" name="txtEmpresa" value=""/></p>
        </div>
    </div>
    <div id="dados-obras-orcamentos" class="paddingOrcamento">
        <div class="localObra EspacoEntreAccordion">
            <p><label>Local da Obra:</label></p>
            <p><input type="text" id="txtLocalObra" name="txtLocalObra" value=""/></p>
        </div>
        
        <div class="tipoObra EspacoEntreAccordion">
            <p><label>Tipo da Obra:</label></p>
            <p><input type="text" id="txtTipoObra" name="txtTipoObra" value=""/></p>
        </div>
        
        <div class="estacas EspacoEntreAccordion">
            <p><label>Estacas Hélice Contínua:</label></p>
            <p>
            <label>Quantidade:</label>
            <input type="text" id="txtQtdEstacas" name="txtQtdEstacas" value=""/>
            <label>Diâmetro:</label>
            <input type="text" id="txtDiametroEstacas" name="txtDiametroEstacas" value=""/>
            <label>Profundidade:</label>
            <input type="text" id="txtProfundidadeEstacas" name="txtProfundidadeEstacas" value=""/>
            </p>
        </div>
        
        <div class="prevEnviar EspacoEntreAccordion">
            <div class="prev">
                <p><label>Previsão de Início:</label></p>
                <p><input type="text" id="txtPrevisao" name="txtPrevisao" value=""/></p>
            </div>
        </div>
    </div>
    <div id="dados-arquivos-orcamentos" class="paddingOrcamento">
        <div id="div-input-file">
          <input type="file" id="image_event" name="image_event" title="Selecione uma imagem" />
          <div id="div-input-falso"><input name="file_falso" type="text" id="file_falso" class="valida" value="Nome do arquivo anexo"  /></div>
          <input type="hidden" id="imgcropok" name="imgcropok" value="" />
        </div>
    </div>
    </form>
    <div id="envio-orcamentos">
    	<p>
        	<input type="button" id="txtEnviar" name="txtEnviar" class="enviarBtn" value="enviar">
        </p>
    </div>
</div>

<div id="boxSucessoEnvio" class="boxFlutuante">
    <div class="close"><img src="images/close.gif" alt="Fechar Modal" /></div>
    <div class="titulo"><p class="verticalAlign63px">seus dados foram enviados com sucesso!</p></div>
    <div class="content"><p class="verticalAlign63px">Logo entraremos em contato para enviar o orçamento solicitado.</p></div>
</div>

<div id="boxErrorEnvio" class="boxFlutuante">
    <div class="close"><img src="images/close.gif" alt="Fechar Modal" /></div>
    <div class="titulo"><p class="verticalAlign63px">Error de envio!</p></div>
    <div class="content"><p class="verticalAlign63px">Por favor, tente novamente mais tarde.</p></div>
</div>

<div class="loading">
	<img src="images/ajax-loader.gif" alt="Loading" />
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#image_event").change(function(){
		var vlr = $(this).val().split("\\")[2];
		$("#file_falso").val(vlr);
	});	
})
</script>
<!-- Fim Section 6 Contato  -->
<?php require("footer.php")?>