<?php
include './function.php';
chesTable();


$arr=['a','b','c','d','e','f','g','h'];
      for($i=8;$i>0;$i--){
          foreach($arr as $key){
             echo '<pre>';
             print_r(getValidKnightSquares($key.$i));
             
         }
      }


