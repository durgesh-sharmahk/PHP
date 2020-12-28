<?php
for($r=0; $r<20; $r++){
    for($c=0; $c<=20; $c++){
        if( $c==1 || (($r==0 || $r==19)&& ($c>=1 && $c<18)) || ($c==18 && $r!=0 && $r!=19)){
            echo "*";
        }else{
            echo "&nbsp&nbsp";
        }

    }
    echo "<br>";
}
?>