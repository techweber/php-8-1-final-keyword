<?php
class Foo
{
    public const X = "foo";
    
    final public function abc(){
        
    }
    
}

class Bar extends Foo
{
    public const X = "bar";
    
    public function abc(){
        
    }
    
}

// Fatal error: Bar::X cannot override final constant Foo::X
?>
