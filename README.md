# BookWise

Sistema de gerenciamento de livros desenvolvido com PHP e Tailwind CSS.

## 🚀 Tecnologias

- PHP 8.2
- Apache
- Tailwind CSS 4.1
- Docker

## 📋 Pré-requisitos

- Docker e Docker Compose instalados
- Node.js e npm (para compilar o Tailwind CSS)

## 🔧 Instalação

1. Clone o repositório:

```bash
git clone <url-do-repositorio>
cd bookwise
```

2. Instale as dependências do Tailwind CSS:

```bash
cd src
npm install
```

3. Compile o CSS:

```bash
npm run build
```

4. Inicie o Docker:

```bash
cd ..
docker-compose up -d
```

5. Acesse a aplicação em: http://localhost:8080

## 🛠️ Comandos Úteis

### Tailwind CSS

- **Build (uma vez)**:

  ```bash
  npm run build
  ```

- **Watch (compilação automática)**:
  ```bash
  npm run watch
  ```

### Docker

- **Iniciar containers**:

  ```bash
  docker-compose up -d
  ```

- **Parar containers**:

  ```bash
  docker-compose down
  ```

- **Ver logs**:
  ```bash
  docker-compose logs -f
  ```

## 📁 Estrutura do Projeto

```
bookwise/
├── src/
│   ├── assets/
│   │   └── css/
│   │       ├── input.css
│   │       └── output.css
│   ├── index.php
│   └── package.json
└── docker-compose.yml
```

## 📝 Licença

Este projeto está sob licença MIT.
