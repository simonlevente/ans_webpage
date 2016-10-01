
<script>
	function showMessage() {
    	alert('You were passive for 15 minutes, please login again');
		window.location.href = "index.php";
	}
</script>

<?php
session_start();

$minutes=15; //Set logout time in minutes    
if (!isset($_SESSION['time']))
{
    $_SESSION['time'] = time();
} 
elseif (time() - $_SESSION['time'] > $minutes*60)
{
    session_destroy();
    echo '<script type="text/javascript">',
     'showMessage();',
     '</script>';
}


include "check.php";

if (check()){
	logout();

	include "../getdata/getcontent.php";
	include "../getdata/getdata.php";
	include "getdata/display_item.php";
	include "setdata/edit_person.php";
	include "setdata/edit_text.php";
	$user["rosca"] = getdata("../data/","rosca");
	$user["roscaalin"] = getdata("../data/","roscaalin");
	$user["micula"] = getdata("../data/","micula");
	$user["radu"] = getdata("../data/","radu");
	$user["somogyi"] = getdata("../data/","somogyi");
	$user["lisei"] = getdata("../data/","lisei");
	$user["trimbitas"] = getdata("../data/","trimbitas");
	$user["soos"] = getdata("../data/","soos");
	$user["roth"] = getdata("../data/","roth");
	$user["chiorean"] = getdata("../data/","chiorean");
	$user["catinas"] = getdata("../data/","catinas");
	$user["agratini"] = getdata("../data/","agratini");
	$content = getcontent("../data/");

?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grupul de cercetare - Analiză numerică și stohastică</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">

    <!-- Site CSS -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">   
 	
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>

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
                        <a href="main.php#despre">Despre noi</a>
                    </li>
						<li class="page-scroll">
                        <a href="main.php#colectivul">Colectivul</a>
                    </li>
                    <li class="page-scroll">
                        <a href="main.php#seminarii">Seminarii</a>
                    </li>
                		<li class="page-scroll">
                        <a href=main.php?logout>Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<?php
if ( isset( $_GET['edit_text'] ) )
{    
    $current = $_GET['edit_text'];
    echo edit_text($current,$content);
}
elseif ( isset( $_GET['edit_person'] ) )
{    
    $current = $_GET['edit_person'];
    echo edit_person($user,$current);
}
else
{

?>
	<!-- About Section -->
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
	                    <div class="text-center">
							<a href="main.php?edit_text=despre">
		                        <button type="button" class="btn btn-outline-invers"><i class="fa fa-edit"></i> Edit</button>
		                    </a>
	               		</div>
					</div>
					
						
					<div class="col-md-2">
					
					</div>
					
					<div class="col-md-4">
						<p><?php
	                        echo $content["directii"];
	                    ?></p>
	                    <div class="text-center">
							<a href="main.php?edit_text=directii">
		                        <button type="button" class="btn btn-outline-invers"><i class="fa fa-edit"></i> Edit</button>
		                    </a>
	               		</div>
					</div>					
				</div>    
			</div>
    </section>
	<section class="success" height=15>
	</section>
    <section id="colectivul">
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
			<hr class="colored">

            <div class="row">

						
            <?php
				$current = "chiorean";				
				echo display_item($user,$current);
	
				$current = "lisei";
				echo display_item($user,$current);
			?>

			
			</div>
			<hr class="colored">
	
            <div class="row">
				
	            <?php
					$current = "roscaalin";			
					echo display_item($user,$current);

					$current = "roth";
					echo display_item($user,$current);
				?>
			</div>	
			<hr class="colored">
            <div class="row">
				
            	<?php
					$current = "soos";
					echo display_item($user,$current);

					$current = "trimbitas";
					echo display_item($user,$current);
				?>

			</div>
			<hr class="colored">
            <div class="row">


				<?php
					$current = "micula";
					echo display_item($user,$current);

					$current = "radu";
					echo display_item($user,$current);
				?>
				
                
            </div>
			
			<hr class="colored">
            <div class="row">


				<?php
					$current = "rosca";
					echo display_item($user,$current);
					$current = "somogyi";
					echo display_item($user,$current);
				?>			
                
            </div>

			<hr class="white">
            
        </div>
    </section>
    <section class="success" height=15>
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
					<!-- seminari !-->
					<?php
	                    echo $content["seminari"];
	                ?>														
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<a href="main.php?edit_text=seminari">
	                        <button type="button" class="btn btn-outline-invers"><i class="fa fa-edit"></i> Edit</button>
	                    </a>
	                </div>
	            </div>
	        </div>    
		 	<hr class="colored">	
            <div class="row">					
				<div class="col-md-12">	
	                <div class="col-lg-8 col-lg-offset-2 text-center">
	                	<h4>Arhiva seminariilor</h4>
						<a href="main.php?edit_text=arhiva">
	                        <button type="button" class="btn btn-outline-invers"><i class="fa fa-edit"></i> Edit</button>
	                    </a>
	                </div>
				</div>
			</div>
        </div>
    </section>

</body>
</html>
<?php
}
} else {

    header("Location: ../index.php");
}
?>