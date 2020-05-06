## Adptações
 - Adpatado para funcionar com PHP abaixo da versão 7.4
 - Utilização da pasta "components" para criação de pequenos trechos de HTML.
 - Configuração para driver do PDO e FETCH_MODE. Veja: https://www.php.net/manual/en/pdostatement.fetch.php
 - Criação de model precisará do atributo $table que fará referência ao seu banco de dados, exatamente como Eloquent em Laravel: https://laravel.com/docs/5.0/eloquent#basic-usage
 
 ```php
 class Cliente extends Model {

    protected $table = 'clientes';

}
```
- Enviar respostas em JSON
```php
class ClienteController extends Controller {
  public function index() {

        $clientes = Cliente::select()->one();

        $this->response_json($clientes);
  }
}
```
Neste caso a resposta será:
```json
{
  "id": "1",
  "nome": "Paulo Victor",
  "email": "pvi@hotmail.com",
  "celular": "6590000000",
  "senha": "",
  "criado_em": "2020-05-06 08:49:12",
}
```

## Uso
Após configurar o src/Config.php. Você deve acessar a pasta *public* do projeto.

O ideal é criar um ***alias*** específico no servidor que direcione diretamente para a pasta *public*.

## Instalando
Entre no diretório raiz do projeto via terminal e rode o comando:
*composer install*
