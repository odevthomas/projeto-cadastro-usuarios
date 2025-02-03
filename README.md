
# Sistema de Cadastro de Usuários


Ao preencher os campos do formulário de cadastro e clicar em "Cadastrar", um novo usuário é adicionado à lista. A pesquisa funciona em tempo real, filtrando os resultados à medida que você digita no campo de pesquisa.

Você pode clicar no botão "Editar" para cada usuário na listagem e ver um alerta com o ID do usuário selecionado (a funcionalidade de edição em si não está implementada neste exemplo).



## Requisitos
- PHP 7.4+
- MySQL 5.7+
- Servidor Apache

## Instalação

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/seuusuario/projeto-cadastro-usuarios.git
   cd projeto-cadastro-usuarios
   ```

2. **Instale o Composer** (caso ainda não tenha):
   - Link de download: [Composer](https://getcomposer.org/download/)

3. **Instale as dependências**:
   ```bash
   composer install
   ```

4. **Crie o arquivo de ambiente**:
   ```bash
   touch .env
   ```

5. **Configure o arquivo `.env`**:
   - Utilize o comando `nano .env` para abrir o arquivo e ajustar as configurações necessárias.

6. **Configure o banco de dados**:
   - Ajuste as credenciais no arquivo `config/database.php`.

7. **Importe o script SQL**:
   - Importe o script `database/script_criacao_banco.sql` no seu banco de dados MySQL.

8. **Inicie o servidor**:
   - Execute o servidor local conforme sua configuração.

