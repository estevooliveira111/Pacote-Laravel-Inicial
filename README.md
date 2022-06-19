
# Instalar KitInicial.

> Clonar Projeto

    git clone https://github.com/estevooliveira111/Pacote-Laravel-Inicial

<br />

> Rodas Pacotes do PHP
    
    composer install --no-scripts
    
<br />

> Em seguida você deve configurar o arquivo .env e rodar as migrations com:

    php artisan migrate --seed

<br />
<br />

# Criar CRUD Completo

<br />

    php .\artisan make:model nomeDoModal -m

<br />

    php artisan make:controller ControllerEmail --model=nomeDoModal --resource --requests
    
<br />

    php artisan make:controller ControllerUser --model=User --resource --requests


