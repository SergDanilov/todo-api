# Todo List API

REST API для управления задачами, построенная на Laravel.

## Установка

1. Клонируйте репозиторий:

```bash
git clone git@github.com:SergDanilov/todo-api.git
cd todo-api
```

2. Установите зависимости:

```bash
composer install
```

3. Настройте базу данных SQLite:

```bash
touch database/database.sqlite
```

4. Запустите миграции и сидеры:

```bash
php artisan migrate
php artisan db:seed
```

5. Запустите сервер:

```bash
php artisan serve
```

## API Endpoints

#### GET /api/tasks - Получить все задачи
#### POST /api/tasks - Создать новую задачу
#### GET /api/tasks/{id} - Получить задачу по ID
#### PUT /api/tasks/{id} - Обновить задачу
#### DELETE /api/tasks/{id} - Удалить задачу


## Примеры запросов

### Создание задачи:

```bash
curl -X POST http://localhost:8000/api/tasks \
  -H "Content-Type: application/json" \
  -d '{
    "title": "My Task",
    "description": "Task description",
    "status": "pending"
  }'
```
### Получение всех задач:

```bash
curl http://localhost:8000/api/tasks
```

### Просмотр всех задач в браузере:
* Вы можете посмотреть список задач на localhost, порт 8000: http://localhost:8000/tasks