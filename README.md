# Swagger your app

This small application allows you to connect to your another existing application in which you use
[OpenApi 3.0 markup](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md) and generate
[Swagger documentation](https://swagger.io/) on the fly.

[Yii2](https://www.yiiframework.com/) is used as a microframework.

[genxoft/yii2-oas3 package](https://github.com/genxoft/yii2-oas3) is used as a yii2-wrapper for [php-swagger](https://github.com/zircote/swagger-php).

## Install

```
git clone https://github.com/pantera-digital/yii2-swagger-your-app.git
composer install
```

## Configure

In `config.php` your should specify paths to parse your code:

```
    'params' => [
        'apiPathsToParse' => [
            // 'C:/xampp/htdocs/your-project/controllers',
            // 'C:/xampp/htdocs/your-project/models',
            // or
            // '/var/www/your-project/controllers',
            // '/var/www/your-project/models',
            // etc.
        ]
    ]
```

## Run

Navigate your browser to path like `http://localhost/yii2-swagger-your-app/web`
