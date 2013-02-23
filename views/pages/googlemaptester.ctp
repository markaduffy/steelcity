 <?php      
 		$default = array('type'=>'0','zoom'=>15,'lat'=>'40.4406','long'=>'-79.9961','directions_div'=>'directions_div');
        $points = array();
        $points[0]['Point'] = array('longitude' =>$default['long'],'latitude' =>$default['lat']);
        $key = $this->GoogleMap->key;
        echo $javascript->link($this->GoogleMap->url);
        echo $this->GoogleMap->map($default,'width: 600px; height: 400px');
        echo $this->GoogleMap->addMarkers($points);
        echo $this->GoogleMap->moveMarkerOnClick('StructureLongitudine','StructureLatitudine');
?>
