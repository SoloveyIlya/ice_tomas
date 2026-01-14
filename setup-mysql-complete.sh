#!/bin/bash

# Полный скрипт настройки MySQL для проекта ICE TOMAS
# Запустите: bash setup-mysql-complete.sh

echo "=== Настройка MySQL для ICE TOMAS ==="
echo ""

# Шаг 1: Обновление .env
echo "1. Обновление настроек .env..."
php setup-mysql.php
echo ""

# Шаг 2: Проверка MySQL
echo "2. Проверка подключения к MySQL..."
if mysql -u root -e "SELECT 1" > /dev/null 2>&1; then
    echo "✓ MySQL доступен"
else
    echo "✗ MySQL не доступен. Убедитесь, что MySQL запущен."
    echo "  macOS: brew services start mysql"
    echo "  Linux: sudo systemctl start mysql"
    exit 1
fi
echo ""

# Шаг 3: Создание базы данных
echo "3. Создание базы данных ice_tomas..."
mysql -u root -e "CREATE DATABASE IF NOT EXISTS ice_tomas CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;" 2>&1
if [ $? -eq 0 ]; then
    echo "✓ База данных создана"
else
    echo "✗ Ошибка при создании базы данных"
    exit 1
fi
echo ""

# Шаг 4: Очистка кеша
echo "4. Очистка кеша Laravel..."
php artisan config:clear > /dev/null 2>&1
php artisan cache:clear > /dev/null 2>&1
echo "✓ Кеш очищен"
echo ""

# Шаг 5: Запуск миграций
echo "5. Запуск миграций..."
php artisan migrate --force
if [ $? -eq 0 ]; then
    echo "✓ Миграции выполнены успешно"
else
    echo "✗ Ошибка при выполнении миграций"
    exit 1
fi
echo ""

# Шаг 6: Запуск сидеров
echo "6. Запуск сидеров..."
php artisan db:seed --force
if [ $? -eq 0 ]; then
    echo "✓ Сидеры выполнены успешно"
else
    echo "✗ Ошибка при выполнении сидеров"
    exit 1
fi
echo ""

echo "=== Настройка завершена! ==="
echo ""
echo "База данных MySQL готова к использованию."
echo "Проверьте подключение: php artisan tinker"
echo "Затем выполните: DB::connection()->getPdo();"

