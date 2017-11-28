<?php

namespace AppBundle\Controller;
//use AppBundle\Utils\Tools;
use AppBundle\Entity\Sites;
use AppBundle\Entity\ApiUsers;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query\ResultSetMapping;


class DefaultController extends Controller
{


Private $URL ="https://maps.googleapis.com/maps/api/geocode/json?address=";
Private $PROXY_SERVER ='10.25.3.19:8080';
Private $PROXY_CREDENTIALS ='energy\ppe.orders:L3ft4G00dJ0bInTh3C1ty';
Private $coords;
Private $key = 'key=AIzaSyC-YDlzhlk-8xSUbNU2eTrqC2a3JwNCanA';
   private $amenities; 
   private $currentLocation;  
    private $networks;
    private $vehicles;
    private $coordsarray=false;
    
    /**
     * @Route("/", name="api")
     */
    public function indexAction(Request $request)
    {  
	
	if($request->get('amenities')){

	$this->amenities = explode(',',$request->get('amenities'));  

	}


if($request->get('name')){

$userDetails = array('name'=>$request->get('name'),
		     'email'=>$request->get('email'),
		     'business'=>$request->get('business'),
		     'jobTitle'=>$request->get('jobTitle'),
		     'contactNo'=>$request->get('contactNo')
		     );
$validated= $this->parseForm($userDetails);

}	

if ($request->request->get('coords')){
	
	$this->coords = json_decode($request->request->get('coords'),true);

		}
	if ($request->get('coords')){
	$this->coords = json_decode($request->get('coords'),true);
 
		if (count($this->coords)>=1){	
	
		$this->coordsarray =true; 

		}else{
 	
		$this->coords=rtrim($this->coords,']');

		}	
$this->currentLocation= $this->coords[0];	
}

	$postcode = $request->get('postcode');
	$distance=$request->get('distance');
	//if ($coords !=""){

//	$this->coords=$coords;

//	}
	 
        if ($postcode ==""){


        }   

		
//check if optional parameters have been added
           $network= $request->get('network');
           $vehicle = $request->get('vehicle');
            if(isset($vehicle)){
            $this->vehicles=$this->filterVehicle($vehicle);
             }      
            if (isset($network)){
                $this->networks=explode(',',mysql_escape_string($network));
             }         
        $sites = $this->listSites();       
	if(isset($this->coords)){
	
	//$localsites['coordinates'] = array_slice($this->filterResults($this->coordinates($sites),$distance),0,49);
	$localsites['coordinates'] = $this->filterResults($this->coordinates($sites),$distance);

	}else{
	
 	//$localsites['postcode']=array_slice($this->filterResults($this->postcodes($sites,$postcode),$distance),0,49);
	$localsites['postcode']=$this->filterResults($this->postcodes($sites,$postcode),$distance);
	}
	 $response = new Response();
        $response->setContent(json_encode($localsites));
       	$response->headers->set('Access-Control-Allow-Origin', '*'); 
	$response->headers->set('Content-Type', 'application/json');
        return $response;  


	//$localsites = array_slice($localsites,0,3);
//	die(json_encode($localsites, JSON_PRETTY_PRINT));     
      // return matching sites as JSON
  //       return $this->render('api/index.html.twig',array('sites'=> json_encode($localsites,JSON_FORCE_OBJECT|JSON_PRETTY_PRINT)) );    
  	  }

	private function filterVehicle($vehicle){
	$temp = array();
 	$vehicles=explode(',',$vehicle);
		foreach($vehicles as $v){
			switch ($v){
			case 'hgv': $temp[]='hgv';break;
			case 'lgv': $temp[]='hgv_lgv';break;
			case 'lvc': $temp[]='lvc';break;
			}	
		} 
	return $temp;

	}    

private function parseForm($details){
$mandatory=array('name','email','business','jobTitle');
	$apiUser= new ApiUsers();
	foreach($details as $key=> $detail){
	
		if($detail=="" && in_array($key,$mandatory)){
		die('incomplete mandatory field');
		} 
	$key=ucwords($key);
	$function="set".$key;	
	$apiUser->$function($detail);
	}

$em=$this->getDoctrine()->getManager();
$em->persist($apiUser);
$em->flush();
die('success');

}




//filter results by given distance and sorted ascending
    private function filterResults($results,$distance)
    {
    $store=array();
    $distances = array();        
    $c=0;        

	foreach ($results as $result){
       
	if($this->coordsarray){
       	$temp=array();   
	for($i=0;$i<count($result);$i++){
        

	if ($result[$i]["lonlatDistance"] <= $distance){
	   $store[] = $result[$i]; 
	  }              
            }
    	}else {	
		if ($result["Distance"] <= $distance){
    	                $store[] = $result;
    	 	}                            
    	 }
	$c++;
	}
        foreach ($store as $site){
        $distances[] = $site["Distance"];
        }      
    	$store = array_map("unserialize",array_unique(array_map("serialize",$store)));
	array_multisort($distances,SORT_NUMERIC,SORT_ASC,$store);
	return $store;
   
	}

    
    /*get list of all fuelcard sites from database  
     *calculates distance for each site from given postcode
    */
   
