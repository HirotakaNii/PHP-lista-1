	<?php
	$alt1=1.50;
	$alt2=1.70;
	$alt3=1.95;
	
	$idade1=10;
	$idade2=20;
	$idade3=25;
	$idade4=53;
	$idade5=92;
	$idade6=83;
	
	$sex1="fem";
	$sex2="fem";
	$sex3="fem";
	$sex4="max";
	$sex5="max";
	$sex6="max";
	$t= 0;
	$m=0;
	$cont= 0;
	$cont2=0;
	$media= 0;
	
	


	while ($cont<5){



	if ( $alt1>$alt2){

	$t = $alt1;
	$alt1=$alt2;
	$alt2 = $t;
	}
	elseif ($alt2>$alt3){

	$t = $alt2;
	$alt2= $alt3;
	$alt3 = $t;
	}



	$cont++;
	}

	echo "$alt3 $alt1";

    if( $sex = "Fem"){

       $media=($alt1+$alt2+$alt3)/3;    



	}

      echo("<br/> media feminin  $media\n");





      while ($cont<10){



	if ( $idade1<$idade2){

	$t = $idade1;
	$idade1=$idade2;
	$idade2 = $t;
	}
	elseif ($idade2<$idade3){

	$t = $idade2;
	$idade2= $idade3;
	$idade3 = $t;
	}


	$cont++ ;
	
    }
     


	echo("$idade3 ");
 	
    
  
   while ($cont2<10){



	if ( $idade4>$idade5){

	$m = $idade4;
	$idade4=$idade5;
	$idade5 = $m;
	}
	elseif ($idade5>$idade6){

	$m = $idade5;
	$idade5= $idade6;
	$idade6 = $m;
	}


	$cont2++ ;
	
    }
     
echo("$idade5 $idade6 ");

     
 	?>