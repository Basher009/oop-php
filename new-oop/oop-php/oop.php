<?php
echo "hello";
class oop{
 public $a, $b, $c;


 function bbp(){
    $this->c = $this->a + $this->b;
    return $this->c;
 }
 function ppp(){
    $this->c = $this->a - $this->b;
    return $this->c;
 }

}

$c1 = new oop();

$c1->a = 10;
$c1->b = 20;

$c2 = new oop();

$c2->a = 30;
$c2->b = 20;

echo "this is c1:" . $c1->bbp();
echo "this is c2:" . $c2->ppp();

?>