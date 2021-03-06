<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$tpl['titulo']?></title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	 <link href="assets/css/blog.css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
   <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php?m=admin&c=posts">Gerenciar Posts</a>
			  <a class="blog-nav-item active" href="index.php?m=admin&c=categorias">Gerenciar Categorias</a>
          <a class="blog-nav-item active" href="index.php?m=admin&c=usuarios">Gerenciar Usuários</a>
			  <a class="blog-nav-item active" href="index.php?m=logout">Sair</a>
			  
			  <div class="pull-right">
				<span class="label label-danger">
					<?=$_SESSION["usuarionome"]?>
				</span>
			  </div>
        </nav>
      </div>
    </div> 
	
	 <?php include($tpl['pagina'].".tpl.php"); ?>
	 
	 <div class="blog-footer marginTop">
		<p>Rodapé da pagina</p>
	 </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>