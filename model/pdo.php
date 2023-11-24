<?php
class Database {
    private static $dsn = 'mysql:host=localhost:3306;dbname=ucmstore';
    private static $username = 'root';
    private static $password = '';
    private static $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
                self::$db = new PDO(self::$dsn,
                                    self::$username,
                                    self::$password,
                                    self::$options);
            } catch (PDOException $e) {
                $error = $e->getMessage();
                include('view/404.php');
                exit();
            }
        }
        return self::$db;
    }
}

$conn = Database::getDB(); 
?>