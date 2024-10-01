# CrudLaravel

![Laravel](https://img.shields.io/badge/Laravel-8.x-red)
![PHP](https://img.shields.io/badge/PHP-^7.4-blue)
![Composer](https://img.shields.io/badge/Composer-%5E2.0-green)
![VSCode](https://img.shields.io/badge/Editor-VSCode-purple)

## Descrição

**CrudLaravel** é um sistema básico de gerenciamento de produtos, desenvolvido para explorar e entender como o fluxo de informações funciona utilizando o padrão arquitetural **MVC** e o **framework Laravel**.

O foco principal desse projeto é oferecer uma aplicação simples de CRUD (Create, Read, Update, Delete) para produtos, permitindo que novos produtos sejam cadastrados, atualizados, visualizados e excluídos.

## Tecnologias Utilizadas

- **[Laravel 8.x](https://laravel.com/docs/8.x)**: Framework PHP robusto e moderno.
- **PHP ^7.4**: Linguagem de programação para o desenvolvimento backend.
- **[Composer](https://getcomposer.org/)**: Gerenciador de dependências do PHP.
- **[VSCode](https://code.visualstudio.com/)**: Editor de código usado no desenvolvimento.

## Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/seuusuario/crudlaravel.git
    ```

2. Instale as dependências do projeto:
    ```bash
    composer install
    ```

3. Configure o arquivo `.env`:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure o banco de dados no arquivo `.env`.

5. Execute as migrações para criar as tabelas no banco de dados:
    ```bash
    php artisan migrate
    ```

6. Inicie o servidor de desenvolvimento:
    ```bash
    php artisan serve
    ```

## Funcionalidades

- **Listar Produtos**: Exibe uma lista com todos os produtos cadastrados.
- **Adicionar Produto**: Permite cadastrar novos produtos no sistema.
- **Editar Produto**: Possibilita a atualização de informações de produtos existentes.
- **Excluir Produto**: Remove produtos do sistema.

## Estrutura do Projeto

O projeto segue o padrão MVC (Model-View-Controller):

- **Model**: Representa os produtos no banco de dados.
- **View**: Arquivos Blade responsáveis por renderizar as páginas HTML.
- **Controller**: Gerencia as requisições HTTP e comunica-se com os Models e Views.

✨ **Bons Estudos!** ✨ Que cada página lida seja um passo a mais na jornada do conhecimento! 🚀
---


