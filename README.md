
# Instalar KitInicial.

> Clonar Projeto

    git clone https://github.com/estevooliveira111/KitInicial

<br />

    composer install --no-scripts

> Copie o arquivo .env.example
    cp .env.example .env

> Crie uma nova chave para a aplicação

    php artisan key:generate

> Em seguida você deve configurar o arquivo .env e rodar as migrations com:

    php artisan migrate --seed

> Clonar Projeto
    php .\artisan make:model nomeDoModal -make

<br />
<br />

# Criar CRUD Completo

    php artisan make:controller ControllerEmail --model=nomeDoModal --resource --requests
<br />

    php artisan make:controller ControllerUser --model=User --resource --requests


