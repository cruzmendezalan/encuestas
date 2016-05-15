## Sistema de encuestas UTM

## Descripción 
Este sistema se desarrolla con el framework (Laravel 5.1)[https://laravel.com/] para la persistencia de datos se usara el sistema no-relacional MongoDB. En la carpeta utilidades se podrá encontrar todos los recursos que se usan para el desarrollo de esta aplicación.
## Documentación de herramientas
Todas las configuraciones que se detallan a continuación son probadas bajo las siguientes caracteristicas:  
    -[Debian 8.4](https://www.debian.org/releases/jessie/)  
    -[PHP 5.5.9](http://php.net/releases/5_5_9.php)
    -[Mongodb 1.1.6](https://docs.mongodb.com/)
    -[Laravel-Mongo](https://github.com/jenssegers/laravel-mongodb)
## Documentación de sistema
Cómo el sistema manejara dos vistas inicialmente, la primera será para la encuesta a  egresados y la segunda para la encuesta a empleadores.  
La encuesta a egresados se divira en tres secciones tal y como viene en el PDF proporcionado. Para no manejar un solo archivo HTML usaremos los layouts proporcionados por el framework, para revisar sección por sección se debera accesar a la ruta siguiente:  
>encuestas/resources/views/egresados/  

Aquí se encontraran 3 archivos, cada uno a su correspondiente en el PDF
* primeraparte.blade.php
* segundaparte.blade.php
* terceraparte.blade.php  

En caso de que se quisiera ampliar la encuesta bastará con agregar los inputs y su label a la sección que se quiera ampliar, es necesario que se agregue el atributo name a los inputs nuevos, en caso contrario la aplicación ignorará cualquier nuevo objeto agregado, revisar también que no se encuentre repetido. De el lado del servidor se realiza un barrido del formulario enviado, el nombre de los atributos es el que se vaciara en la base de datos junto con su correspondiente valor.  

El sistema cuenta con dos controladores para el manejo de los requests.  
>EgresadosController
>EmpleadoresController

Se añadio al framework Laravel una dependencia para poder trabajar con eloquent. (Los métodos siguen siendo los mismos que la documentación oficial de [Laravel-Eloquent](https://laravel.com/docs/5.1/eloquent)).  
Lista de nombres de los inputs vista egresados  
Parte I
* fechaderespuesta (date)
* nombre    (text)
* genero    (select)
* fnac      (date)
* nacionalidad  (nacionalidad)
* lorigen   (text)
* ltrabajo  (text)
* tcontacto (text)
* correoelectronico (email)
* carrera   (text)
* ftitulacion   (select)
* finiestudios  (date)
* maestria  (text)
* maestriatitulo    (select)
* doctoradotitulo   (select)
* nempresa  (text)
* tempresa  (select)
* fingreso  (date)
* pactual   (text)
* pinicial  (text)
* thorario  (select)
* tcontacto (select)
* tempresa  (text)
* imensual  (select)
* alaborales    (select)

Parte II
* Tabla, por definir.

Parte III
* tiempoprimerempleo    (select)
* difucultadprimerempleo    (select)
* formacionrecibida (select)
* carecesconocimientos  (select)
* habilidades   (select multiple)
* carecesareasdeconocimiento    (select)
* valores   (select multiple)
* calificacioninstalaciones (select)
* calificacionserviciosescolares    (select)
* calificacionequipos   (select)
* calificacionlimpieza  (select)
* calificaciondocentes  (select)
* calificaciontecnicas  (select)
* calificacionevaluacion    (select)
* continuariasestudios  (select)
* recomendaciones

#Configuraciones
  
Crear usuario administrador mongo
```json
db.createUser({
    user:"admin",
    pwd: "admin",
    roles:["clusterAdmin","readAnyDatabase","readWriteAnyDatabase","userAdminAnyDatabase","dbAdminAnyDatabase"]
});  
```
Para habilitar la autenticación de mongo se busca el archivo mongodb.conf y se añade o descomenta la linea
```yaml
security:
    autorization: "enabled"
```
Para loguearte en mongo ahora se usa el comando:  
>mongo localhost/admin -u admin -p  

Ahora nos pasaremos a la base de datos que se usará.

>use encuestas  

Después de esto creamos el usuario que se utilizará en el sistema
```json
db.createUser({
    user:"encuestas",
    pwd:"encuestas",
    roles:["readWrite","dbAdmin"]
    })
```

Reiniciamos mongodb  

>service mongodb restart

/Applications/XAMPP/xamppfiles/etc/php.ini

#Historia
* Instalación de laravel
* Instalación de mongo
* Configuracion de mongo
* Creacion de usuarios mongo
* Asociación de mongo con Laravel
* Pruebas de inserción
* Pruebas de consultas
* Esqueleto de encuesta para egresados
* Esqueleto de encuestas para empleadores
* Modelos para la interaccion de la base de datos
* Ajuste del atributo name en la vista egresados
* Modulo identificacionEgresado que corresponde a la primera parte de la encuesta a egresados