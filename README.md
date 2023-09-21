# Basic web-application stub

1. Скачать код этого репозитория как zip-архив (НЕ ДЕЛАЙТЕ git clone!)
2. Создать необходимые папки 
```
mkdir cache
mkdir logs
mkdir tmp
```
3. Настроить доступ к папкам (для Unix-систем)
```
chmod -R 0777 cache
chmod -R 0777 logs
chmod -R 0777 tmp
chmod -R 0777 assets/storage
```
4. Удалить папку Core из папки classes
5. Удалить файл .gitmodules
6. создать отдельный репозиторий для своего проекта
7. Залить в репозиторий код проекта
8. Добавить в проект субмодуль

```
cd classes
git submodule add https://github.com/rescap33/basic-web-core Core  
```
9. Выложить все в гит
