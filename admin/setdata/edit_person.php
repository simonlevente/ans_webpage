<script>
	function showMessageSave() {
		alert('SAVE SUCCESSFUL');
		window.location.href = "main.php";
	}
</script>

<?php

function edit_person($user,$current)
{	

	$text = "

		<section class='success'>";

		$text .= "<center><h4>Edit data of </h4><h1>".$user[$current]['name']."</h1></center>";
		$text .= "</section>";


		$text .= "<section>";

			$text .= "<div>";

				$text .= "<form method='post' action='main.php?edit_person=".$current."'>";
				$publist = $user[$current]["pub"];
	            $text .= "<center><table>";
	            $text .= "<tr>";
	            $text .= "<td width=200px> Name </td>";
	            $text .= "<td><div class='input-pub'><input type='text' name='name' id='name' value='".$user[$current]['name']."''></div></td>";
	            $text .= "</tr>";
	            $text .= "<tr>";
	            $text .= "<td width=200px> Info </td>";
	            $text .= "<td><div class='input-pub'><input type='text' name='info' id='info' value='".$user[$current]['info']."''></div></td>";
	            $text .= "</tr>";
	            $text .= "<tr>";
            	$text .= "<td width=200px> Website </td>";
            	$text .= "<td><div class='input-pub'><input type='text' name='website' id='website' value=".$user[$current]["website"]."></div></td>";            	
            	$text .= "</tr>";
            	$text .= "<input type='hidden' name='togo' id='togo' value='preview'>";
				$text .= "</table></center>";

			$text .= "
			<br />
			<br />

			<div>
				<center><h4>Publication list</h4></center>	
			</div>

			<br />
		  	<textarea id='publist' name='publist' rows='15' cols='80'>".$publist."</textarea>
			<br />
			<center>
			<input type='submit' class='btn btn-lg btn-outline-invers' name='save' value='Preview' />
			<input type='reset'  class='btn btn-lg btn-outline-invers' name='reset' value='Reset' />
			</center>
			</form>

		</div>

	</section>

	<section class='success'>


	</section>

	<section>";


		
	if(isset($_POST['togo'])) 
	{
		if (($_POST['togo']) == "preview" ) {
			$text .= "<center>";
			$name = $_POST['name'];
			$text .= "<h1>$name</h1>";
			$info = $_POST['info'];

			$text .= "<h4>$info</h4>";
			$website = $_POST['website'];

			$text .= "<a href='".$website."' target=_blank>$website</a>";
		    $sContent = $_POST['publist'];
		    $text .= "</center>";

		    $text .="<div>
						<center><h4>Publication list</h4></center>	
						". $sContent ."
					</div>";
			$text .= "<form method='post' action='main.php?edit_person=".$current."'>";
			$text .= "<input type='hidden' name='name' id='name' value='".$name."''>";
			$text .= "<input type='hidden' name='togo' id='togo' value='save'>";
			$text .= "<input type='hidden' name='info' id='info' value='".$info."''>";
			$text .= "<input type='hidden' name='website' id='website' value='".$website."''>";
			$text .= "<input type='hidden' name='publist' id='publist' value='".$sContent."''>";
			$text .= "<center><input type='submit' class='btn btn-lg btn-outline-invers' name='save' value='Save as'></center>";
			$text .= "</form>";
				
			$text .= "<br/>";
		}
	
		elseif (($_POST['togo']) == "save" ) {

			//$text .= "write to file";
			$getfile = $user[$current]["getfile"];

			//$text .= "<h1>$getfile</h1>";
			$name = $_POST['name'];
			//$text .= "<h1>$name</h1>";
			$info = $_POST['info'];

			//$text .= "<h4>$info</h4>";
			$website = $_POST['website'];

			//$text .= "<a href='".$website."' target=_blank>$website</a>";
	    	$sContent = $_POST['publist'];
	    	//$text .= $sContent;

    		// -------------------------------------------------------
	    	// write to files from here

	    	$file = "../data/".$current.".txt";
			$myfile = fopen($file, "w") or die("Unable to open file!");			
			$txt = $name."\n";
			fwrite($myfile, $txt);	
			$txt = $info."\n";
			fwrite($myfile, $txt);
			$txt = $website."\n";		
			fwrite($myfile, $txt);
			$txt = strval($getfile + 1)."\n";
			fwrite($myfile, $txt);
			fclose($myfile);

			
			$file_pub = "../data/".$current."_".strval($getfile + 1).".txt";
			//$file_pub = "../data/".$current."_pub.txt";
			$myfile = fopen($file_pub, "w") or die("Unable to open file!");
			$txt = $sContent;
			fwrite($myfile, $txt);
			fclose($myfile); 
	    	echo '<script type="text/javascript">',
     			'showMessageSave();',
     		'</script>';
		} 
		
		
	}
	else 
	{
		$text .= "<center>Edit and preview to save as.</center>";
	}
	$text .="
	</section>

	<section class='success'>


	</section>


	<section>

	</section>";


	return $text;
}
?>