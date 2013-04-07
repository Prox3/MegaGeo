$(document).ready(function () {
	navegacaoMenu();
	efeitosMenu();	
	accordionFAQ();	
	verificarEstiloMac();
	somenteNumeros();
	mascarasPagina();
	definicaoFormValidacao();
	calendario();
	enviarOrcamento();
});

function enviarOrcamento(){
	$("#txtEnviar").click(function(){
		if (!$('#form1').valid()) {
            return;
        }
		
		var form = $('#form1');
		var nome = form.find('#txtNome')
		var empresa = form.find('#txtEmpresa');
		var telefone = form.find('#txtTelefone');
		var email = form.find('#txtEmail');
		var local = form.find('#txtLocalObra');
		var tipoObra = form.find('#txtTipoObra');
		var qtd = form.find('#txtQtdEstacas');
		var diametro = form.find('#txtDiametroEstacas');
		var profundidade = form.find('#txtProfundidadeEstacas');
		var previsao = form.find('#txtPrevisao');
		
		$.ajax({
			url: 'send_message.php',
			type: 'POST',
			data: { nome: nome.val(), 
					empresa: empresa.val(), 
					telefone: telefone.val(), 
					email: email.val(), 
					local: local.val(), 
					tipoObra: tipoObra.val(), 
					qtd: qtd.val(), 
					diametro: diametro.val(), 
					profundidade: profundidade.val(), 
					previsao: previsao.val()
					},
			success:function(data){
				alert(data);
				if(data != 'ok'){
					$('#form1').reset();
					abrirModalSucesso();
				}
				else{
					abrirModalError();
				}
				
			},
			error:function(jqXHR, textStatus, errorThrown ){
				alert(textStatus);
			}
		});
	});
	
	$("#boxSucessoEnvio .close").click(function(){
		fecharModalSucesso();
	});
	
	$("#boxErrorEnvio .close").click(function(){
		fecharModalError();
	});
}

function abrirModalSucesso(){
	$("#boxSucessoEnvio, .backLightbox").show();
}

function fecharModalSucesso(){
	$("#boxSucessoEnvio, .backLightbox").hide();
}

function abrirModalError(){
	$("#boxErrorEnvio, .backLightbox").show();
}

function fecharModalError(){
	$("#boxErrorEnvio, .backLightbox").hide();
}

function calendario(){
	$("#txtPrevisao").datepicker({
		defaultDate: "+1w",
		changeMonth: false,
		numberOfMonths: 1,
		dateFormat: 'dd/mm/yy',
		dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'
		],
		dayNamesMin: [
		'D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'
		],
		dayNamesShort: [
		'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'
		],
		monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro',
		'Outubro', 'Novembro', 'Dezembro'
		],
		monthNamesShort: [
		'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set',
		'Out', 'Nov', 'Dez'
		],
		nextText: 'Próximo',
		prevText: 'Anterior'
	});
}

function definicaoFormValidacao() {
    var form = $('#form1');
    var nome = form.find('#txtNome')
    var empresa = form.find('#txtEmpresa');
    var telefone = form.find('#txtTelefone');
    var email = form.find('#txtEmail');
    var local = form.find('#txtLocalObra');
    var tipoObra = form.find('#txtTipoObra');
    var qtd = form.find('#txtQtdEstacas');
    var diametro = form.find('#txtDiametroEstacas');
    var profundidade = form.find('#txtProfundidadeEstacas');
    var previsao = form.find('#txtPrevisao');

    form.validate();

    nome.rules('add', { required: true,
        messages: { required: 'Nome obrigatório.' }
    });
	
	empresa.rules('add', { required: true,
        messages: { required: 'Empresa obrigatório.' }
    });
	
	telefone.rules('add', { required: true,
        messages: { required: 'Telefone obrigatório.' }
    });
	
	email.rules('add', { required: true, email: true,
        messages: { required: 'Email obrigatório.', email: "E-mail inválido.<br/>Ex.: nome@servidor.com.br" }
    });
	
	local.rules('add', { required: true,
        messages: { required: 'Local obrigatório.' }
    });
	
	tipoObra.rules('add', { required: true,
        messages: { required: 'Tipo obrigatório.' }
    });
	
	qtd.rules('add', { required: true,
        messages: { required: 'Quantidade obrigatório.' }
    });
	
	diametro.rules('add', { required: true,
        messages: { required: 'Diâmentro obrigatório.' }
    });
	
	profundidade.rules('add', { required: true,
        messages: { required: 'Profundidade obrigatório.' }
    });
	
	previsao.rules('add', { required: true,
        messages: { required: 'Previsão de início obrigatório.' }
    });
}

function mascarasPagina(){
	$("#txtPrevisao").mask("99/99/9999");
	$("#txtTelefone").mask("(99) 9999-9999?9");
}

function somenteNumeros(){
	$('#txtQtdEstacas, #txtDiametroEstacas, #txtProfundidadeEstacas').numeric();
	$('#txtNome, #txtEmpresa, #txtLocalObra, #txtTipoObra').alphanumeric();
}

function navegacaoMenu(){
	$(".menuEmpresa").click(function () {
		var posLeft = 0;
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
	
	$(".menuObras").click(function () {
		var posLeft = ($("#boxObras").position().top - 60);
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
	
	$(".menuFAQ").click(function () {
		var posLeft = ($("#boxFAQ").position().top - 60);
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
	
	$(".menuClientes").click(function () {
		var posLeft = ($("#boxClientes").position().top - 60);
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
	
	$(".menuContato").click(function () {
		var posLeft = ($("#boxContato").position().top - 60);
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
}

function efeitosMenu(){
	var $el, leftPos, newWidth, auxClick;
	auxClick = 0;
	
	/* Cache it */
	var $magicLine = $("#magic-line");
	var pLeft = ($(".current_page_item a").position().left + (($(".current_page_item a").width()/2)-10));
	$magicLine
		.css("left",pLeft )
		.data("origLeft", $magicLine.position().left);
	
	$("#header ul li").find("a").hover(function() 
	{
			auxClick = 0;
			$el = $(this);
			leftPos = $el.position().left + (($el.width()/2)-10) ;
			
			$magicLine.stop().animate({
				left: leftPos,
			});
			
		}, function() {
			if(auxClick == 0){
				$magicLine.stop().animate({
				left: $magicLine.data("origLeft")
			});   
		}
	});
	
	$("#header ul li").find("a").click(function() 
	{
		auxClick = 1;
		$el = $(this);
		leftPos = $el.position().left + (($el.width()/2)-10) ;
		
		$magicLine
			.css("left",leftPos )
			.data("origLeft", $magicLine.position().left);
		
		$magicLine.stop().animate({
			left: leftPos,
		});   
	});
}

function accordionFAQ(){
	var aux = 0;
	$('div.accordionButton').click(function () {
		var click1 = $(this).children("span").html().split('.');
		if (click1[0] != aux) {
			$('div.accordionContent').slideUp('normal');
			$(this).next().slideDown('normal');
			aux = click1[0];
		}
		else {
			$('div.accordionContent').slideUp('normal');
			aux = 0;
		}
	});
	$("div.accordionContent").hide();
}

function verificarEstiloMac(){
	if(navigator.userAgent.indexOf('Mac') > 0){
		$("#content .titulo .boxTitulo").css("padding","7px 5px 6px 15px");
	}
}