 private function listSites($postcode=""){
        
      $rsm = new ResultSetMapping();
      $rsm->addEntityResult('AppBundle:Sites','f');
      $rsm->addFieldResult('f','id','id');
      $rsm->addFieldResult('f','site_name','siteName');
      $rsm->addFieldResult('f','abbule','abbule');
      $rsm->addFieldResult('f','lubricants','lubricants');
      $rsm->addFieldResult('f','gas','gas'); 
      $rsm->addFieldResult('f','network','network');
      $rsm->addFieldResult('f','lat','lat');
      $rsm->addFieldResult('f','lng','lng');
      $rsm->addFieldResult('f','hgv','hgv');
      $rsm->addFieldResult('f','hgv_lgv','hgvLgv');
      $rsm->addFieldResult('f','lvc','lvc');
      $rsm->addFieldResult('f','twentyfour','twentyfour');
      $rsm->addFieldResult('f','shop','shop');
      $rsm->addFieldResult('f','toilets','toilets');
      $rsm->addFieldResult('f','postcode','postcode');
      $rsm->addFieldResult('f','location_type','locationType');
          
    $query="SELECT id,site_name,network,lat,lng,hgv
		  ,hgv_lgv,lvc,twentyfour,shop,toilets
		  ,postcode,location_type,abbule,
		   lubricants,gas FROM sites ";
        $em = $this->getDoctrine()
               ->getManager(); 
      $net=false;
        if (is_array($this->networks)){
            $net=true;
            $query .="where";
            foreach($this->networks as $network){
            	if ($network !==''){
		if ($network=='cross'){
		$network = "cross'  or network ='esso ";
		} 
		
		$query .=" network='".$network."' or ";
		}            
}     
        $query = rtrim($query,' or');
        }

        if (is_array($this->vehicles)){
            $query2="";
  //  if (in_array($vehicle,array('hgv','lvc','hgv_lgv'))){

         
   foreach ($this->vehicles as $vehicle){
  if (in_array($vehicle,array('hgv','lvc','hgv_lgv'))){
          
	//	if (in_array($vehicle,array('hgv','lvc','hgv_lgv'))){
		$query2 .=" ".$vehicle.'=1 or ';
           
		}
}          
  $query2=rtrim($query2,' or');
            if ($net===true){         
            //$sites->andWhere($query2);
            $query .=' AND ('.$query2.')';
            }else{
               // $sites->where($query2);
            $query.=" WHERE ".$query2;
            }
	}

    //   }
//	$query2 = rtrim($query2,' or');	    
  		if(is_array($this->amenities)){
		$query3="";
			foreach($this->amenities as $a){

				if (in_array($a,array('shop','twentyfour','toilets','adblue','gas','lubricants'))){
					if($a=="adblue"){
					$a = "abbule";
					}
				$query3 .=" ".$a."=1 and ";
				}	
			}
		$query3= rtrim($query3, ' and');	
			if($net || $query2!="" && $query3!="" ){
			$query .= " AND ".$query3;
			}else{
			if ($query3!==""){		
			$query .=" WHERE ".$query3;	
			}
			}
        
	} 
//echo $query;	     
return $em->createNativeQuery($query,$rsm)->getResult();
        }
		

