<?php

function chesTable(){
    $chesT=[];
    echo "<table width=400 height=400 border=1>";
    $col=8;
    $row='abcdefgh';

  // chestable start
  for($i=strlen(($row));$i>0;$i--) //row
  {
      echo "<tr>";
      for($j=0;$j<$col;$j++) //coll
      {
          $box=$i+$j;
          if($box%2==1)
          { 
             array_push($chesT,($row[$j].$i));
             echo "<td bgcolor=lime > $row[$j] $i</td>"; }
             else{ 
              array_push($chesT,($row[$j].$i));
              echo "<td>  $row[$j] $i</td>";}
          }
          echo "</tr>";
      }
  echo "</table>";


    }
    function getValidKnightSquares($strStartingSquare) {
        echo 'atin oldugu yer: '.$strStartingSquare.' <br>';
        $strColNames = 'abcdefgh';
        $intColVal = strpos($strColNames,substr($strStartingSquare,0,1))+1;
          
        $intRowVal = intval(substr($strStartingSquare,1,1));  
       
        
        $knightMoves = array();
        $knightMoves[]=array(1,2);
        $knightMoves[]=array(1,-2);
        $knightMoves[]=array(-1,2);
        $knightMoves[]=array(-1,-2);
        $knightMoves[]=array(2,1);
        $knightMoves[]=array(2,-1);
        $knightMoves[]=array(-2,1);
        $knightMoves[]=array(-2,-1);
   

        
        $validSquares = array();
        
        foreach($knightMoves as $move)
        {
             
          $move[0] = $move[0] + $intColVal;
          $move[1] = $move[1] + $intRowVal;
      
        
          if ($move[0] > 0 && $move[0] <= 8 && $move[1] > 0 && $move[1] <= 8)
          {
                  
             array_push($validSquares,substr($strColNames,$move[0]-1,1).strval($move[1]));
          }
        }
        echo 'mumkun gedisler: ';
        foreach ($validSquares as $keyв => $value) {
            echo  $value.' ';
            
        }
      }
      
?>