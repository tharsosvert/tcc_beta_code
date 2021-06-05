# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Efetuar login
 - [CDU 02](#CDU-02): Efetuar logout

 - [CDU 03](#CDU-03): Pesquisar por Jogos 
 - [CDU 04](#CDU-04): Consultar jogos
 - [CDU 05](#CDU-05): Criar uma conta como jogador

 - [CDU 06](#CDU-06): Modificar seus dados de jogador 
 - [CDU 07](#CDU-07): Adicionar jogo no carrinho 
 - [CDU 08](#CDU-08): Comprar jogo
 - [CDU 09](#CDU-09): Excluir jogo do carrinho
 - [CDU 10](#CDU-10): Visualizar carrinho

 - [CDU 11](#CDU-11): Consultar registros de jogadores
 - [CDU 12](#CDU-12): Consultar registros de jogos
 - [CDU 13](#CDU-13): Consultar registros de carrinhos
 - [CDU 14](#CDU-14): Consultar registros de administradores

 - [CDU 15](#CDU-15): Adicionar jogadores
 - [CDU 16](#CDU-16): Adicionar jogos
 - [CDU 17](#CDU-17): Adicionar administradores

 - [CDU 18](#CDU-18): Alterar jogadores
 - [CDU 19](#CDU-19): Alterar jogos
 - [CDU 20](#CDU-20): Alterar carrinhos
 - [CDU 21](#CDU-21): Alterar administradores 

 - [CDU 22](#CDU-22): Excluir jogadores
 - [CDU 23](#CDU-23): Excluir jogos
 - [CDU 24](#CDU-24): Excluir carrinhos
 - [CDU 25](#CDU-25): Excluir administradores 


## Lista dos Atores

 - Jogador
 - Administrador
 - Visitante

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagramas/DiagramaCDU.png)

## Descrição dos Casos de Uso

### CDU 01

Efetuar login

**Fluxo Principal**

1. O sistema apresentará um formulário com os campos email e senha.
2. O Visitante deve inserir seus dados de login no formulário e clicar no botão “logar”.
3. O sistema verificará se os dados correspondem a algum Jogador/Adminstrador.
4. Caso o sistema confirmar o login como Jogador, o sistema direciona para o painel do Jogador, caso o sistema confirmar o login como Administrador, o sistema direciona para o painel do Administrador.

**Fluxo Alternativo A**

1. O sistema apresentará um formulário com os campos email e senha.
2. O Visitante não insere seus dados de login no formulário e clicar no botão “logar”.
3. O sistema avisa que todos so campos precisam ser preenchidos.

![Diagrama de Sequência CDU 03](diagramas/sequencia/diagrama_sequencia_CDU01.png)

### CDU 02

Efetuar logout

**Fluxo Principal**

1. O sistema apresentar um botão chamado “deslogar”.
2. O Jogador/Adminstrador clica no botão “deslogar”.
3. O sistema irá “deslogar” o Jogador/Adminstrador e direciona para o página de login.

### CDU 03

Pesquisar por Jogos

**Fluxo Principal**

1. O sistema apresentará uma página que permita o Visitante/Jogador escrever do nome do jogo que deseja.
2. O Visitante/Jogador deve escrever o nome do jogo no campo de procura e aperta o botão “procurar” ou aperta a tecla ENTER.
3. O sistema procurará por um registro de jogos que possua o nome digitado.
4. O sistema mostrará os resultados do(s) jogo(s) encontrados.

**Fluxo Alternativo A**

1. O sistema apresentará uma página que permita o Visitante/Jogador escrever do nome do jogo que deseja.
2. O Visitante/Jogador deve escrever o nome do jogo no campo de procura e aperta o botão “procurar” ou aperta a tecla ENTER.
3. O sistema verifica que não há nenhum jogo que possua o nome digitado.
4. O sistema mostrará que não há nenhum jogo com o nome digitado.

![Diagrama de Sequência CDU 03](diagramas/sequencia/diagrama_sequencia_CDU03.png)

### CDU 04

Consultar jogos

**Fluxo Principal**

1. O sistema, na pagina de busca, mostra os Jogos disponiveis.
2. O Visitante/Jogador clica no Jogo desejado.
3. O sistema direciona o Visitante/Jogador para a pagina do jogo desejado.

### CDU 05

Criar uma conta como jogador

**Fluxo Principal**

1. O sistema apresentar um formulário com os campos nome, nickmane, email e senha.
2. O visitante deve preencher o formulário com seus dados e clicar no botão “Criar conta”.
3. O sistema verifica os dados e criará uma conta de Jogador.
4. O sistema mostra uma página afirmando que a conta foi criada com sucesso.

**Fluxo Alternativo A**

1. O sistema apresentar um formulário com os campos nome, nickmane, email e senha.
2. O visitante não preenche o formulário com seus dados e clicar no botão “Criar conta”.
3. O sistema avisa que todos so campos precisam ser preenchidos.

![Diagrama de Sequência CDU 03](diagramas/sequencia/diagrama_sequencia_CDU05.png)

### CDU 06

Modificar seus dados de jogador 

**Fluxo Principal**

1. O sistema mostrará uma página com os atuais dados dos Jogador e um formulário com os campos nome, nickname, email e senha para a inserção dos novos dados e um botão “Alterar”.
2. O Jogador escreve os seus novos dados e clicar no botão “Alterar”.
3. O sistema mostra uma página com os atuais dados e os novos dados e os botões “Confirmar alteração" e “Cancelar”.
4. O Jogador clica no botão “Confirmar alteração”.
5. O sistema realiza as alterações na conta do Jogador.

**Fluxo Alternativo A**

1. O sistema mostrará uma página com os atuais dados dos Jogador e um formulário com os campos nome, nickname, email e senha para a inserção dos novos dados e um botão “Alterar”.
2. O Jogador não escreve os seus novos dados e clicar no botão “Alterar”.
3. O sistema avisa que todos so campos precisam ser preenchidos.

### CDU 07

Adicionar jogo no carrinho 

**Fluxo Principal**

1. Na página do Jogo que deseja adicionar ao carrinho, o sistema apresenta os dados do jogo. 
2. O Jogador clicará no botão “Adicionar ao carrinho”.
3. O sistema adiciona o jogo ao carrinho.
4. O sistema mostrará uma página que afirma que o jogo foi adicionado com sucesso ao carrinho

**Fluxo Alternativo A**

1. Na página do Jogo que deseja adicionar ao carrinho, o sistema apresenta os dados do jogo. 
2. O Jogador clicará no botão “Adicionar ao carrinho”.
3. O sistema verifica que o jogo não esta mais registrado.
4. O sistema informa que o jogo não esta mais disponivel.

### CDU 08

Comprar jogo

**Fluxo Principal**

1. O sistema, no painel da conta do Jogador, apresentará o atual carrinho com os jogos que estão no carrinho.
2. O Jogador deve clicar em “Finalizar compra”.
3. O sistema registrará a compra do carrinho do cliente.
4. O sistema mostrará uma página que afirma que a compra foi realizada com sucesso.


**Fluxo Alternativo A**

1. O sistema, no painel da conta do Jogador, apresentará o atual carrinho com os jogos que estão no carrinho.
2. O Jogador deve clicar em “Finalizar compra”.
3. O sistema verifica que algum jogo .
4. O sistema mostrará uma página que afirma que a compra foi realizada com sucesso.

### CDU 09

Excluir jogo do carrinho

**Fluxo Principal**

1. O sistema, no painel da conta do Jogador, apresentará o atual carrinho com os jogos que estão no carrinho.
2. O Jogador clica no botão "Tirar do carrinho" no campo do Jogo que deseja excluir no carrinho.
3. O sistema pergunta se o Jogador realmente quer tirar o jogo do carrinho com os botões "Tirar do Carrinho" e "Cancelar".
4. O Jogador clica no botão "Tirar do Carrinho".
5. O sistema tira o Jogo do carrinho.

**Fluxo Alternativo A**

1. O sistema, no painel da conta do Jogador, apresentará o atual carrinho com os jogos que estão no carrinho.
2. O Jogador clica no botão "Tirar do carrinho" no campo do Jogo que deseja excluir no carrinho.
3. O sistema pergunta se o Jogador realmente quer tirar o jogo do carrinho com os botões "Tirar do Carrinho" e "Cancelar".
4. O Jogador clica no botão "Cancelar".
5. O sistema retorna ao painel.

### CDU 10

Visualizar carrinho

**Fluxo Principal**

1. O jogador entra na pagina do seu painel.
2. O sistema, no painel da conta do Jogador, apresentará o atual carrinho com os jogos que estão no carrinho.

**Fluxo Alternativo A**

1. O jogador entra na pagina do seu painel.
2. O sistema, no painel da conta do Jogador, informa que o Jogador ainda não possui nenhum jogo no carrinho.

### CDU 11

Consultar registros de jogadores

**Fluxo Principal**

1. O sistema, na página “Jogadores” da seção do Administrador, apresenta um botão “Buscar por Jogador”.
2. O Administrador deverá clicar no botão “Buscar por Jogador”.
3. O sistema mostrará uma página com um campo para escrever o nome do Jogador que procura-se e um botão ”procurar”.
4. O Administrador deverá escrever o nome do Jogador que deseja e clicar no botão “procurar”.
5. O sistema procurará por um registro de Jogador que possua o nome descrito.
6. O sistema mostrará os resultados do(s) Jogador(es) encontrados.



**Fluxo Alternativo A**

1. O sistema, na página “Jogadores” da seção do Administrador, apresenta um botão “Buscar por Jogador”.
2. O Administrador deverá clicar no botão “Buscar por Jogador”.
3. O sistema mostrará uma página com um campo para escrever o nome do Jogador que procura-se e um botão ”procurar”.
4. O Administrador não escreve o nome do Jogador que deseja e clicar no botão “procurar”.
6. O sistema mostrará os todos os jogadores.

### CDU 12

Consultar registros de jogos

**Fluxo Principal**

1. O sistema, na página “Jogos” da seção do Administrador, apresenta um botão “Buscar por Jogos”.
2. O Administrador deverá clicar no botão “Buscar por Jogos”.
3. O sistema mostrará uma página com um campo para escrever o nome do Jogo que procura-se e um botão ”procurar”.
4. O Administrador deverá escrever o nome do Jogo que deseja e clicar no botão “procurar”.
5. O sistema procurará por um registro de Jogos que possua o nome descrito.
6. O sistema mostrará os resultados do(s) Jogos(s) encontrados.


**Fluxo Alternativo A**

1. O sistema, na página “Jogos” da seção do Administrador, apresenta um botão “Buscar por Jogos”.
2. O Administrador deverá clicar no botão “Buscar por Jogos”.
3. O sistema mostrará uma página com um campo para escrever o nome do Jogo que procura-se e um botão ”procurar”.
4. O Administrador não escreve o nome do Jogo que deseja e clicar no botão “procurar”.
6. O sistema mostrará todos os jogos.

### CDU 13

Consultar registros de carrinhos

**Fluxo Principal**

1. O sistema, na página dos resultados da busca por Jogadores da seção do Administrador, apresentará uma listagem em tabela do(s) Jogadores(s) buscado. Cada linha da tabela apresentará os dados do Jogador e os botões “Alterar”, ”Excluir” e “Carrinhos”.
2. O Administrador deverá clicar no botão “Carrinhos”.
3. O sistema mostrará uma listagem de todos os carinho do Jogador.

**Fluxo Alternativo A**

1. O sistema, na página dos resultados da busca por Jogadores da seção do Administrador, apresentará uma listagem em tabela do(s) Jogadores(s) buscado. Cada linha da tabela apresentará os dados do Jogador e os botões “Alterar”, ”Excluir” e “Carrinhos”.
2. O Administrador deverá clicar no botão “Carrinhos”.
3. O sistema mostrará que o Jogador ainda não comprou nenhum carrinho.

### CDU 14

Consultar registros de administradores

**Fluxo Principal**

1. O sistema, na página “Administradores” da seção do Administrador, apresenta um botão “Buscar por Administradores”.
2. O Administrador deverá clicar no botão “Buscar por Administradores”.
3. O sistema mostrará uma página com um campo para escrever o nome do Administradores que procura-se e um botão ”procurar”.
4. O Administrador deverá escrever o nome do Administradores que deseja e clicar no botão “procurar”.
5. O sistema procurará por um registro de Administradores que possua o nome descrito.
6. O sistema mostrará os resultados do(s) Administrador(es) encontrados.


**Fluxo Alternativo A**

1. O sistema, na página “Administradores” da seção do Administrador, apresenta um botão “Buscar por Administradores”.
2. O Administrador deverá clicar no botão “Buscar por Administradores”.
3. O sistema mostrará uma página com um campo para escrever o nome do Administradores que procura-se e um botão ”procurar”.
4. O Administrador não escreve o nome do Administradores que deseja e clicar no botão “procurar”.
6. O sistema mostrará todos os adminstradores.

### CDU 15

Adicionar jogadores

**Fluxo Principal**

1. O sistema, na página “Jogador” da seção do Administrador, o sistema apresentará um botão “Adicionar Jogador”
2. O Administrador deverá clicar no botão “Adicionar Jogador”.
3. O sistema mostrará uma página com um formulário com os campos nome, nickname, email e senha para a inserção dos dados e um botão “Adicionar”.
4. O Administrador deverá escrever os dados do Jogador e clicar no botão “Adicionar”
5. O sistema realizará o armazenamento do Jogador.

**Fluxo Alternativo A**

1. O sistema, na página “Jogador” da seção do Administrador, o sistema apresentará um botão “Adicionar Jogador”
2. O Administrador deverá clicar no botão “Adicionar Jogador”.
3. O sistema mostrará uma página com um formulário com os campos nome, nickname, email e senha para a inserção dos dados e um botão “Adicionar”.
4. O Administrador não preenche todos os campos do formulario com os dados do Jogador e clicar no botão “Adicionar”
5. O sistema informa que todos os campos devem ser preenchidos.

### CDU 16

Adicionar jogos

**Fluxo Principal**

1. O sistema, na página “Jogos” da seção do Administrador, o sistema apresentará um botão “Adicionar Jogo”
2. O Administrador deverá clicar no botão “Adicionar Jogo”.
3. O sistema mostrará uma página com um formulário com os campos nome, descrição, requisitos, sistema operacional, data de lançamento para a inserção dos dados e um botão “Adicionar”.
4. O Administrador deverá escrever os dados do Jogo e clicar no botão “Adicionar”
5. O sistema realizará o armazenamento do Jogo.

**Fluxo Alternativo A**

1. O sistema, na página “Jogos” da seção do Administrador, o sistema apresentará um botão “Adicionar Jogo”
2. O Administrador deverá clicar no botão “Adicionar Jogo”.
3. O sistema mostrará uma página com um formulário com os campos nome, descrição, requisitos, sistema operacional, data de lançamento para a inserção dos dados e um botão “Adicionar”.
4. O Administrador não preenche todos os campos do formulario com do Jogo e clicar no botão “Adicionar”
5. O sistema informa que todos os campos devem ser preenchidos.

### CDU 17

Adicionar administradores

**Fluxo Principal**

1. O sistema, na página “administrador” da seção do Administrador, o sistema apresentará um botão “Adicionar administrador”
2. O Administrador deverá clicar no botão “Adicionar administrador”.
3. O sistema mostrará uma página com um formulário com os campos nome, email, uma senha para a inserção dos dados e um botão “Adicionar”.
4. O Administrador deverá escrever os dados do administrador e clicar no botão “Adicionar”
5. O sistema realizará o armazenamento do administrador.


**Fluxo Alternativo A**

1. O sistema, na página “administrador” da seção do Administrador, o sistema apresentará um botão “Adicionar administrador”
2. O Administrador deverá clicar no botão “Adicionar administrador”.
3. O sistema mostrará uma página com um formulário com os campos nome, email, uma senha para a inserção dos dados e um botão “Adicionar”.
4. O Administrador não preenche todos os campos do formulario com os dados do administrador e clicar no botão “Adicionar”
5. O sistema informa que todos os campos devem ser preenchidos.

### CDU 18

Alterar jogadores

**Fluxo Principal**

1. O sistema, na página dos resultados da busca por Jogador da seção do administrador, apresentará uma listagem em tabela do(s) Jogador(es) buscado. Cada linha da tabela apresentará os dados do cliente e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Alterar”
3. O sistema mostrará uma página com os atuais dados do Jogador e um formulário com os campos nome, nickname, email e senha para a inserção dos novos dados e um botão “Alterar”
4. O administrador deverá escrever os novos dados do Jogador e clicar no botão “Alterar”
5. O sistema mostrará uma página com os atuais dados e os novos dados e os botões “Confirmar alteração" e “Cancelar”
6. O administrador deve clicar em no botão “Confirmar alteração”
7. O sistema realizará as alterações no registro

**Fluxo Alternativo A**

1. O sistema, na página dos resultados da busca por Jogador da seção do administrador, apresentará uma listagem em tabela do(s) Jogador(es) buscado. Cada linha da tabela apresentará os dados do cliente e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Alterar”
3. O sistema mostrará uma página com os atuais dados do Jogador e um formulário com os campos nome, nickname, email e senha para a inserção dos novos dados e um botão “Alterar”
4. O administrador deverá escrever os novos dados do Jogador e clicar no botão “Alterar”
5. O sistema mostrará uma página com os atuais dados e os novos dados e os botões “Confirmar alteração" e “Cancelar”
6. O administrador deve clicar em no botão “Cancelar”
7. O sistema retorna ao formulario.

### CDU 19

Alterar jogos

**Fluxo Principal**

1. O sistema, na página dos resultados da busca por Jogo da seção do administrador, apresentará uma listagem em tabela do(s) Jogo(s) buscado. Cada linha da tabela apresentará os dados do cliente e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Alterar”
3. O sistema mostrará uma página com os atuais dados do Jogador e um formulário com os campos nome, nickname, email e senha para a inserção dos novos dados e um botão “Alterar”
4. O administrador deverá escrever os novos dados do Jogo e clicar no botão “Alterar”
5. O sistema mostrará uma página com os atuais dados e os novos dados e os botões “Confirmar alteração" e “Cancelar”
6. O administrador deve clicar em no botão “Confirmar alteração”
7. O sistema realizará as alterações no registro


**Fluxo Alternativo A**

1. O sistema, na página dos resultados da busca por Jogo da seção do administrador, apresentará uma listagem em tabela do(s) Jogo(s) buscado. Cada linha da tabela apresentará os dados do cliente e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Alterar”
3. O sistema mostrará uma página com os atuais dados do Jogador e um formulário com os campos nome, nickname, email e senha para a inserção dos novos dados e um botão “Alterar”
4. O administrador deverá escrever os novos dados do Jogo e clicar no botão “Alterar”
5. O sistema mostrará uma página com os atuais dados e os novos dados e os botões “Confirmar alteração" e “Cancelar”
6. O administrador deve clicar em no botão “Cancelar”
7. O sistema retorna ao formulario.

### CDU 20

Alterar carrinhos

**Fluxo Principal**

1. O sistema apresenta todos os Jogos de um carrinho e campos para adicionar novos jogos.
2. O administrador adiciona os novos itens e clica no botão "Alterar".
3. O sistema mostrará uma página com os atuais dados e os novos dados e os botões “Confirmar alteração" e “Cancelar”
4. O administrador deve clicar em no botão “Confirmar alteração”
5. O sistema realizará as alterações no registro

**Fluxo Alternativo A**

1. O sistema apresenta todos os Jogos de um carrinho e campos para adicionar novos jogos.
2. O administrador adiciona os novos itens e clica no botão "Alterar".
3. O sistema mostrará uma página com os atuais dados e os novos dados e os botões “Confirmar alteração" e “Cancelar”
6. O administrador deve clicar em no botão “Cancelar”
7. O sistema retorna ao formulario.

### CDU 21

Alterar administradores

**Fluxo Principal**

1. O sistema, na página dos resultados da busca por administrador da seção do administrador, apresentará uma listagem em tabela do(s) administrador(es) buscado. Cada linha da tabela apresentará os dados do cliente e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Alterar”
3. O sistema mostrará uma página com os atuais dados do administrador e um formulário com os campos nome, email, uma senha para a inserção dos novos dados e um botão “Alterar”
4. O administrador deverá escrever os novos dados do administrador e clicar no botão “Alterar”
5. O sistema mostrará uma página com os atuais dados e os novos dados e os botões “Confirmar alteração" e “Cancelar”
6. O administrador deve clicar em no botão “Confirmar alteração”
7. O sistema realizará as alterações no registro

**Fluxo Alternativo A**

1. O sistema, na página dos resultados da busca por administrador da seção do administrador, apresentará uma listagem em tabela do(s) administrador(es) buscado. Cada linha da tabela apresentará os dados do cliente e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Alterar”
3. O sistema mostrará uma página com os atuais dados do administrador e um formulário com os campos nome, email, uma senha para a inserção dos novos dados e um botão “Alterar”
4. O administrador deverá escrever os novos dados do administrador e clicar no botão “Alterar”
5. O sistema mostrará uma página com os atuais dados e os novos dados e os botões “Confirmar alteração" e “Cancelar”
6. O administrador deve clicar em no botão “Cancelar”
7. O sistema retorna ao formulario.

### CDU 22

Excluir jogadores

**Fluxo Principal**

1. O sistema, na página dos resultados da busca por jogadores da seção do administrador, apresentará uma listagem em tabela do(s) cliente(s) buscado. Cada linha da tabela apresentará os dados do Jogador e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Excluir”
3. O sistema mostrará uma página perguntando se o administrador deseja realmente excluir o jogador e os botões "Cancelar" e ”Excluir”
4. O administrador deverá clicar em ”Excluir”

**Fluxo Alternativo A**

1. O sistema, na página dos resultados da busca por jogadores da seção do administrador, apresentará uma listagem em tabela do(s) cliente(s) buscado. Cada linha da tabela apresentará os dados do Jogador e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Excluir”
3. O sistema mostrará uma página perguntando se o administrador deseja realmente excluir o jogador e os botões "Cancelar" e ”Excluir”
6. O administrador deve clicar em no botão “Cancelar”
7. O sistema retorna a página dos resultados da busca.

### CDU 23

Excluir jogos

**Fluxo Principal**

1. O sistema, na página dos resultados da busca por jogos da seção do administrador, apresentará uma listagem em tabela do(s) cliente(s) buscado. Cada linha da tabela apresentará os dados do jogo e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Excluir”
3. O sistema mostrará uma página perguntando se o administrador deseja realmente excluir o jogo e os botões "Cancelar" e ”Excluir”
4. O administrador deverá clicar em ”Excluir”

**Fluxo Alternativo A**

1. O sistema, na página dos resultados da busca por jogos da seção do administrador, apresentará uma listagem em tabela do(s) cliente(s) buscado. Cada linha da tabela apresentará os dados do jogo e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Excluir”
3. O sistema mostrará uma página perguntando se o administrador deseja realmente excluir o jogo e os botões "Cancelar" e ”Excluir”
6. O administrador deve clicar em no botão “Cancelar”
7. O sistema retorna a página dos resultados da busca.

### CDU 24

Excluir carrinhos

**Fluxo Principal**

1. O sistema, na página que exibe todos os carrinhos de um jogador, terá na listagem de cada carrinho os botões ”Excluir”
2. O funcionário deverá clicar no botão “Excluir”
3. O sistema mostrará uma página perguntando se o administrador deseja realmente excluir o carrinho e os botões "Cancelar" e ”Excluir”
4. O administrador deverá clicar em ”Excluir”

**Fluxo Alternativo A**

1. O sistema, na página que exibe todos os carrinhos de um jogador, terá na listagem de cada carrinho os botões ”Excluir”
2. O funcionário deverá clicar no botão “Excluir”
3. O sistema mostrará uma página perguntando se o administrador deseja realmente excluir o carrinho e os botões "Cancelar" e ”Excluir”
6. O administrador deve clicar em no botão “Cancelar”
7. O sistema retorna a página dos resultados da busca.

### CDU 25

Excluir administradores 

**Fluxo Principal**

1. O sistema, na página dos resultados da busca por administradores da seção do administrador, apresentará uma listagem em tabela do(s) administradores(es) buscado. Cada linha da tabela apresentará os dados do administradores e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Excluir”
3. O sistema mostrará uma página perguntando se o administrador deseja realmente excluir o administradores e os botões "Cancelar" e ”Excluir”
4. O administrador deverá clicar em ”Excluir”


**Fluxo Alternativo A**

1. O sistema, na página dos resultados da busca por administradores da seção do administrador, apresentará uma listagem em tabela do(s) administradores(es) buscado. Cada linha da tabela apresentará os dados do administradores e os botões “Alterar”, ”Excluir” e “Carrinhos”
2. O administrador deverá clicar no botão “Excluir”
3. O sistema mostrará uma página perguntando se o administrador deseja realmente excluir o administradores e os botões "Cancelar" e ”Excluir”
6. O administrador deve clicar em no botão “Cancelar”
7. O sistema retorna a página dos resultados da busca.

## Diagramas de Sequência

 ### [CDU 01](#CDU-01): Efetuar login

![Diagrama de Sequência CDU 03](diagramas/sequencia/diagrama_sequencia_CDU01.png)

 ### [CDU 02](#CDU-02): Efetuar logout

![Diagrama de Sequência CDU 03](diagramas/sequencia/diagrama_sequencia_CDU02.png)

 ### [CDU 03](#CDU-03): Pesquisar por Jogos 

![Diagrama de Sequência CDU 03](diagramas/sequencia/diagrama_sequencia_CDU03.png)

 ### [CDU 04](#CDU-04): Consultar jogos

![Diagrama de Sequência CDU 03](diagramas/sequencia/diagrama_sequencia_CDU04.png)

 ### [CDU 05](#CDU-05): Criar uma conta como jogador

![Diagrama de Sequência CDU 03](diagramas/sequencia/diagrama_sequencia_CDU05.png)

### CDU 02

Morbi fringilla dolor at mattis vestibulum.

**Fluxo Principal**

**Fluxo Alternativo A**

### CDU 03

Duis nec orci quis velit faucibus hendrerit tempus vel libero.

**Fluxo Principal**

**Fluxo Alternativo A**
