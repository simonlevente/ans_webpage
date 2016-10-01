<?php


function display_item($user,$current){

	$text = "<div class='col-sm-6 portfolio-item'>
					<center><table>
					<tr><td height='150'>";
	$text .= "<center><img src='img/portfolio/".$current.".jpg' class='img-responsive' alt='' height=20px></center>";
	
	$text .= "</td></tr>
					<tr><td  height='75'>
						<center>
							<h4>";					

	if (strlen($user[$current]["name"]) > 2)
	{
		$text .= $user[$current]["name"];
	};


	$text .= "</h4>";

	if (strlen($user[$current]["info"]) > 2)
	{
		$text .=  $user[$current]["info"];
	};

	$text .= "</center>
					</td></tr>
					<tr><td height='50'>
						<center>
	                    <ul class='list-inline'>                           
	                            
							<li>
								<a href='#publicatii".$current."' class='btn btn-lg btn-outline' data-toggle='modal'>
								<i class='fa fa-book fa-fw' aria-hidden='true'></i>
									&nbsp; Publicații	
								</a>
								
									
							</li>";
	if (strlen($user[$current]['website']) > 2)
	{
		$text .= "<li>
			<a href=" . $user[$current]["website"]. " target='_blank' class='btn btn-lg btn-outline'>
				<i class='fa fa-hand-pointer-o' aria-hidden='true'></i>
					&nbsp; Website
			</a>
			</li>";
	};
	$text .= "<ul></center>
					</td></tr>
					</table></center></div>";
	return $text;
}
?>