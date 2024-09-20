## Requisitos
* PHP 8 ou superior
* Composer
* GIT
* Node.js 20 ou superior


## Como rodar um projeto baixado
Instalar as dependências do PHP
```
composer install
```

Instalar as dependências do Node.js
```
npm install
```

Duplicar o arquivo ".env.example" e renomear para ".env"

Gerar a chave

```
php artisan key:generate
```

Executar a migration
```
php artisan migrate
```

Executar as seeds
```
php artisan db:seed
```

Iniciar o projeto criado com laravel
```
php artisan serve
```

Executar as bibliotecas Node.js
```
npm run dev
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000/
```

## Sequencia para criar o projeto
Criar o projeto com Laravel

```
composer create-project laravel/laravel laravel-meu-projeto
```

Acessar o diretório onde está o projeto
```
cd laravel-meu-projeto
```

Iniciar o projeto criado com laravel
```
php artisan serve
```
Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000/
```
Criar Controller
```
php artisan make:controller NomeDaController
```

Criar a VIEW
```
php artisan make:view nomeDaView
```

```
php artisan make:view contas/create
```

Criar a migration
```
php artisan make:migration create_contas_table
```

Executar a migration
```
php artisan migrate
```

Criar a model
```
php artisan make:model Conta
```

Criar o arquivo Request com validações
```
php artisan make:request ContaRequest
```

Criar seed
```
php artisan make:seeder ContaSeeder
```

Executar as seeds
```
php artisan db:seed
```

Instalar o Vite
```
npm install
```

Instalar o framework Bootstrap
```
npm i --save bootstrap @popperjs/core
```

Instalar o saas
```
npm i --save-dev sass
```

Executar as bibliotecas Node.js
```
npm run dev
```

Traduzir para português
https://github.com/lucascudo/laravel-pt-BR-localization

Instalar a biblioteca para gerar PDF
```
composer require barryvdh/laravel-dompdf
```

Instalar o SweetAlert2
```
npm install sweetalert2
```





