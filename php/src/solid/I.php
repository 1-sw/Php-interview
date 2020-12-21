<?php

//SIMPLE DEMO
$checker = function($cond)
  {
    if( match($cond){
      '8.0' => "Oh no!",
       "run" => true,
    }){
      return true;
    }
  };


if(is_bool($checker("run"))){
  echo "Job done!\n";
}



//STRANGE DEMO

function main(){
 $num=1;
  echo match($num){
    1 => match(2){
      2 => match(3){
        3 => match(4){
            4 => main()
        }
      }
    }
  };
}
main();
?>
