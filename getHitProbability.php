<?php


function getHitProbability(int $R, int $C, array $G): float {
  // Write your code here
  
  $total = 0;
  $hasShips = 0;
  //rows
  for($i=0;$i<$R;$i++)
  {
    //cols
    for($j=0;$j<$C;$j++)
    {
      if ($G[$i][$j] == 1)
      {
        $hasShips ++;
      }
        
      $total++;
    }
  }
  
  $probability = $hasShips/$total;
  
  return $probability;
}
