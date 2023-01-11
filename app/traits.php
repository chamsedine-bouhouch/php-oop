 <?php
 /* 
 A trait is similar to a class, but it is only for grouping methods in a fine-grained and consistent way. 
 PHP does not allow you to create an instance of a Trait like an instance of a class. 
 And there is no such concept of an instance of a trait.
 */
// trait Logger
// {
// 	public function log($msg)
// 	{
// 		echo '<pre>';
// 		echo date('Y-m-d h:i:s') . ':' . '(' . __CLASS__ . ') ' . $msg . '<br/>';
// 		echo '</pre>';
// 	}
// }
// class User{
//     use Logger;
//     public function __construct()
//     {
//         $this->log("Hello");
//     }
// }
// $user=new User();

// PHP trait’s method conflict resolution
trait FileLogger
{
	public function log($msg)
	{
		echo 'File Logger ' . date('Y-m-d h:i:s') . ':' . $msg . '<br/>';
	}
}

trait DatabaseLogger
{
	public function log($msg)
	{
		echo 'Database Logger ' . date('Y-m-d h:i:s') . ':' . $msg . '<br/>';
	}
}

class Logger
{
	use FileLogger, DatabaseLogger{
		FileLogger::log insteadof DatabaseLogger;
	}
}

$logger = new Logger();
$logger->log('this is a test message #1');
$logger->log('this is a test message #2');


