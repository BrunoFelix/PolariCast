<!doctype html>
<html class="no-js" lang="en">
  <head>
  	<link rel="stylesheet" href="gui/css/estilo.css">
  	<link rel="stylesheet" href="../gui/css/estilo.css">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
  	<div class="all">
		 
		 <?php require_once("menu.php"); ?>

		<div class="corpo" id="corpo">
			<div class="barra-superior">
				<div class="barra-explorer"> 
					<div class="pesquisa-input">
						<div class="pesquisa-imagem"></div>
						<input type="text" placeholder="Pesquisar" name="pesquisar-texto" id="pesquisar-texto" onkeyup="pesquisarqualquerletra();" />
					</div>
					<div class="usuario">
						<a href="usuario/logar">Entrar</a>
					</div>
				</div>
			</div>

			<div class="conteudo" id="conteudo">
				<div class="conteudo-meio" id="conteudo-meio">
					<?php  
		        		$pathC = $fileLoader->loader($tela,$pasta); 
		        		if (!empty($pathC)){
		        			require_once $pathC;
		        		}
		        	?>
				</div>
			</div>
		</div>

		<?php //require_once("footer.php"); ?>
	</div>
  </body>
</html>

<script type="text/javascript">

    function pesquisarqualquerletra(){
        pesquisar();
    }

    function pesquisar(){
        var display = document.getElementById('pesquisar-texto').value;
        var pai = document.getElementById("conteudo-meio");
        var nome = '';



        for(var i = 0; i < pai.children.length; i++){
                pai.children[i].style.visibility = 'visible';
                pai.children[i].style.position = 'relative';
                
                nome = pai.children[i].name.toUpperCase();
 
               //alert(nome);

                if(nome.indexOf(display.toUpperCase()) <= -1){
                    pai.children[i].style.position = 'absolute';
                    pai.children[i].style.visibility = 'hidden';
                }
        }
  

        /*if document.getElementById(). <> display{
            document.getElementById(display).style.display = 'none';
        }*/
    }
</script>