<script>
	function showMessageSave() {
		alert('SAVE SUCCESSFUL');
		window.location.href = "main.php";
	}
</script>

<?php

function edit_text($current,$content)
{	

	$text = "<section class='success'>";

	$text .= "<center><h4>Edit data of </h4><h1>".$current."</h1></center>";
	$text .= "</section>";

	$text .= "<section>";
	$text .= "<div>";

	$text .= "<form method='post' action='main.php?edit_text=".$current."'>
			<br />
		  	<textarea id='texttosave' name='texttosave' rows='15' cols='80'>".$content[$current]."</textarea>
			<br />
			<center>
			<input type='hidden' name='togo' value='preview'/>
			<input type='submit' class='btn btn-lg btn-outline-invers' name='save' value='Preview' />
			<input type='reset'  class='btn btn-lg btn-outline-invers' name='reset' value='Reset' />
			</center>
			</form>

		</div>";

	$text .= "
	</section>

	<section class='success'>


	</section>

	<section>";

		
	if(isset($_POST['togo'])) 
	{
		if (($_POST['togo']) == "preview" ) {
			$text .= "<center>";	
			$text .="<div>
						<h1>".$current."</h1>
					</div></center>";

			$texttosave = $_POST['texttosave'];		
		    $text .="<div>
						". $texttosave ."
					</div>";
			$text .= "<form method='post' action='main.php?edit_text=".$current."'>";
			$text .= "<input type='hidden' name='togo' id='togo' value='save'>";
			$text .= "<input type='hidden' name='texttosave' id='texttosave' value='".$texttosave."''>";
			$text .= "<center><input type='submit' class='btn btn-lg btn-outline-invers' name='save' value='Save as'></center>";
			$text .= "</form>";
				
			$text .= "<br/>";
		}
	
		elseif (($_POST['togo']) == "save" ) {		




			$texttosave = $_POST['texttosave'];		
    		// -------------------------------------------------------
	    	// write to files from here
    		// -------------------------------------------------------

	    	$file = "../data/".$current.".txt";
			$myfile = fopen($file, "w") or die("Unable to open file!");			
			fwrite($myfile,$texttosave);
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