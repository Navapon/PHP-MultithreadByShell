<?php 

    // number of thread 
    $max_thread = 8 ;

    //logs out put from file write.php command will not wait shell exec
    $cmd = 'nohup nice -n 10 php -f write.php >> /dev/null & printf "%u" $!';
    
    for ( $i =0 ; $i < $max_thread; $i ++) {

        // async exec shell return pid
        $pid = shell_exec($cmd);

        echo ' PID is : '.$pid ;
    }