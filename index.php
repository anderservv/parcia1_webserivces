
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
   
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Parcial 1</h5>
                <input type="text" class="form-control mb-2" id="name" placeholder="Nombre">
                <div class="btn-group" role="group" aria-label="Operaciones">
                    <button class="btn btn-primary" onclick="obtener_name()"><i class="fas fa-plus"></i></button>
                    
                </div>

                <div id="result" class="mt-3"></div>

            </div>
        </div>
    </div>
    
    <script>
        function calcular(operacion) {
            var name = $('#name').val();

            $.ajax({
                type: "POST",
                url: "calculadora_client.php", 
                data: {
                    name: name,
                    operacion: operacion
                },
                success: function(result) {
                    $('#result').html("Resultado: " + result);
                }
            });
        }

        function obtener_name() {
            calcular("hello");
        }
    </script>
</body>
</html>
