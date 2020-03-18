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
