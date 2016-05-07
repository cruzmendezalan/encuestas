## Sistema de encuestas UTM

## Descripción 
Este sistema se desarrolla con el framework (Laravel 5.1)[https://laravel.com/] para la persistencia de datos se usara el sistema no-relacional MongoDB. En la carpeta utilidades se podrá encontrar todos los recursos que se usan para el desarrollo de esta aplicación.
## Documentación
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

#Comentarios
  
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
