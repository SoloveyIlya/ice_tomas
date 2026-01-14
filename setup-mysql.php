<?php

/**
 * Скрипт для настройки MySQL базы данных
 * Запустите: php setup-mysql.php
 */

$envFile = __DIR__ . '/.env';

if (!file_exists($envFile)) {
    echo "Файл .env не найден. Создайте его из .env.example\n";
    exit(1);
}

// Читаем содержимое .env
$envContent = file_get_contents($envFile);

// Обновляем настройки базы данных
$replacements = [
    '/^DB_CONNECTION=.*/m' => 'DB_CONNECTION=mysql',
    '/^DB_HOST=.*/m' => 'DB_HOST=127.0.0.1',
    '/^DB_PORT=.*/m' => 'DB_PORT=3306',
    '/^DB_DATABASE=.*/m' => 'DB_DATABASE=ice_tomas',
    '/^DB_USERNAME=.*/m' => 'DB_USERNAME=root',
    '/^DB_PASSWORD=.*/m' => 'DB_PASSWORD=',
];

foreach ($replacements as $pattern => $replacement) {
    if (preg_match($pattern, $envContent)) {
        $envContent = preg_replace($pattern, $replacement, $envContent);
    } else {
        // Если строка не найдена, добавляем её в конец
        $envContent .= "\n" . $replacement;
    }
}

// Сохраняем обновленный .env
file_put_contents($envFile, $envContent);

echo "✓ Настройки базы данных обновлены для MySQL\n";
echo "\n";
echo "Следующие шаги:\n";
echo "1. Убедитесь, что MySQL запущен\n";
echo "2. Создайте базу данных: CREATE DATABASE ice_tomas CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;\n";
echo "3. Обновите DB_USERNAME и DB_PASSWORD в .env если нужно\n";
echo "4. Запустите миграции: php artisan migrate --force\n";
echo "5. Запустите сидеры: php artisan db:seed --force\n";

