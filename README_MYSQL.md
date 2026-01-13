# Быстрый старт с MySQL

## Автоматическая настройка (рекомендуется)

```bash
bash setup-mysql-complete.sh
```

Этот скрипт автоматически:
1. Обновит настройки в `.env`
2. Создаст базу данных `ice_tomas`
3. Запустит все миграции
4. Запустит все сидеры

## Ручная настройка

### 1. Обновите .env (уже сделано)
```bash
php setup-mysql.php
```

### 2. Создайте базу данных
```bash
mysql -u root -p < database/setup-mysql.sql
```

### 3. Запустите миграции
```bash
php artisan migrate --force
```

### 4. Запустите сидеры
```bash
php artisan db:seed --force
```

## Проверка

```bash
php artisan tinker
```

В tinker:
```php
DB::connection()->getPdo();
Article::count();
Banner::count();
```

## Важно

- Убедитесь, что MySQL сервер запущен
- Если у вас другой пароль MySQL, обновите `DB_PASSWORD` в `.env`
- Все миграции совместимы с MySQL и готовы к использованию

