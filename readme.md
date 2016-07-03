## Sistema de encuestas UTM

## Descripción 
Este sistema se desarrolla con el framework (Laravel 5.1)[https://laravel.com/] para la persistencia de datos se usara el sistema no-relacional MongoDB. En la carpeta utilidades se podrá encontrar todos los recursos que se usan para el desarrollo de esta aplicación.
## Documentación de herramientas
Todas las configuraciones que se detallan a continuación son probadas bajo las siguientes caracteristicas:  
    -[Debian 8.4](https://www.debian.org/releases/jessie/)  
    -[PHP 5.5.9](http://php.net/releases/5_5_9.php)
## Documentación ofical
4/may/2016  
Interfaces de egresados y de empleadores.
    Para visualizar las interfaces con las rutas  
    /egresados  
    /empleadores  


Por hacer [Interfaces de egresados y empleadores]  
    -Ajustar attributos name a todos los inputs.  
    -Agregar Jquery  
    -Crear modulo javascript para hacer crecer las tablas de manera dinamica  
    -Añadir los parametros necesarios al form  
//logueo con autenticación
mongo --port 27017 -u manager -p 123456 --authenticationDatabase admin

use encuestas
db.createUser(
  {
    user: "encuestas",
    pwd: "encuestasutm",
    roles: [ { role: "userAdmin", db: "encuestas" } ]
  }
)

* [Debian 8.4 Sistema Operativo](https://www.debian.org/releases/jessie/)  
* [PHP 5.5.9 Interprete](http://php.net/releases/5_5_9.php)  
* [Mongodb 1.1.6 Sistema de Persistencia](https://docs.mongodb.com/)  
* [Laravel-Mongo Interacción del ORM de Laravel con Mongodb](https://github.com/jenssegers/laravel-mongodb)  
* [Bootstrap Interfaz de usuario](http://getbootstrap.com/)
* [Jquery Interfaz de usuario](http://api.jquery.com/)

## Documentación de sistema
Cómo el sistema manejara dos vistas inicialmente, la primera será para la encuesta a  egresados y la segunda para la encuesta a empleadores. Los formularios son escritos en HTML puro, se omitío escribirlos con la sintaxis de Blade, en caso de mantenimiento no será necesario aprender una sintaxis nueva teneniendo conocimientos de HTML bastará.  
La encuesta a egresados se divirá en tres secciones tal y como viene en el PDF proporcionado. Para no manejar un solo archivo HTML usaremos los layouts proporcionados por el framework, para revisar sección por sección se deberá accesar a la ruta siguiente:  
>encuestas/resources/views/egresados/  

Aquí se encontraran 3 archivos, cada uno a su correspondiente sección en el PDF
* primeraparte.blade.php
* segundaparte.blade.php
* terceraparte.blade.php  

El sistema cuenta con dos controladores para el manejo de los requests.  
* EgresadosController
* EmpleadoresController

El sistema cuenta con los siguientes modelos para manejar la persistencia con la base de datos.
* identificacionEgresado
* estudiosRealizadosutm

Se añadio al framework Laravel una dependencia para poder trabajar con eloquent. (Los métodos siguen siendo los mismos que la documentación oficial de [Eloquent](https://laravel.com/docs/5.1/eloquent)).  
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
* división en 3 secciones de la vista encuesta a egresados
* Creacion del modelo identificacionEgresado
* Enlazamiento entre identificacionEgresado y Egresado
* Creacion del modelo
