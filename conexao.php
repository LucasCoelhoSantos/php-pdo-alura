<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

echo 'Conectado';

// usar um client sqlite para realizar a inserção
$pdo->exec("INSERT INTO phones (area_code, number, student_id VALUES ('24', '123456789', 1), ('21', '987654321', 1);");

$createTableSql = "
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY,
        name TEXT,
        birth_date TEXT
    );

    CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY,
        area_code TEXT,
        number TEXT,
        student_id INTEGER,
        FOREIGN KEY (student_id) REFERENCES students(id)
    );
";

$pdo->exec($createTableSql);
