# CRUD de usuarios

Clona e ingresa a la carpeta para ejecutar:

## Instalación

```
 composer install
 npm install
 npm run dev
```

## .env

Para crear este archivo debes de hacer una copia de .env.example y renombrarlo como **.env** una vez que lo tengas, vas a tu consola y ejecutas:

```
 php artisan key:generate
```

## Base de datos

-   Crea una base de datos con el nombre: **crud_users**
-   En el **.env** estan las variables que van a conectar a tu base de datos, modifica lo que sea necesario como nombre de la base de datos, host, user, password, etc
-   Ahora en la terminal corre las migraciones (OJO: Esto en caso de que quieras algunos usuarios de prueba agregale el **--seed**) con el comando:
    -   Con usuarios de prueba
        `php artisan migrate --seed`
    -   Sin usuarios de prueba
    -   `php artisan migrate`

Ahora que ya tienes todo instalado y tu base de datos conectada y con o sin usuarios, puedes levantar el servidor con:

```
php artisan serve
```

Esto te arrojara tu local y si la ip local por default esta libre te arrojara el 127.0.0.1:8000, con eso puedes ir a tu navegado y verás la lista de usuarios (siempre y cuando hayas agregado el seed, en caso contrario estará vacío)
![](https://i.imgur.com/mFT4kmX.png)

## Vistas de CRUD

Puedes registrarte o logearte con algun usuario de los que hayas incluido con la migracion. De los usuarios por default, tomas el email y la contraseña, que es: **password**

-   Cuando ingreses puedes dirijirte a la lista de usuarios, que es en donde modificarás la información: - Como puedes ver la url (al ingresar a lista de usuarios) ahora tiene el /users.
    ![](https://i.imgur.com/sn5uLjA.png)

Ahora solo es cuestion de que edites, elimines o crees nuevos usuarios para tu uso, en donde tendrás las siguientes vistas:

-   Creacion de usuarios
    ![](https://i.imgur.com/BFC1vLQ.png)
-   Edicion de usuarios
    ![](https://i.imgur.com/b3fqjmk.png)
-   Eliminacion de usuarios
    ![](https://i.imgur.com/usW1Si4.png)
