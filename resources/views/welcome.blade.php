<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table Relation Many to Many Laravel 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-auto">
              <h3>Alumno <span class="badge bg-secondary">{{$alumno->nombre}}</span> cursa las materias: </h3>

              <table class="table table-striped table-hover">
                <thead class="bg-primary text-white">
                  <th>MATERIAS</th>
                </thead>
                <tbody>
                  @foreach ($alumno->materias as $registro)
                      <tr>
                        <td>{{$registro->nombre}}</td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-auto">
            <h3>Materia <span class="badge bg-secondary">{{$materia->nombre}}</span> es cursada por: </h3>

            <table class="table table-striped table-hover">
              <thead class="bg-primary text-white">
                <th>ALUMNOS</th>
              </thead>
              <tbody>
                @foreach ($materia->alumnos as $registro)
                    <tr>
                      <td>{{$registro->nombre}}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>