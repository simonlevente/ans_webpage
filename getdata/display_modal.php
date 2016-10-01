<?php


function display_modal($user,$current){

	$text = "<div class='portfolio-modal modal fade' id='publicatii".$current."'' tabindex='-1' role='dialog' aria-hidden='true'>";
	$text .="
        <nav class='navbar-fixed-top modal-nav'>
	        <div onclick='reloadFunction()' class='close-modal' data-dismiss='modal'>                	        	
                <div class='lr'>
                    <div class='rl'>
                    </div>
                </div>
            </div>

    	</nav>
        <div class='modal-dialog'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-8 col-lg-offset-2'>
                    	<div class='modal-body'>
                    		<h2>";
    $text .= $user[$current]["name"];
    $text .= "</h2>
                            <h4>Lista publicațiilor</h4>
                            <h4>din 2011 până în prezent</h4>
                            <hr class='colored'>
                            
                        </div>    
                        <div class='modal-body' align='justify'>";
    $text .= $user[$current]["pub"];
    $text .= "<center><button type='button' onclick='reloadFunction()' class='btn btn-outline-invers' data-dismiss='modal'><i class='fa fa-times'></i> Pagina principală</button></center>
                    	</div>
               		</div>
               	</div>
            </div>
        </div>
    </div>";
	return $text;
}
?>