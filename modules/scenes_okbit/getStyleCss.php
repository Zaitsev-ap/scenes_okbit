<?php
if(isset($_GET['template'])){
	
		$xml = simplexml_load_file('../../templates/scenes_okbit/sc_templates/'.$_GET['template'].'/templateDetails.xml');

		foreach ($xml as $css) {			
			$temp_rec = $css->name;
			if ($temp_rec){
				echo "obj.options[obj.options.length] = new Option('$temp_rec','$temp_rec');\n";
			}
		}		
      }    
?> 