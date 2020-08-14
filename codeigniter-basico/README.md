# DOCUMENTACIÓN

El proyecto esta definido para controlar el entorno mediante las constantes definidas en el fichero *application/config/constants.php*
Para gestionar el valor de estas constantes se utiiliza la variable **CI_ENV** definida en el *.htaccess*
Con esto conseguimos que para cambiar el entorno solo debamos cambiar el valor de esta variable

## INSTALACIÓN

Descomentar los ficheros **Ignores** de *.gitignore*
Esta ignorada el fichero *application/config/constants.php* para poder definir diferentes rutas tanto en local como producción
Revisar las rutas en las constantes.

## DOMINIO BASE

La constante **DOMAIN** define el dominio que servirá como base para la url *application/config/config.php*
Podemos definir de forma sencilla si queremos https en los entornos

## MODE MAINTENANCE

El modo mantenimiento esta creado mediante un hook.
Cambia el valor de la variable del .htaccess CI_ENV a built para cambiar a este modo y activar la vista de bajo construcción.

## HTTP - HTTPS

Al final de *application/config/routes.php*  definimos la logica para que segun el entorno en el que trabajes nos redireccione a **http** o **https**.


## AUTOLOAD

Tenemos configuras en *application/config/autoload.php* los recursos considerados básicos y necesarios para el funcionamiento de Codeigniter en cualquier ámbito.
Intentando seguir el paradigma de controlar lo máximo posible el framework desde archivo *application/config/constants.php*, Los datos para cargar en los diferentes métodos
de **application/config/autoload.php* se hacen desde dicho fichero de constantes.
Se recomiendo seguir el mismo paradigma si queremos añadir mas autoload.

## HElPER

Tiene el helper **json_msg** para hacer respuestas en json de forma sencilla

## PROFILER

Tiene los profiler activados. Para usar poner en el controlador:
`$this->output->enable_profiler(true);`

## ROUTES

Se deben controlar desde *application/config/routes.php* No he dado con la forma de usarlas desde el fichero de constantes.s

## DEPLOY

*Creamos en el servidor un repositorio --bare para produccion :* **Crear todo con el propio usuario para que todo lo creado tenga este usuario y grupo. Osea hacer al servidor como usuario no como root. Sino al subir desde local puede dar error y tendremos que cambiar el usuario:grupo con chown**

`git init --bare domino.git`

*Entramos en la carpeta hook del mismo y creamos un archivo post-receive*

`cd dominio.git/hooks`

`nano post-receive`

*En este fichero ponemos el hook que hara que al hacer push se guarde la información en un directorio definido:


```
#!/bin/sh
GIT_WORK_TREE=/home/<tu-username>/<tu-dominio.com>/public-folder git checkout -f
```

*Otra opcion*

```
#!/bin/sh
git --work-tree=/home/bbespana/public_html/main --git-dir=/home/bbespana/bigbenespana.git checkout -f master
```

*Guardamos y cambiamos los permisos a este fichero con el comando:*

`chmod +x post-receive`

*Pasamos a nuestro local.*

*Antes iniciar repositorio creamos un gitignore con los ficheros/directorios que queremos ignorar. En [esta web](https://www.gitignore.io/) podemos crear un modelo*

*Iniciamos repositorio y añadimos archivos*

`git init`
`git add .`
`git commit -m "Start Proyect"`

*En local añadimos el remoto que apuntara al repositorio de desarrollo*

```
git remote add {nombre-remoto} ssh://<tu-username>@<tu-domain-name>/home/<tu-username>/dominio.git
```

Hacemos push de nuestro local:
`git push {nombre-remoto} {rama-remoto (normalmente master)`


