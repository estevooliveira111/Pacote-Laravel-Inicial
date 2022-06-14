
# Instalar KitInicial.

    git clone https://github.com/estevooliveira111/KitInicial

    <br />

    composer create-project laravel/laravel nome-do-seu-projeto --prefer-dist

Clonando um projeto e instalando o Laravel
Vou novamente considerar que você esteja rodando um sistema operacional Linux e com o git instalado, faça o seguinte:

Clone o projeto
git clone git@github.com:seuprojeto

Acesse o projeto
cd seuprojeto

Instale as dependências e o framework
composer install --no-scripts

Copie o arquivo .env.example
cp .env.example .env

Crie uma nova chave para a aplicação
php artisan key:generate

Em seguida você deve configurar o arquivo .env e rodar as migrations com:

php artisan migrate --seed


    php .\artisan make:model nomeDoModal -make
    php artisan make:controller ControllerNomeDoController --model=nomeDoModal --resource --requests


php artisan make:controller ControllerUser --model=User --resource --requests
