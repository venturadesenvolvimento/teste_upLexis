# teste upLexis
Instalando o projeto:
* Clone o projeto em alguma pasta de sua preferência utilizando o comando abaixo no prompt de comando;
```
git clone https://github.com/venturadesenvolvimento/teste_upLexis.git
```
* Instale o PHP na versão 7.2 ou superior e garanta que esteja configurado nas variáveis de ambiente se caso for Windows. Para checar a versão instalada, execute o comando abaixo no prompt de comando;
```
php -v
```
* Se caso der erro de SSL, lembre-se de descomentar a extensão **openssl** no arquivo de configuração do PHP na pasta raiz php.ini. Assim como as extensões **fileinfo** e **mbstring**
* Instale o composer na versão 1.7.2 ou superior;
* Execute o comando abaixo na pasta raiz do projeto;
```
composer install
```
* E logo em seguida:
```
composer dump-autoload
```
Pronto!

Para executar o projeto localmente, execute o comando abaixo e abra no navegador o link http://localhost:8000/
```
php artisan serve
```
