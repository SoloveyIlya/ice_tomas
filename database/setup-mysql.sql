-- Скрипт для создания базы данных MySQL
-- Запустите: mysql -u root -p < database/setup-mysql.sql
-- или выполните команды в MySQL клиенте

CREATE DATABASE IF NOT EXISTS ice_tomas 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE ice_tomas;

-- База данных готова для миграций Laravel

