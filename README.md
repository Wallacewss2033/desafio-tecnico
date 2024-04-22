## Instalação com docker 

- Clone o projeto 'desafio-tecnico'
```
git clone https://github.com/Wallacewss2033/desafio-tecnico.git
```
- Entre na raiz do prejeto ```desafio-tecnico```

### REALIZAR PROCESSO AUTOMATICO
- Rode:

``` 
php script.php
```
- #### Pule para sessão de CONFIGURAÇÃO DB 
### REALIZAR PROCESSO MANUALMENTE (caso não tenha realizado o processo automático)

- Clone o projeto ```dev-backend```
```
git clone https://github.com/Wallacewss2033/dev-backend.git
```


- Ainda na raiz do prejeto ```desafio-tecnico```, rode:

```
docker-compose up -d --build
```
- Na raiz do projeto 'dev-backend' rode: 

```
cp .env.example .env
```

- Entre no terminal do container ```dev-backend```, com comando:
 ```
 docker exec -it backend-test bash
 ```

- no terminal do container rode:

```
composer install
```
- logo após, rode:

```
php artisan key:generate
```
_________________________________________________________________________________________________
### CONFIGURAÇÃO DB

- Não esqueça de configurar o banco de dados na ``` .env ```
  
![image](https://github.com/Wallacewss2033/fullstack-challenge-20231205/assets/39920409/ec726dce-7762-4c68-b66c-668698afad41)

OBS: user e senha do mysql ambos são ```root```, o banco é ```dev``` e o host é ```mysql-test```

- No terminal do container para criar o banco de dados, rode:

```
php artisan migrate
```

### CONFIGURE O EMAILABLE

- PREENCHA ESSAS VARIÁVEIS (URL E TOKEN) DO EMAILABLE

![image](https://github.com/Wallacewss2033/desafio-tecnico/assets/39920409/8e169f95-9949-40d1-9283-e37b412867b4)


### ERROS DE PERMISSÃO

OBS: CASO HAJA ALGUM PROBLEMA DE PERMISSÃO NO PROJETO RODE:

```
chown -R root:www-data storage
```
```
chmod -R 777 ./storage
```
```
chmod -R 775 ./storage
```


# Frontend

Após rodar o comando de buildar os containers o frontend já estará pronto, apenas configure a .env 

![image](https://github.com/Wallacewss2033/desafio-tecnico/assets/39920409/25d1c3b2-5c60-4154-9e6c-79499577c63f)




    
