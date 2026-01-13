# Настройка MySQL для проекта ICE TOMAS

## Шаги для настройки MySQL:

### 1. Убедитесь, что MySQL установлен и запущен

**macOS:**
```bash
brew services start mysql
# или
mysql.server start
```

**Linux:**
```bash
sudo systemctl start mysql
# или
sudo service mysql start
```

**Windows:**
Запустите MySQL через службы Windows или XAMPP/WAMP

### 2. Создайте базу данных

**Вариант 1: Через MySQL клиент**
```bash
mysql -u root -p
```

Затем выполните:
```sql
CREATE DATABASE ice_tomas CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;
```

**Вариант 2: Через SQL скрипт**
```bash
mysql -u root -p < database/setup-mysql.sql
```

**Вариант 3: Через PHP скрипт (если есть доступ)**
```bash
php -r "mysqli_connect('127.0.0.1', 'root', '') or die('MySQL не доступен'); mysqli_query(mysqli_connect('127.0.0.1', 'root', ''), 'CREATE DATABASE IF NOT EXISTS ice_tomas CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci'); echo 'База данных создана';"
```

### 3. Обновите настройки в .env файле

Файл `.env` уже обновлен скриптом `setup-mysql.php`. Проверьте следующие параметры:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ice_tomas
DB_USERNAME=root
DB_PASSWORD=ваш_пароль_если_нужен
```

Если у вас другой пользователь или пароль, обновите `DB_USERNAME` и `DB_PASSWORD`.

### 4. Очистите кеш конфигурации

```bash
php artisan config:clear
php artisan cache:clear
```

### 5. Запустите миграции

```bash
php artisan migrate --force
```

Это создаст все необходимые таблицы:
- users
- cache
- jobs
- home_pages
- banners
- articles

### 6. Запустите сидеры (опционально)

```bash
php artisan db:seed --force
```

Или отдельно:
```bash
php artisan db:seed --class=ArticleSeeder --force
php artisan db:seed --class=BannerSeeder --force
php artisan db:seed --class=AdminUserSeeder --force
```

### 7. Проверьте подключение

```bash
php artisan tinker
```

Затем в tinker:
```php
DB::connection()->getPdo();
// Должно вывести информацию о подключении без ошибок
```

## Устранение проблем

### Ошибка: "Connection refused"
- Убедитесь, что MySQL сервер запущен
- Проверьте, что порт 3306 не занят другим приложением
- Проверьте настройки firewall

### Ошибка: "Access denied"
- Проверьте правильность `DB_USERNAME` и `DB_PASSWORD` в `.env`
- Убедитесь, что пользователь имеет права на создание базы данных

### Ошибка: "Unknown database"
- Убедитесь, что база данных `ice_tomas` создана
- Проверьте правильность `DB_DATABASE` в `.env`

## Миграция данных из SQLite (если нужно)

Если у вас были данные в SQLite, их нужно мигрировать вручную или использовать инструменты для экспорта/импорта данных.

