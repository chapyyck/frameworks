# Лабораторная работа 1

## Задание 1

####  После введения неверных данных в поле для входа на сайте http://sandbox.usm.md/login/ появляются следующие результаты:

* #### Для отправки запроса использовался метод POST.
  * ![Изображение](Скриншоты/1.1_Метод_запроса.PNG)
* #### Были отправлены следующие заголовки:
  * ![Изображение](Скриншоты/1.2_Заголовки_в_запросе.PNG)
* #### Были отправлены следующие параметры:
  * ![Изображение](Скриншоты/1.3_Параметры_в_запросе.PNG)
* #### Код состояния сервера:
  * ![Изображение](Скриншоты/1.4_Код_состояния.PNG)
* #### Заголовки, отправленные в ответе:
  * ![Изображение](Скриншоты/1.5_Заголовки_в_ответе.PNG)

### После введения ВЕРНЫХ данных:

* #### Для отправки запроса использовался метод POST.
  * ![Изображение](Скриншоты/2.1_Метод_запроса.PNG)
* #### Были отправлены следующие заголовки:
  * ![Изображение](Скриншоты/2.2_Заголовки_в_запросе.PNG)
* #### Были отправлены следующие параметры:
  * ![Изображение](Скриншоты/2.3_Параметры_в_запросе.PNG)
* #### Код состояния сервера:
  * ![Изображение](Скриншоты/2.4_Код_состояния.PNG)
* #### Заголовки, отправленные в ответе:
  * ![Изображение](Скриншоты/2.5_Заголовки_в_ответе.PNG)

## Задание 2

```
GET / HTTP/1.1
Host: http://sandbox.com
User-Agent: Ceaplinschi Roman
```

```
POST /cars HTTP/1.1
Host: http://sandbox.com
User-Agent: Ceaplinschi Roman
make=Honda&model=Accord&year=2000
```

```
PUT /cars/1 HTTP/1.1
Host: sandbox.com
Content-Type: application/json
User-Agent: Ceaplinschi Roman

{
    "make": "Honda",
    "model": "Accord",
    "year": 2024
}
```

```
HTTP/1.1 201 Created
Content-Type: application/json
Location: /cars/1
Date: Mon, 18 Sep 2024

{
  "message": "Car was created successfully",
  "data": {
    "id": 1,
    "make": "Honda",
    "model": "Accord",
    "year": 2000
  }
}
```

### Коды состояния сервера.
#### Когда сервер может вернуть 200, 201 ?
![Изображение](Скриншоты/3.1_коды_1.PNG)
#### Когда сервер может вернуть 400, 401, 403, 404 ?
![Изображение](Скриншоты/3.1_коды_2.PNG)
* #### Когда сервер может вернуть 500 ?
![Изображение](Скриншоты/3.1_коды_3.PNG)