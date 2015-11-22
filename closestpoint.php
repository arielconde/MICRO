<?php 

	class Location {
	    private $latitude;
	    private $longitude;
	    public function __construct($latitude, $longitude) {
	        $this->latitude = deg2rad($latitude);
	        $this->longitude = deg2rad($longitude);
	    }
	    public function getLatitude() {
	    	return $this->latitude;
	    }
	    public function getLongitude() {
	    	return $this->longitude;
	    }
	    public function getDistanceInMetersTo(Location $other) {
	        $radiusOfEarth = 6371000;// Earth's radius in meters.
	        $diffLatitude = $other->getLatitude() - $this->latitude;
	        $diffLongitude = $other->getLongitude() - $this->longitude;
	        $a = sin($diffLatitude / 2) * sin($diffLatitude / 2) +
	            cos($this->latitude) * cos($other->getLatitude()) *
	            sin($diffLongitude / 2) * sin($diffLongitude / 2);
	        $c = 2 * asin(sqrt($a));
	        $distance = $radiusOfEarth * $c;
	        return $distance;
	    }
	    
	}

	$locations = array(new Location(12, 15), new Location(15, 18), new Location(18, 21));
	$minIndex = 0;
	$shortestDist = $locations[0]->getDistanceInMetersTo($locations[1])/1000;
	for($i = 1; $i < 3; $i++) {
		$long = $locations[$i]->getLongitude();
		$lat = $locations[$i]->getLatitude();
		$dist = $locations[0]->getDistanceInMetersTo($locations[$i])/1000;
		if($dist < $shortestDist) {
			$shortestDist = $dist;
			$minIndex = $i;
		}

	}
	echo $shortestDist;

?>