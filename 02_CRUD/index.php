<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD php MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8a23489a0f.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <h1 class="text-center p-3">CRUD con PHP y MySQL</h1>
    <div class="container-fluid row" >

        <form class="col-4 p-3">
            <h3 class="text-center text-secondary">Registro de usuario</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rut</label>
                <input type="text" class="form-control" name="rut">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de naciemiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Regristrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">RUT</th>
                    <th scope="col">FECHA NACIMIENTO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <a href="" class="btn bnt-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn bnt-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                    </tr>
                </tbody>
            </table>

        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>