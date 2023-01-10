<?php
/* Static methods */
class HttpRequest
{
	public static function uri(): string
	{
		return strtolower($_SERVER['REQUEST_URI']);
	}
}

/* Define Constant of a class */
class Circle{
    const PI=M_PI;
    private $radius;

    public function __construct($radius)
    {
        $this->radius=$radius;
    }
    public function area():float{
        return self::PI * $this->radius ;
    }
}
// $circle =new Circle(4);
// echo $circle->area();

/* PHP class constants and inheritance */
class Model{
    protected const TABLE_NAME='';
    public static function all(){
/* late static binding in PHP
   use 
   static::TABLE_NAME;
   Instead of
   self::TABLE_NAME;
   to get the static propriete of the child(User) class
 */
        return "SELECT * FROM " . static::TABLE_NAME;
    }
}

class User extends Model{
    protected const TABLE_NAME="users";
}





  
echo HttpRequest::uri();

echo User::all();