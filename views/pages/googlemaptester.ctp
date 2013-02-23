 <?php      
 		$default = array('type'=>'0','zoom'=>13,'lat'=>'42.5846353751749','long'=>'11.5191650390625');
        $points = array();
        $points[0]['Point'] = array('longitude' =>$default['long'],'latitude' =>$default['lat']);
        $key = $this->GoogleMap->key;
        echo $javascript->link($this->GoogleMap->url);
        echo $this->GoogleMap->map($default,'width: 600px; height: 400px');
        echo $this->GoogleMap->addMarkers($points);
        echo $this->GoogleMap->moveMarkerOnClick('StructureLongitudine','StructureLatitudine');
?>