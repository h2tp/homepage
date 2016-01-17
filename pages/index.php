<?php

if(isset($_POST['req_google'])){
header('Location: http://www.google.fr/#q='.$_POST['req_google']);
}

if(isset($_POST['req_google_df'])){
header('Location: http://www.google.fr/#q=dwarf+fortress+'.$_POST['req_google_df']);
}

if(isset($_POST['req_youtube'])){
header('Location: https://www.youtube.com/results?search_query='.$_POST['req_youtube']);
}

if(isset($_POST['req_trad_fr_en'])){
header('Location: http://www.linguee.fr/francais-anglais/search?query='.$_POST['req_trad_fr_en']);
}

if(isset($_POST['req_trad_en_fr'])){
header('Location: http://www.linguee.fr/anglais-francais/search?query='.$_POST['req_trad_en_fr']);
}

	include ('inc/header.php');

$fic = dirname(__FILE__)."/todo.txt";

#Update de la note
if(isset($_POST['notes'])){
$fp = fopen($fic, 'w');
fwrite($fp, $_POST['notes']);
fclose($fp);
}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page d'accueil
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	  <div class="row">

	      <div class="col-md-2">
              <!-- TO DO List -->
              <div class="box box-success">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">ToDo List</h3>
                </div><!-- /.box-header -->
                        <form id='formtodo' method='POST' action=''>
                <div class="box-body">
                        <?php
                                echo "<textarea class='form-control' rows='8' name='notes' style='font-weight:bold'>".mb_convert_encoding(file_get_contents($fic),'HTML-ENTITIES', 'UTF-8')."</textarea>"
                        ?>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  <button type="submit" class="btn btn-success pull-right btn-sm"><i class="fa fa-floppy-o"></i></button>
                        </form>
                </div>
              </div><!-- /.box -->
             </div>


	    <div class="col-md-2">
	      <div class="box box-primary">
		<div class="box-header with-border">
                  <i class="fa fa-search"></i>
		  <h3 class="box-title">Recherches</h3>
		</div><!-- /.box-header -->
		<div class="box-body">

                        <form id='formtodo' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_google">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-flat" type="button"><i class="fa fa-google"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>
				<br />
                        <form id='form2' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_google_df" placeholder="Dwarf Fortress + ">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-flat" type="button"><i class="fa fa-google"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>
				<br />
                        <form id='form3' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_youtube" placeholder="YouTube">
                    <span class="input-group-btn">
                      <button class="btn btn-danger btn-flat" type="button"><i class="fa fa-youtube"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>
				<br />
                        <form id='form4' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_trad_fr_en" placeholder="Français > Anglais">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-flat" type="button"><i class="fa fa-flag"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>
				<br />
                        <form id='form5' method='POST' action=''>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="req_trad_en_fr" placeholder="Anglais > Français">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-flat" type="button"><i class="fa fa-flag"></i></button>
                    </span>
                  </div><!-- /input-group -->
			</form>

		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>


	    <div class="col-md-4">
			<center><img src='inc/images/tatoo.png' /></center>
	    </div>


	    <div class="col-md-4">
	      <div class="box box-info">
		<div class="box-header with-border">
                  <i class="fa fa-home"></i>
		  <h3 class="box-title">Chez moua</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		   <center>
			<a class="btn btn-app" href='http://www.generation-linux.fr/'>
				<i class="fa"><img src='inc/images/gl.ico' width='16px' /></i>Génération L
	                </a>
			<a class="btn btn-app" href='http://forum.raspfr.org/'>
				<i class="fa"><img src='inc/images/raspfr.ico' width='16px' /></i>Forum RaspFR
	                </a>
			<a class="btn btn-app" href='http://blog.elob.fr'>
				<i class="fa"><img src='inc/images/mario.ico' width='16px' /></i>Blog
	                </a>
		   </center>
		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>


	    <!--<div class="clearfix"></div>-->


	    <div class="col-md-4">

	    </div>


	    <div class="col-md-2">
	      <div class="box box-danger">
		<div class="box-header with-border">
                  <i class="fa fa-envelope-o"></i>
		  <h3 class="box-title">Mails</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		   <center>
			<a class="btn btn-app" href='https://protonmail.com/'>
				<i class="fa fa-envelope-o"></i>Protonmail
	                </a>
			<a class="btn btn-app" href='https://protonmail.com/'>
				<i class="fa fa-envelope"></i>Autremail
	                </a>
		   </center>
		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>


	    <div class="col-md-2">
	      <div class="box box-danger">
		<div class="box-header with-border">
                  <i class="fa fa-dollar"></i>
		  <h3 class="box-title">Banques</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		   <center>
			<a class="btn btn-app" href=''>
				<i class="fa fa-dollar"></i>Banque A
	                </a>
			<a class="btn btn-app" href=''>
				<i class="fa fa-euro"></i>Banque B
	                </a>
		   </center>
		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>


	    <div class="clearfix"></div>
		<br /><br />

	    <div class="col-md-12">
	      <div class="box">
		<div class="box-header with-border">
                  <i class="fa fa-external-link"></i>
		  <h3 class="box-title">Liens</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		   <center>
			<a class="btn btn-app" href='http://www.leboncoin.fr'>
				<i class="fa"><img src='inc/images/lbc.ico' width='16px' /></i>Leboncoin
	                </a>
			<a class="btn btn-app" href='http://france-retrogaming.fr'>
				<i class="fa"><img src='inc/images/fr.ico' width='16px' /></i>France Retro
	                </a>
			<a class="btn btn-app" href='http://www.forumcomics.com/'>
				<i class="fa"><img src='inc/images/fc.ico' width='16px' /></i>Forum comics
	                </a>
			<a class="btn btn-app" href='https://twitter.com/#!/'>
				<i class="fa"><img src='inc/images/twitter.ico' width='16px' /></i>Twitter
	                </a>
			<a class="btn btn-app" href='http://ebay.fr/'>
				<i class="fa"><img src='inc/images/ebay.ico' width='16px' /></i>Ebay
	                </a>
			<a class="btn btn-app" href='http://9gag.com/'>
				<i class="fa"><img src='inc/images/9g.ico' width='16px' /></i>9gag
	                </a>
			<a class="btn btn-app" href='http://www.memebase.com/'>
				<i class="fa"><img src='inc/images/mb.ico' width='16px' /></i>Memebase
	                </a>
		   </center>
		</div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div>


	  </div><!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!--Validation du formulaire avec ctrl+s-->
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script>
		$(window).keypress(function(event) {
		    if (!(event.which == 115 && event.ctrlKey) && !(event.which == 19)) return true;
		    //alert("Ctrl-S pressed");
		document.forms["formtodo"].submit();
		    event.preventDefault();
		    return false;
		});
	</script>
<?php
	include ('inc/footer.php');
?>
