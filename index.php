<?php 
	include('getdata/getdata.php');
	include('getdata/getcontent.php');
	include('getdata/display_item.php');
	include('getdata/display_modal.php');

	$user["rosca"] = getdata("data/","rosca");
	$user["roscaalin"] = getdata("data/","roscaalin");
	$user["micula"] = getdata("data/","micula");
	$user["radu"] = getdata("data/","radu");
	$user["somogyi"] = getdata("data/","somogyi");
	$user["lisei"] = getdata("data/","lisei");
	$user["trimbitas"] = getdata("data/","trimbitas");
	$user["soos"] = getdata("data/","soos");
	$user["roth"] = getdata("data/","roth");
	$user["chiorean"] = getdata("data/","chiorean");
	$user["catinas"] = getdata("data/","catinas");
	$user["agratini"] = getdata("data/","agratini");
	$content = getcontent("data/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link href="../favicon.ico" type="image/x-icon" rel="shortcut icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:image" content="http://math.ubbcluj.ro/~ans/img/logoMI.png" />

    <title>Grupul de cercetare - Analiză numerică și stohastică</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Site CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
 	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">   

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#despre">Despre noi</a>
                    </li>
					<li class="page-scroll">
                        <a href="#colectivul">Colectivul</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#seminarii">Seminarii</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <img class="img-responsive" src="img/ubb2.png" alt="" width=120px>                    
                </div>
                <div class="col-lg-8">
                    <div class="intro-text">
                        <span class="skills">Grupul de cercetare</span>
						<hr>
						<span class="name">Analiză numerică și stohastică</span>
                       	<br>
                        
                    </div>
                </div>
                <div class="col-lg-2">
                    <img class="img-responsive" src="img/logoMI.png" alt="" width=120px>
				</div>
            </div>            
        </div>
    </header>
	
    <!-- About Section -->
    <section id="despre">
        <div class="container">
			<div class="row">
					<div class="col-lg-12 text-center">
						<h2>Despre noi</h2>
						<hr class="colored">
					</div>
				</div>
				<div class="row">					
					<div class="col-md-6">
						<p><?php
	                        echo $content["despre"];
	                    ?></p>
					</div>
					
						
					<div class="col-md-2">
					
					</div>
					
					<div class="col-md-4">
						<p><?php
	                        echo $content["directii"];
	                    ?></p>
					</div>					
				</div>    
			</div>
    </section>
	<!-- Members Section -->
    <section class="success" id="colectivul">
        <div class="container">
			<div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>Colectivul</h2>
	                    <hr class="white">
	                </div>
	        </div>
	        <div class="row">
                <?php
					$current = "agratini";					
					echo display_item($user,$current);
				
				
					$current = "catinas";
					echo display_item($user,$current);
				?>
			</div>
			<hr class="white">

            <div class="row">

				<?php
					$current = "chiorean";					
					echo display_item($user,$current);
				
				
					$current = "lisei";
					echo display_item($user,$current);
				?>
			
			</div>
			<hr class="white">
	
            <div class="row">
				<?php
					$current = "roscaalin";					
					echo display_item($user,$current);
				
				
					$current = "roth";
					echo display_item($user,$current);
				?>
			</div>
				
			<hr class="white">

            <div class="row">
				
            	<?php
					$current = "soos";					
					echo display_item($user,$current);
				
				
					$current = "trimbitas";
					echo display_item($user,$current);
				?>
			</div>
			<hr class="white">
            <div class="row">


				<?php
					$current = "micula";					
					echo display_item($user,$current);
				
				
					$current = "radu";
					echo display_item($user,$current);
				?>
			
				
				
                
            </div>
			
			<hr class="white">
            <div class="row">


				<?php
					$current = "rosca";					
					echo display_item($user,$current);
				
				
					$current = "somogyi";
					echo display_item($user,$current);
				?>

			<hr class="white">
            <div class="row">

				<div class="col-sm-12 portfolio-item">
					<center><table>
					<tr><td height="250">

						<center><button class="btn btn-outline btn-responsive">La seminarii participa toți <h4>studenții doctoranzi</h4> care elaboreaza lucrarea in domeniul de cercetare al grupului.</button></center>
					</td></tr>
					</table></center>
				</div>
				
				
                
            </div>
			
            
        </div>
    </section>

    <!-- Seminars Section -->
    <section id="seminarii">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Seminarii de cercetare</h2>
                    <hr class="colored">
                </div>
            </div>
            <div class="row">					
				<div class="col-md-12">	
					<!-- seminarrii !-->
					<?php
	                    echo $content["seminari"];
	                ?>														
					<div class="col-lg-8 col-lg-offset-2 text-center">
		                <a href="#seminariiModal" data-toggle="modal">
		                    <button type="button" class="btn btn-outline-invers" data-dismiss="modal"><i class="fa fa-archive"></i> Arhivă</button>
		                </a>
		            </div>
				</div>
			</div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-12">                        
                        <p><b>Universitatea Babeş-Bolyai Cluj-Napoca</b><br>
						Facultatea de Matematică şi Informatică<br>
						Departamentul de Matematică</p>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        &copy; Grupul de cercetare <b>Analiză numerică și stohastică</b>, 2016.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Modals -->  
    <!-- Members Modals -->    
    <?php
		$current = "chiorean";
		echo display_modal($user,$current);
	
		$current = "catinas";
		echo display_modal($user,$current);

		$current = "agratini";
		echo display_modal($user,$current);

		$current = "lisei";
		echo display_modal($user,$current);
	
		$current = "trimbitas";
		echo display_modal($user,$current);

		$current = "soos";
		echo display_modal($user,$current);
	
		$current = "somogyi";
		echo display_modal($user,$current);
		$current = "radu";
		echo display_modal($user,$current);
	
		$current = "micula";
		echo display_modal($user,$current);

		$current = "rosca";
		echo display_modal($user,$current);

		$current = "roscaalin";
		echo display_modal($user,$current);

		$current = "roth";
		echo display_modal($user,$current);
	?>

    <!-- Seminari Modals -->
	<div class="portfolio-modal modal fade" id="seminariiModal" tabindex="-1" role="dialog" aria-hidden="true">
		<nav id="seminariiNav" class="navbar-fixed-top">
	        <div class="close-modal" onclick='reloadFunction()' data-dismiss="modal">                	        	
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>

    	</nav>
        <div class="modal-dialog">
            
            <div class="container">
                <div class="row">
                    	<div class="modal-body">
                    		<h2>Seminarii de cercetare</h2>                            
                            <h4>arhivă</h4>
                            <hr class="colored">
                        </div>    
                        <!-- arhiva -->
                        <div class="modal-body" align="justify">
	                        <?php
	                        	echo $content["arhiva"];
	                        ?>
                        </div>    
						<div class="modal-body" align="justify">
							<center><button type="button" onclick='reloadFunction()' class="btn btn-outline-invers" data-dismiss="modal"><i class="fa fa-times"></i> Pagina principală</button></center>
                        </div>
                        
                    
                </div>
            </div>
        </div>
    </div>
   	    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    <script>
    	$('div.modal').on('show.bs.modal', function() {
	    var modal = this;
	    var hash = modal.id;
	    window.location.hash = hash;
	    window.onhashchange = function() {
	        if (!location.hash){
	            $(modal).modal('hide');
		        }
		    }
		});

		$('div.modal').on('hide', function() {
		    var hash = this.id;
		    history.pushState('', document.title, window.location.pathname);
		});


		function reloadFunction() {
		    window.location.href = 'http://math.ubbcluj.ro/~ans';
		}

		$(document).keyup(function(e) {
		     if (e.keyCode == 27) {
		     	window.location.href = 'http://math.ubbcluj.ro/~ans';
		    }
		});


	</script>

</body>
</html>