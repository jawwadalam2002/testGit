
<?php
/**
 * Define MyClass sdsds game zone. com
 */
class MyClass
{
    public $public = 'Public';
    protected static  $protected = 'Protected';
    private static $private = 'Private';

}

//$obj = new MyClass();
//echo $obj->public; // Works
//echo $obj->protected; // Fatal Error
//echo $obj->private; // Fatal Error
//$obj->printHello(); // Shows Public, Protected and Private


/**
 * Define MyClass2
 */
 
class MyClass2 extends MyClass
{
	public $hello;
	protected static $protected="this class";
	
	public function MyClass2(){
		$this->hello=parent::$protected;
	}
	public function printHello(){
		echo $this->hello;
	}
}

$obj2 = new MyClass2();
$obj2->printHello(); // Shows Public, Protected2, Undefined

?>
