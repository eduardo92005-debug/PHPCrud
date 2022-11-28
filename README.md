# PHP Crud

Implementação simples de uma API com PHP puro e MySQL (PDO) com o intuito de demonstrar e exemplificar seu processo.

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

Consulte **[utilização](#-utiliza%C3%A7%C3%A3o)** ou **[instalação](#-instala%C3%A7%C3%A3o)** para saber como utilizar ou instalar o projeto.

### 📋 Pré-requisitos

De que coisas você precisa para instalar o software?
* PHP 8.0 ou superior
* XAMPP
* MySQL

### 🔧 Instalação

Antes de tudo, é necessário baixar o **[codigo-fonte](https://github.com/eduardo92005-debug/PHPCrud/archive/refs/heads/main.zip)**  da API. Daí, basta
seguir os passos abaixo:
* Extraia o zip da API dentro da pasta htdocs do xampp, geralmente, está localizada em: <strong> C:\xampp\htdocs\ </strong>
* Dentro do navegador acessar a URL -> http://localhost/PHPCrud/src/pages/read.php
* Pronto, agora basta escolher a página que você quer ver.
## ⚙️ Arquitetura de pastas

* __Pages__ -> Conjunto de arquivos especializados em renderizar páginas HTML e fazer comunicação direta com o banco de dados.
* __Database__ -> Conjunto de arquivos especializados para configuração do banco de dados.
* __Repository__ -> Conjunto de arquivos especializados em gerenciar e criar _Queries SQL_ específicas para alguma funcionalidade.
* __Utils__ -> Conjunto de arquivos especializados em fornecer utilidades gerais para o aplicativo.


## 📦 Utilização

Parametros _(Query String)_ utilizadas em cada página:
* __read.php__ (http://localhost/PHPCrud/src/pages/read.php?page=1) ->'Page' usado para paginação simples
* __filter.php__ (http://localhost/PHPCrud/src/pages/filter.php?coluna=nome&valor=C) -> 'Coluna' e 'Valor' usado para o filtro de busca
* __delete.php__ (http://localhost/PHPCrud/src/pages/delete.php?id=2) -> 'Id' usado para identificar o objeto a ser deletado

## 🛠️ Construído com

* [PHP](https://www.php.net/docs.php) - PHP
* [MySQL](https://www.mysql.com/) - MySQL
* [PDO](https://www.php.net/manual/pt_BR/book.pdo.php) - Usada para comunicacao com banco de dados
