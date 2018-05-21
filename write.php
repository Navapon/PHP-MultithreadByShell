<?php 
    ini_set('memory_limit', '-1');

    class BuildToText {

        private $texts;
        private $loops;

        function __construct($loops,$texts){
            $this->loops = $loops;
            $this->$texts = $texts;
        }

        // write text to file txt
        public function writeToText (){
            $random =  rand(1, 3000000);
            $myfile = fopen("file-".$random.".txt", "w") or die("Unable to open file!");

            for($i = 0 ; $i < $this->loops;$i++){
                $texts  .= $i . "\n" ;
            }
        
            fwrite($myfile,$texts);
            fclose($myfile);
        }
    }

    // micro time start
    $time_start = microtime(true); 

    // call class and send parameter number of loop
    $build = new BuildToText(30000000,"");
    $build->writeToText();

    // microtime end
    $time_end = microtime(true);
    
    //dividing with 60 will give the execution time in minutes otherwise seconds
    $execution_time = ($time_end - $time_start)/60;
    
    //execution time of the script
    echo ' Total Execution Time : '.$execution_time.' Mins \n';
    
?>
