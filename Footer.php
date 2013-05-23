	        <div id="footer">
            	<div id="footer-social">
                	<div class="footer-social-absolute"></div>
                    <div class="footer-social-content">
                    	<p class="verticalAlign">
                        	11 0000-0000   |   contato@megageo.com.br   | 
                            <a href="https://www.facebook.com/prox3.digital" target="_blank" style="padding:6px">
                            	<img src="images/facebook.png" align="Facebook" width="5" height="10" />                            </a>
                            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fprox3.digital&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=600167979994492" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;position: absolute; margin-top: -2px; margin-left: 10px;" allowTransparency="true"></iframe>
                        </p>
                    </div>
                </div>
                <div id="footer-direitos">
                	<div class="footer-direitos-absolute" style="height:71px"></div>
                    <div class="footer-direitos-content" style="height:43px">
                    	<p class="verticalAlign">Megageo ©Todos os direitos reservados</p>
                    </div>
                    <div class="footer-direitos-content" style="height:0px">
                    	<p class="verticalAlign"><a target="_blank" href="//prox3.com.br" style="color:#44842b !important">Prox3</p>
                    </div>
                </div>
        	</div>
        </div>        
    </div>
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
</body>
</html>