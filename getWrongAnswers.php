
function getWrongAnswers(int $N, string $C): string {
  // Write your code here
  
  $answer = '';
  
  for($i=0;$i<strlen($C);$i++)
  {
    if ($C[$i] == 'A')
      $answer[$i] = 'B';
    else 
      $answer[$i] = 'A';
  }
  
  return $answer;
}