	private function coordinates($sites){	 
	
	if (is_array($this->coords)!=false){
	$coords=array();	

	$localsites=array();	
	
	foreach($this->coords as $user){
	$localsites=array();
        foreach ($sites as $site ){


	$calcdistance= $this->calculateDistance($user['lat'],$user['lng'], $site->getLat(),$site->getLng());

       	$localsites[] = array(
		 'Id'=>$site->getId(),
		'lonlatDistance' =>$calcdistance,
		'Distance'=>$this->calculateDistance($this->currentLocation['lat'],$this->currentLocation['lng'], $site->getLat(),$site->getLng()),
        	'Sitename' => $site->getSiteName(),
		'Location Type'=>$site->getLocationType(),
		'Network' => $site->getNetwork(),
        	'Hgv' => $site->getHgv(),
        	'Lgv' => $site->getHgvLgv(),
        	'Lvc' => $site->getLvc(),
        	'Postcode' => $site->getPostcode(),
        	'Lng'=> $site->getLng(),
        	'Lat'=> $site->getLat(),
	//	'Adblue'=>$site->getAbbule(),
	//	'GasOil'=>$site->getGas(),
	//	'Lubricants'=>$site->getLubricants(),
	
        	 'Amenities' => array('TwentyFour'=> $site->getTwentyfour(),
                                 'Shop'=>$site->getShop(),
                                 'Toilets'=>$site->getToilets(),
				 'Adblue'=>$site->getAbbule(),
                'GasOil'=>$site->getGas(),
                'Lubricants'=>$site->getLubricants()
                            
)
                        );
       		 }

		$coords[]=$localsites;
		}
		return $coords;
	
	}
	}  
 
private function postcodes($sites,$postcode){

$user = $this->getLongLat($postcode);
        $localsites=array();
        foreach ($sites as $site ){
        $site->getSiteName();
        $localsites[] = array(
	'Id'=>$site->getId(),
	'Distance' => 
        $this->calculateDistance($user['lat'],$user['lng'], $site->getLat(), $site->getLng()),

 'Location Type'=>$site->getLocationType(),       
 'Sitname' => $site->getSiteName(),
        'Network' => $site->getNetwork(),
        'Hgv' => $site->getHgv(),
        'Lgv' => $site->getHgvLgv(),
        'Lvc' => $site->getLvc(),  
       	'Postcode' => $site->getPostcode(),
	'Lng'=> $site->getLng(),
	'Lat'=> $site->getLat(),
 	//'Adblue'=>$site->getAbbule(),
          //      'GasOil'=>$site->getGas(),
            //    'Lubricants'=>$site->getLubricants(),


	 'Amenities' => array(    'TwentyFour'=> $site->getTwentyfour(),
                                 'Shop'=>$site->getShop(),
                                 'Toilets'=>$site->getToilets(),
				 'Adblue'=>$site->getAbbule(),
		                'GasOil'=>$site->getGas(),
                		'Lubricants'=>$site->getLubricants()
                         
   )
                        );
        }

	return $localsites;
    }

	

    //API call to Goole maps api for provided location
    private function getLongLat($postcode)
    {
        $utils = $this;
 	$url = $utils->URL.$postcode."unitedkingdom&".$utils->key;  
 	$proxy =$utils->PROXY_SERVER;
        $loginpassw = $utils->PROXY_CREDENTIALS;
        $cookie_file_path = "cookies.txt";
        $headers[] = "Accept: */*";
        $headers[] = "Connection: Keep-Alive";
        $options = array(
                    CURLOPT_HTTPHEADER=> $headers,
                    CURLOPT_HEADER=> 0,
                    CURLOPT_SSL_VERIFYHOST=> 0,
                    CURLOPT_SSL_VERIFYPEER=> false,
                   // CURLOPT_PROXYAUTH=> CURLAUTH_NTLM,
                   // CURLOPT_PROXYTYPE=> CURLPROXY_HTTP,
                   // CURLOPT_PROXY=> $proxy,
                   // CURLOPT_PROXYUSERPWD=> $loginpassw,
                    CURLOPT_RETURNTRANSFER=> 1,
                    CURLOPT_FOLLOWLOCATION=> 1,
                    CURLOPT_COOKIEFILE=> $cookie_file_path,
                    CURLOPT_COOKIEJAR=> $cookie_file_path,
                    CURLOPT_FOLLOWLOCATION=> true,
                    CURLOPT_AUTOREFERER=> true,
                    CURLOPT_URL=> $url
                );
        $ch = curl_init();
        curl_setopt_array($ch,$options); 
        return $this->getLocation(curl_exec($ch));
    }
    
    //parse Google results and pull lng and lat from first result
    private function getLocation($json){
    $api=json_decode($json,true);
    $location=$api["results"];
	if ($api['status']=='ZERO_RESULTS'){
	die('no results');
	}    
	$coords=$location[0]["geometry"]["location"];
 	return array('lat'=>$coords["lat"],'lng'=>$coords["lng"]);
    }  
    

    //calculate the distance between 2 sets of coordinates
    private function calculateDistance($lat1,$lon1,$lat2,$lon2){
   
      $R = 6371; // Radius of the earth in km
         $dLat = $this->deg2rad($lat2-$lat1);  // deg2rad below
         $dLon = $this->deg2rad($lon2-$lon1); 
         $a = sin($dLat/2) * 
         sin($dLat/2) + 
         cos($this->deg2rad($lat1)) * 
         cos($this->deg2rad($lat2)) * 
         sin($dLon/2) * 
         sin($dLon/2); 
         //circumference
         $c = 2 * atan2(sqrt($a), sqrt(1-$a)); 
         //distance in km
         $d = $R * $c; // Distance in km
	$miles = $d * 0.621;    
 	return $miles;
    }

    //convert degrees to radian
    private function deg2rad($deg) {
    
    $deg = floatval($deg);
    $pi = pi();
    return $deg * ($pi /180);
    
    }




    

}
