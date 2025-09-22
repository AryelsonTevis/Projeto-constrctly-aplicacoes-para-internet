# Constrctly - Sistema de Gestão de Obras 🏗️

O **Constrctly** é uma aplicação web completa, projetada para simplificar a gestão de obras e projetos. A ferramenta oferece recursos de **gestão de tarefas** e **análise de progresso**, auxiliando construtores, engenheiros e gerentes a manterem seus projetos sob controle, do início ao fim.

---

## 🚀 Tecnologias Utilizadas

Este projeto foi construído com as seguintes tecnologias:

- **Backend:** PHP 8.2
- **Banco de Dados:** MariaDB / MySQL
- **Servidor Web:** Apache
- **Versionamento:** Git

## 🛠️ Pré-requisitos

Para rodar a aplicação localmente, você precisa ter o seguinte instalado:

- **XAMPP** ou **WAMP** (já inclui Apache, PHP e MariaDB)
- **Git**

## 📦 Primeiros Passos

Siga estas instruções para configurar e rodar a aplicação na sua máquina.

1.  **Clone o Repositório:**

    ```bash
    git clone [https://github.com/AryelsonTevis/Projeto-constrctly-aplicacoes-para-internet.git](https://github.com/AryelsonTevis/Projeto-constrctly-aplicacoes-para-internet.git)
    ```

2.  **Renomeie a Pasta do Projeto:**
    Para que as rotas funcionem corretamente, renomeie a pasta clonada de `Projeto-constrctly-aplicacoes-para-internet` para `projeto`.

    ```bash
    mv Projeto-constrctly-aplicacoes-para-internet projeto
    ```

    Em seguida, mova-a para a raiz do seu servidor local (`C:\xampp\htdocs\`).

3.  **Configuração do Banco de Dados:**

    - Crie um banco de dados chamado `constrctly` no phpMyAdmin.
    - Importe o arquivo SQL (se existir) para criar as tabelas necessárias.

4.  **Acesse a Aplicação:**
    Abra seu navegador e acesse a URL:
    `http://localhost/projeto`

---

## 📂 Estrutura do Projeto

A arquitetura do projeto segue o padrão MVC (Model-View-Controller), com as seguintes camadas:

- **`controller/`**: Lida com a lógica de requisição e resposta do usuário.
- **`dao/`**: Camada de acesso a dados. Responsável por todas as operações com o banco de dados.
- **`generic/`**: Classes utilitárias e genéricas, como o `Controller` e a conexão com o banco de dados.
- **`public/`**: Contém os arquivos de visualização (views) em HTML e PHP.
- **`service/`**: Camada de serviço, onde a lógica de negócio é implementada.
- **`template/`**: Gerencia a inclusão de arquivos de layout e views.

---

Se tiver alguma dúvida, sinta-se à vontade para abrir uma _issue_ no repositório.
