# Laravel Auth - Especificando Guards

Neste exemplo, mostro como podemos trabalhar com modelos diferentes para especificar diferentes tipos de usuários do sistem.

No exemplo, há dois tipos de usuários:

- Usuário padrão: modelo [`App\Models\User.php`](app/Models/User.php)
- Usuário adicional: modelo [`App\Models\Admim.php`](app/Models/Admin.php)

O exemplo não apresenta diferencas significativas entre os modelos em termos de funcionalidades. Você pode especificar isso de acordo com sua aplicaão. Mostro a apenas a possibilidade de termos modelos diferentes sendo incluídos no processo de autenticacao de usuário.

## Criar migracao para novo tipo de usuário

XXX

## Criar modelo

Esta etapa é simples. Basta executar o seguinte comando:

> php artisan make:model Admin

O modelo será criado em `App\Models\Admin.php` este modelo é um modelo regular do laravel. Portanto, vamos fazer algumas alteracões para que ele possa ser usado no processo de autenticacao.


## Templates para registro e login


## Configurar Middleware para novo tipo de usuário


## Controladores e Rotas