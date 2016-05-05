<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

      
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">MongoDB</div>
               
                    @if(class_exists('Mongo')) 
                        {{"Existe"}}
                    @else 
                        {{"No existe"}}
                    @endif
                    
            </div>
        </div>
    </body>
</html>
