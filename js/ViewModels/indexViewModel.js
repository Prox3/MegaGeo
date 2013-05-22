$(document).ready(function () {
	somenteNumeros();
	mascarasPagina();
	definicaoFormValidacao();
	calendario();
	enviarOrcamento();
});

function enviarOrcamento(){
	$('form').ajaxForm({
        beforeSubmit: function() {
            $(".backLightbox, .loading").show();
        },
        success: function(data) {
			$(".loading").hide();
			if(data == 'ok'){
				$('#form1').reset();
				abrirModalSucesso();
			}
			else{
				abrirModalError();
			}
        }
	});
	
	$("#txtEnviar").click(function(){
		if (!$('#form1').valid()) {
            return;
        }
		$('#form1').submit();
		/*var form = $('#form1');
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
		var arquivo = form.find('#image_event');
		
		$.ajax({
			url: 'email/send_message.php',
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
					previsao: previsao.val(),
					arquivo: arquivo.val()
					},
			beforeSend:function(){
				$(".backLightbox, .loading").show();
			},
			success:function(data){
				$(".loading").hide();
				if(data == 'ok'){
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
		});*/
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
}

