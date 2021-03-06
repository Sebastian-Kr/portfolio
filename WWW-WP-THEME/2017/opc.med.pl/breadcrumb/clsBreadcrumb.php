<?php
/**
 * PHP class for processing Breadcrumbs
 * It will 
 * Developed using PHP 5 (http://www.php.net/) 
 * 
 *
 * Version 1.0 April 14, 2009
 * 
 * 
 * For assistance please contact:
 * Also if you would like leave me a message if you are using this class 
 * Support <njau_ndirangu(at)yahoo.com>
 * 
 *
 * Please keep this header information here
 *
 * Description: This class can generate bread crumb like navigation trails
 * It outputs an HTML ordered list of navigation links managed by CSS. 
 *
 * 
 * Usage:
 * session_start();
 * $nav = new breadcrumb();
 * $nav->url_count=10 change total of links displayed on the page
 * $output=$nav ->add("descriptive name", "/page_url.php");
 * echo $output;
 * 
 * Example CSS: 
 * #breadcrumb ul li{
 *   list-style-image: none;
 *   display:inline;
 *   padding: 0 3px 0 0; 
 *   margin: 3px 0 0 0;
 * }
 *
 * #breadcrumb ul{
 *   margin:0;padding:0;
 *   list-style-type: none;
 *   padding-left: 1em;
 * }
 */

class Breadcrumb{

   
   public  $separator = '<div class="brc-separate"></div>';
   public $reset=false;//reset the $_session variable 
   private $crumbs = array();
   private $url_count=5;// number of links allowed on the page
   private $homepage="/index.php";


   /*
    * Constructor
    */
   public function __construct(){  
   
      if (!empty($_SESSION['breadcrumb'])){
      	
         $this->crumbs =$this->safe_array_merge($this->crumbs,$_SESSION['breadcrumb']);
      } 
      if($this->reset){
      	
      	$this->unset_variable();
      }
   
   }
   /*
    * reset the $_session variable
    * 
    * 
    * 
    * 
    */
	public function reset_variable(){
		
		if($this->reset){
			
			$this->unset_variable();
		}
	}
   /*
    * Add a crumb to the trail: 
    * @param $label - The string to display
    * @param $url - The url underlying the label
    * 
    * 
    */
   public function add($label, $url){

      $crumb = array();
      $crumb[$label] = $url;

      if (empty($_SESSION['breadcrumb'])){ 
      	     
			
        
         if (!isset($_SESSION['breadcrumb']['<div id="brc-home"></div>'])){ //If there's no session data yet, assume a homepage link
				
            $this->crumbs['<div id="brc-home"></div>'] = $this->homepage;
            $_SESSION['breadcrumb']=$this->crumbs;

         }
         
      }
     
        
         $check_duplicate=$this->check_duplicate($crumb, $_SESSION['breadcrumb']);
        
         
         if($check_duplicate > 0){
         	
         	$break_array=$this->break_array($_SESSION['breadcrumb'],$crumb);
         	
         	$array_merge=$this->safe_array_merge($break_array,$crumb);
         	//clear session variable
         	 //and prepare the session variable to be loaded with the exact information location
         	$this->unset_variable();
         	
         	$output=$this->output($break_array,$label,$url);
         	
         	
         	//put the merged array in the session variable
         	//this is where the user is at the moment
         	 $_SESSION['breadcrumb'] =$array_merge;
         	 
         	
         }else {
         	
         	
         	$output=$this->output($_SESSION['breadcrumb'],$label,$url);
         	
         	 $_SESSION['breadcrumb'] = $this->safe_array_merge($_SESSION['breadcrumb'],$crumb);
         	
         	 
         }
               
      
    

        //return the output
        
        return $output;
        
   }

   /* 
    * Output a semantic list of links.  See above for sample CSS.  Modify this to suit your design.
    */
   private  function output($array,$label,$url){
   	
   
   
   	$count=0;

   	$link .='<ul>';
   	
   	foreach ($array as $key=>$value){
   		$count++;
   		
   		if($count < $this->url_count){
   			
   			$link .="<li><a href='".$value."' title='".$key."'>".$key."</a>".$this->separator."</li>";
   		}
   		
   	}
   	//attach the last link
   	
   	$link .="<li>$label</li> ";
	$link .="</ul>";
	
	return $link;
   }
   
   /**
		*This part will check for repeated values in $_SESSION array
		* The idea is to check if the label and link are identical
		* If they are identical that will mean that some one went back on the trail
		* This function will pop out the other trails to show the remaining ones
		* 
		* 
		* @param 
		* @access private
		* 
		*/ 
   
   private function check_duplicate($array1,$array2){
   	
   	
   	 $array=array_intersect_assoc($array1, $array2);
   	 
   	 //return the number of occurences
   	 return count($array);
   }
   
   /**
     *merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one.
     *If the input arrays have the same string keys, then the later value for that key will overwrite the previous one.
     *
     * @return merge array
     * @access private
     * 
     * 
     * 
     * */
	private  function safe_array_merge($array1,$array2)
	{
		return array_merge($array1, $array2);
		
	}
	
	/**
		* This section will check the exact position in the array where the user went back on the trail
		* 
		* The rest will be dumped and the new link started from there
		* 
		* @param 
		* @access private
		* 
		*/ 
	private function break_array($array1,$array2){
		
		
		$count=0;
		foreach ($array1 as $key=>$value){
			$count++;
			if(($value == $array2[$key])){
				
				$num=$count;
			}
			
			
		}
		
		 while((count($array1)+1) > ($num)){

           	array_pop($array1); //prune until we reach the $level we've allocated to this page

         }
		
		return $array1;
	}
	
	
	/**
     * Unsets $_SESSION variable
    
     */
	private  function unset_variable()
	{
			$_SESSION['breadcrumb']=null;
			unset($_SESSION['breadcrumb']);
		
	}
}
?>
