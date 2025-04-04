<?php

class App
{
    private static $app = null;

    private function __construct()
    {
    }

    public static function get(): App
    {
        if(!self::$app)
        {
            self::$app = new App();
        }

        return self::$app;
    }

    public function bootstrap(): void
	{
		echo 'App is bootstrapping...';
	}
}

$app = App::get();
$app->bootstrap();


//Late Static Binding
class Model
{
    protected static $tableName = 'Model';

    public static function getTableName()
    {
        return static::$tableName;
    }
}

class User extends Model
{
    protected static $tableName = 'User';
}

echo User::getTableName();
