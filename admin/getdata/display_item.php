<?php

function display_item($user,$current)
{

	$text = "
			<div class='col-sm-6 portfolio-item'>
					<center><table>
					<tr><td height='150'>";
	$text .= "<center><img src='../img/portfolio/".$current.".jpg' class='img-responsive' alt='' height=20px></center>";
	$text .= "</td></tr>
					<tr><td height='75'>
						<center><h4>";
	if (strlen($user[$current]["name"]) > 2)
	{
		$text .=  $user[$current]["name"];
	};

	$text .=  "</h4>";
							
	if (strlen($user[$current]["info"]) > 2)
	{
		$text .=  $user[$current]["info"];
	};
	$text .= "</center>
			</td></tr>
			<tr><td height='50'>
				<center>
	            <ul class='list-inline'>                        
	                            
				<li><a href='main.php?edit_person=".$current."' class='btn btn-lg btn-outline-invers' data-toggle='modal'>
					<i class='fa fa-edit fa-fw' aria-hidden='true'></i>
					&nbsp; Edit	
					</a>
									
				</li>
	        </ul>
			</center>
	</td></tr>
	</table></center></div>";
	return $text;
}

?>