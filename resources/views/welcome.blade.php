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
                <table>
                   @forelse ($egresados as $egresado)
                       <tr>
                           <td>{{ dd($egresado) }}</td>
                       </tr>
                    @empty
                   @endforelse
                </table>
            </div>
        </div>
    </body>
</html>
