<?php
//Practices 1:
echo 'Hello<br>Ahmed abaas<hr>' ;

//Practices 2:
echo -5+8*6 . "<br>" ;
echo (55+9)%9 . "<br>";
echo 20 + -3*5 / 8 . "<br>";
echo 5 + 15 / 3 * 2 - 8 % 3  . "<hr>";
//Practices 3:
echo ((25.5 * 3.5 - 3.5 * 3.5) / (40.5 - 4.5)) . "<hr>";
//Practices 4:
$x=25;
$y=39;
echo( $x != $y )."<br>";
echo ($x < $y )."<br>";
echo ($x <= $y )."<hr>";
// Practices 5:
// array
// Practices 6:
echo octdec('10') .'<hr>';
// Practices 7:
for($i=0;$i<=99;$i++){
    if (($i%2)==1) {
        echo $i .'<br>';}
   

}
echo "<hr>";

// Practices 8:
// for($i=1;$i<=100;$i++){
//     if ((($i%$i)==0)&&(($i%1)==0)) {
//         echo $i .'<br>';}
   

// }
// echo "<hr>";
$primes = array();
$is_prime_no = false;
for ($i = 2; $i<100; $i++) {
     $is_prime_no = true; 
        for ($j = 2; $j<=($i/2); $j++) {
                if ($i%$j==0) {
                          $is_prime_no = false;
                                  break;
                                }
                   }
        if ($is_prime_no) {
               array_push($primes,$i);
                  }
        if (count($primes)==100) {
               break;
                  }
}
echo array_sum($primes)."\n";