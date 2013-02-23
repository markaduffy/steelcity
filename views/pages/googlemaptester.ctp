 <?php      
<<<<<<< HEAD
 		$default = array('type'=>'0','zoom'=>13,'lat'=>'40.4406','long'=>'-79.9961','content'=>'Thanks for using this');
=======
 		$default = array('type'=>'0','zoom'=>15,'lat'=>'40.4406','long'=>'-79.9961','directions_div'=>'directions_div');
>>>>>>> 65c357f2d77d6bdd93adcd15a423709976b513a9
        $points = array();
		
		//$points[0]['Department of Public Works Drop-Off Center Knoxville Center'] = array('longitude' =>$default['40.413235'],'latitude' =>$default['-79.993014']);
		//$points[1]['Department of Public Works Drop-Off Center East End Center'] = array('longitude' =>$default['40.456264'],'latitude' =>$default['-79.904742']);
		//$points[2]['Department of Public Works Drop-Off Center Hazelwood Center'] = array('longitude' =>$default['40.42499'],'latitude' =>$default['-79.95305']);
		//$points[3]['Department of Public Works Drop-Off Center West End Center '] = array('longitude' =>$default['40.439016'],'latitude' =>$default['-80.045605']);
		//$points[4]['Department of Public Works Drop-Off Center Strip District '] = array('longitude' =>$default['40.461111'],'latitude' =>$default['-79.972959']);
		
		
        $key = $this->GoogleMap->key;
        echo $javascript->link($this->GoogleMap->url);
        echo $this->GoogleMap->map($default,'width: 600px; height: 400px');
        echo $this->GoogleMap->addMarkers($points);
        echo $this->GoogleMap->moveMarkerOnClick('StructureLongitudine','StructureLatitudine');
<<<<<<< HEAD
		
?>

=======
?>
>>>>>>> 65c357f2d77d6bdd93adcd15a423709976b513a9
