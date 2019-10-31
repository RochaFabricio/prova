## Instruções

É necessário que tenha o "**[Composer](https://getcomposer.org/)**" instalado.

Após clonar o repositório, execute o comando "composer install", ao termino será nexessário renomear o arquivo ".env example" deixe como ".env" e configure o arquivo ".env" com as informações de sua base de dados.

Feito isso execute o comando "php artisan migrate", para que a tabela "log" seja criada.

Execute "php artisan serve" uma possivel resposta será : "Laravel development server started: <http://127.0.0.1:8000>" caso ja esteja utilizando a porta "8000" execute "php artisan serve --port=8001" o qualquer outra porta desejada.

Depois de seguir os passos você poderá utilizar o sistema.

## API REST Implementada

Method    | EndPoint
--------- | ------
GET       | api/listCars
POST      | api/createCar
GET       | api/logs


