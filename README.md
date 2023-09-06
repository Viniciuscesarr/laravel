# Projeto Silvio - Guia de Configuração

## Requisitos

- **Docker**: Certifique-se de ter o Docker instalado e configurado em seu sistema.
- **Node.js e npm (versão 16x)**: Verifique se você possui o Node.js e o npm instalados em sua máquina com a versão 16x. Você pode verificar a instalação com os comandos `node -v` e `npm -v`.

## Configuração Inicial

1. Clone o projeto do repositório:

    ```bash
    git clone https://github.com/Viniciuscesarr/laravel.git
    ```

2. Dê permissão de execução ao arquivo `setup.sh`. No macOS, você pode fazer isso com o seguinte comando:

    ```bash
    chmod +x setup.sh
    ```

3. Execute o script `setup.sh` no terminal:

    ```bash
    ./setup.sh
    ```

    O script instalará e configurará as dependências do projeto. Quando estiver concluído, ele mostrará a URL onde o projeto estará em execução. Mantenha esse terminal aberto e em execução.

## Acessando o Projeto

O projeto estará rodando na URL [http://localhost](http://localhost). Se você encontrar problemas ao fazer login, tente se registrar novamente.

## Estrutura do Projeto

- O arquivo `resources/views/layouts/default.blade.php` contém o cabeçalho (header) e o rodapé (footer) de todas as páginas, incluindo CSS e JavaScript.
- O arquivo CSS do projeto está localizado em `resources/css/app.css`.

## Adicionando Novas Páginas

Para criar uma nova página no projeto:

1. Crie um novo arquivo/pasta na pasta `resources/views`. Mantenha a estrutura de pastas organizada, veja como exemplo a clientes
2. Crie uma rota no arquivo `routes/web.php` que aponte para o novo arquivo de visualização. Veja um exemplo comentado no arquivo `routes/web.php` para orientação.
3. A página criada deve estender o layout `layouts.default`. Use a diretiva `@section('content')` para definir o conteúdo da página e encerre com `@endsection`. Consulte `resources/views/clientes/index.blade.php` para um exemplo.

Se você precisar adicionar JavaScript a uma nova página, pode encontrar um exemplo em `resources/views/clientes/index.blade.php` .

Quando iniciar as alterações, crie uma branch para elas:

### Quando a branch ainda não estiver criada:

```bash
git checkout main
git checkout -b minha_tarefa
git push origin minha_tarefa
```

Quando a branch já estiver criada:

```bash
git checkout minha_tarefa
```

Depois de trabalhar, faça o merge da sua branch com a `main`:
```bash
git push 
git checkout main 
git merge origin/minha_tarefa
```

---

