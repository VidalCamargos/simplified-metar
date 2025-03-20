# Simplificador de METAR

- WORKING IN PROGRESS

Este projeto tem como objetivo fornecer uma API que simplifica e torna legível os dados METAR, permitindo consultas baseadas em códigos ICAO, filtragem por localização e retorno de informações meteorológicas de forma estruturada.

## Funcionalidades

- **Listagem de ICAOs**: Permite listar códigos ICAO, com filtros por estado, cidade ou país.
- **Consulta METAR**: Envie um código ICAO e receba os dados METAR de forma legível e estruturada.

## Extra

- **Padronização de Código**: Utiliza `Rector` e `ECS` para manter a qualidade do código.
- **Containerização**: O projeto roda dentro de um ambiente Docker com Nginx, PHP 8.4 e MySQL.

## Requisitos

- Docker

## Instalação e Configuração

1. Clone o repositório:
   ```sh
   git@github.com:VidalCamargos/simplified-metar.git
   cd simplified_metar
   ```
2. Configure as variáveis de ambiente:
   ```sh
   cp .env.example .env
   ```
3. Suba os containers:
   ```sh
   docker compose up -d --build
   ```
4. Instale as dependências do Laravel:
   ```sh
   docker compose exec application composer install
   ```
5. Gere a chave da aplicação:
   ```sh
   docker compose exec app php artisan key:generate
   ```
6. Rode as migrações:
   ```sh
   docker compose exec app php artisan migrate
   ```

7. Caso queira popular o banco de dados:
   ```sh
   docker compose exec app php artisan migrate:fresh --seed
   ```

## Uso da API

 - URL da api:``` localhost/api```

### Listar ICAOs

Endpoint para listar ICAOs com filtros opcionais:
```http
In progress
```

### Consultar METAR

Envie um código ICAO e receba um JSON formatado:
```http
In progress
```
Exemplo:
```http
In progress
```
