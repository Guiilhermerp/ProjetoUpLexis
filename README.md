# Teste - PHP

### Requisitos

  - PHP e Laravel Framework 5 ou acima
  - MySQL
  - HTML
  - Bootstrap (opcional)
  - Ajax (opcional)

    1 - Você deverá desenvolver uma aplicação que utilize PHP (se possível na
    versão mais recente que você conseguir) e Framework Laravel – versão 5 ou
    acima. A aplicação deve ser capaz de realizar uma requisição ao Blog da
    upLexis (http://www.uplexis.com.br/blog) e capturar artigos de acordo com a
    pesquisa realizada.
    
    2 - Os dados devem ser salvos em um banco de dados MySQL
    
    ####  Banco de Dados MySQL
    • Criar tabela usuario (id, usuario, senha);
    
    • Criar um usuário na tabela (id: 1, usuario: admin, senha: admin);
    
    • Criar tabela artigos (id, id_usuario, titulo, link);
    
    ####  Telas

    • Tela de Login (usuário e senha)
    
    • Autenticar utilizando a tabela de usuário
    
    • Tela de Capturar (campo para digitar um texto e botão Capturar)
    
    • Ao clicar no botão Capturar, realizar a busca no blog da upLexis,
    recuperar os artigos da primeira página da pesquisa (título e link), e
    salvar no banco de dados. Apresentar uma mensagem de sucesso ou
    erro
    
    • Tela para Exibir os Artigos
    
    • Exibir os artigos salvos no banco de dados (título e link) e um botão de
    excluir o artigo do banco de dados.
    
    ####  Exemplo url busca

    • Buscar artigos com o termo “machine
    learning”. https://www.uplexis.com.br/blog/?s=machine+learning

    ### ------------------------------------------------------------

    #### Sobre o sistema

    Para a captura dos artigos foi utilizado o cURL do PHP, instale-o para a captura funcionar perfeitamente.

    ### Installation

    Requer [Laravel](https://laravel.com/) v5.8+, MySQL e PHP 7 para rodar.

    Para rodar o projeto execute no terminal.

```sh
composer install
```
   Crie o .env (contem um .env.example na pasta do projeto).
   Crie o banco de dados.

   ### Observações
   Foi tilizado as migrations para o banco de dados e tem uma seed com usúario e senha, porém irei deixar um arquivo .sql na pasta do projeto.
  
   Capturas de artigos repetidos não são inseridos no banco.
