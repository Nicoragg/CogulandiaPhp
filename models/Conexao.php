<?php
class Conexao {
    private static $host = 'localhost';
    private static $dbName = 'cogulandia';
    private static $user = 'root';
    private static $password = '';
    private static $conexao = null;

    public static function conectar() {
        if (self::$conexao == null) {
            try {
                self::$conexao = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbName, self::$user, self::$password);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }
        }
        return self::$conexao;
    }
}
?>
