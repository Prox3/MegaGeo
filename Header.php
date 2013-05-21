<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>" />
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="organization name" content="<?php echo $organization ?>" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="language" content="portuguese" />
    <meta name="location" content="Brazil" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="expires" content="-1" />
    <meta name="mssmarttagspreventparsing" content="true" />
    <meta http-equiv="imagetoolbar" content="no" />

    
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
     <link rel="Stylesheet" type="text/css" href="css/jquery.qtip.css" />
    <link rel="Stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.10.2.custom.css" />
    <link rel="stylesheet" type="text/css" href="css/s3Slider.css"/>
    
    <script type="text/javascript" src="js/script.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    
    <script type="text/javascript" src="js/jquery.qtip.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/jquery.alphanumeric.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="js/Commons/common.js"></script>
    
    <script type="text/javascript" src="js/s3Slider.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#menu > ul > li > a").removeClass("active");
			var active = "<?php echo $activeMenu;?>";
			if(active == null || active == "")
				$("#home").addClass("active");
			else
				$(active).addClass("active");
		});
	</script>
</head>
<body>
	<div class="backLightbox"></div>
    <div id="tudo">
        <div id="conteudo">
            <div id="header">
            	<div id="border-top-header">
                    <div class="border-top-header-absolute"></div>
                </div>
                <div id="contentHeader">
                	<div class="contentHeader-absolute"></div>
                    <div id="logo">
                    	<div class="logo box-shadow">
                        	<a href="index.php" target="_self">
                        		<img src="images/logo.png" alt="MegaGeo" width="187" height="141" />
                            </a>
						</div> 
                        <div class="titulo">
                        	<h1 class="verticalAlign">Engenharia de fundações</h1>
                        </div>
                    </div>
                    <div id="menu">
                        <ul>
                            <li><a id="home" href="index.php" target="_self">home</a></li>
                            <li><a id="empresas" href="empresas.php" target="_self">empresa</a></li>
                            <li><a id="obras" href="obras.php" target="_self">obras</a></li>
                            <li><a id="clientes" href="clientes.php" target="_self">clientes</a></li>
                            <li><a id="orcamentos" href="orcamentos.php" target="_self">orçamento</a></li>
                        </ul>
                    </div>
                </div>
                <div id="border-bottom-header">
                    <div class="border-bottom-header-absolute"></div>
                </div>
            </div>