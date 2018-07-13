# LojaTeste

## Introdução

A LojaTeste é composta por duas aplicações distintas: loja e administração
- Loja: localhost/loja_teste/
- Administração: localhost/loja_teste/adm/

Configuração do ambiente de desenvolvimento:

- Servidor: 127.0.0.1 via TCP/IP
- Tipo de servidor: MariaDB
- Versão do servidor: 10.1.26-MariaDB - mariadb.org binary distribution
- Versão do protocolo: 10
- Utilizador: root@localhost
- Conjunto de caracteres do servidor: UTF-8 Unicode (utf8)
- Apache/2.4.27 (Win32) OpenSSL/1.0.2l PHP/7.1.9
- Versão do cliente de base de dados: libmysql - mysqlnd 5.0.12-dev - 20150407 - $Id: b396954eeb2d1d9ed7902b8bae237b287f21ad9e $
- Versão do PHP: 7.1.9
- IDEs utilizadas: PHPStorm 2018.1.6, Dreamweaver CS6

## Instalação

Em /loja_teste/adm/data/ há o arquivo "schema.sql", que contém as definições do banco
e tabelas do projeto. 
- Banco: data_loja
- SGBD: MySQL
- user: root
- pass:

Crie o banco "data_loja" e, a seguir, importe o arquivo "schema.sql" para o mesmo.

## Acessando a administração

Em localhost/loja_teste/adm/ utilize:
- login: rochett.tavares@gmail.com
- senha: whx01a9bx04

## Regras de Negócio

Criar um sistema de e-commerce simples. Ele deverá conter:

Página de cadastro de produtos

- Solicitar o cadastro de campos essenciais para que as regras de negócio sejam aplicadas.
- Validar campos essenciais.
- Colocar máscaras em campos que receberão números como entrada.

Página inicial

- Listar produtos cadastrados por ordem de data de atualização
- Exibir foto, nome e preço dos produtos
- Ao clicar devo poder ver a página do produo

Página do Produto

- Deve exibir o nome, foto, preço e descrição do produto
- Deve ter um campo para simulação de frete onde vou inserir meu CEP e vou ver quanto sairá o frete do produto e o prazo de entrega
- Ao clicar no botão comprar irá abrir um modal pedindo nome e email do comprador e eu devo receber um email com as informações do comprador e o produto comprado

Outras regras de negócios

- Os produtos poderão entrar em promoção e ter um preço diferente em um período de data que eu definir. Enquanto esta promoção estiver em vigor o preço do produto deve ser exibido com o valor promocional com o valor original acima dele e cortado.
- O CEP de origem das mercadorias será 20081-902

Observações

- A interface deve usar algum framework CSS; Qualquer um de sua escolha;
- O código deve ser escrito usando PHP puro; Bibliotecas pontuais são permitidas, mas não pode usar framework ORM ou MVC;
- Usar github para versionamento e apresentação do projeto

## Implementações

Além de contemplar as regras de negócio acima, o projeto apresenta alguns "enhancements":
- Rotina de Backup;
- Rotina de Upload de Imagens e Vídeos;
- Controle da Quantidade do Produto;
- Log de Acesso;
- Cadastro de Newsletter, Contato e Revenda;
- Cadastro de Lojas;
- Cronograma de Eventos;
- Controle dos Pedidos;
- Painel Automático para exibição de novos pedidos realizados em tempo real;
- Banco de Soluções;
- Cadastros Auxiliares;
- Configuração de ambiente da Loja e da Administração


