<?php
class Bd {

    private static ?PDO $pdo = null;

    static function pdo(): PDO {

        if (self::$pdo === null) {

            // Ruta correcta hacia usuarios.db dentro de /bd/databases/
            $dbPath = __DIR__ . "/databases/usuarios.db";

            self::$pdo = new PDO(
                "sqlite:" . $dbPath,
                null,
                null,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );

            self::$pdo->exec("
                CREATE TABLE IF NOT EXISTS usuarios (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    usuario TEXT UNIQUE NOT NULL,
                    password TEXT NOT NULL
                );
            ");
        }

        return self::$pdo;
    }
}
