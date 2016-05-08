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

El sistema cuenta con dos controladores para el manejo de los requests.  
    >EgresadosController
    >EmpleadoresController
Se añadio al framework Laravel una dependencia para poder trabajar con eloquent. (Los métodos siguen siendo los mismos que la documentación oficial de [Laravel-Eloquent](https://laravel.com/docs/5.1/eloquent)).


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
*Instalación de laravel
*Instalación de mongo
*Configuracion de mongo
*Creacion de usuarios mongo  
*Asociación de mongo con Laravel
*Pruebas de inserción  
*Pruebas de consultas  
*Esqueleto de encuesta para egresados  
*Esqueleto de encuestas para empleadores  
*Modelos para la interaccion de la base de datos  