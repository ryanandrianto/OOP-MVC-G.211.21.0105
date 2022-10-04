<?php
final class A
{
    public function disp()
    {
        echo "Inside the final function";
    }
}
class B extends  A
{
    function disp()
    {
        echo "Inside the final function";
    }
}
$obj = new B();
$obj->disp();
?>