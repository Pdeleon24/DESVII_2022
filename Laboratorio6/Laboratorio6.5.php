<?php
class ClaseBase 
{
    public function test() 
    {
        echo "ClaseBase::test() llamada\n";
        
    }
    
    final public function masTests() 
    {
        echo "ClaseBase::masTests() llamada\n";
    }
}
class ClaseHijo extends ClaseBase 
{
    public function masTests() // no se puede anular el método final ClaseBase::masTests()
    {
        echo "ClaseHijo::masTests() llamada\n";
    }
}
?>