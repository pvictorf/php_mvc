## Adptações
 - Adpatado para funcionar com PHP abaixo da versão 7.4
 - Utilização da pasta "components" para criação de pequenos trechos de HTML.
 - Configuração para driver do PDO e FETCH_MODE. Veja: https://www.php.net/manual/en/pdostatement.fetch.php
 - Criação de model será como Eloquente do Laravel: https://laravel.com/docs/5.0/eloquent#basic-usage
 
 ```php
 class User extends Model {

    protected $table = 'my_users';

}
```

## Uso
Após configurar o src/Config.php. Você deve acessar a pasta *public* do projeto.

O ideal é criar um ***alias*** específico no servidor que direcione diretamente para a pasta *public*.

## Instalando
Entre no diretório raiz do projeto via terminal e rode o comando:
*composer install*
