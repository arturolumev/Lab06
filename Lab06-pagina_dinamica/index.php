
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style-form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <div class="container">
        <!--Seccion A-->
        <div class="title">Login</div>
        <!--<form action="#" name="formulario"
                oninput="resultado.value=parseInt(coste.value)+parseInt(alquiler.value)+parseInt(hotel.value)+parseInt(comida.value)">-->
        <form method="post" action="portafolio.php" name="login">

            <div class="user_details">
                <div class="input-box">
                    <span class="details">Usuario</span>
                    <input type="text" placeholder="Ingrese su usuario" minlength="4"
                        maxlength="100" name="user" required>
                </div>
                <div class="input-box">
                    <span class="details">Contraseña</span>
                    <input type="password" placeholder="Ingrese su contraseña" minlength="4"
                        maxlength="100" name="password" required>
            </div>
            
            <div>
                <button class="btn-1">Enviar</button>
            </div>
        </form>
    </div>
    <!--Scripts-->
    <script>
        //Solo letras
        function check(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patron de entrada, solo acepta letras (no numeros ni caracteres especiales)
            patron = /[A-Za-z]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
    </script>
    <script>
        //Caracteres maximos
        function longitudMaxima(object) {
            if (object.value.length > object.maxLength)
                object.value = object.value.slice(0, object.maxLength)
        }
    </script>
    <script>
        //Hallar el total
        function totalestimado() {
            //Entrada de los valores
            coste = document.getElementById("coste").value;
            alquiler = document.getElementById("alquiler").value;
            hotel = document.getElementById("hotel").value;
            comida = document.getElementById("comida").value;

            // Para que no ocurran errores NaN, si el valor se encuentra vacio, automaticamente se considera como si fuera 0
            if (coste == "") { coste = 0 };
            if (alquiler == "") { alquiler = 0 };
            if (hotel == "") { hotel = 0 };
            if (comida == "") { comida = 0 };

            //Sumar el total
            total = parseFloat(coste) + parseFloat(alquiler) + parseFloat(hotel) + parseFloat(comida);

            //Indicar el total en pantalla
            document.getElementById("resultado").innerHTML = "S/. " + parseFloat(total);
        }
    </script>

    <script>
        //Validar que solo acepten numeros
        function validarNumeros(event) {
            if (event.charCode >= 48 && event.charCode <= 57) {
                return true;
            }
            return false;
        }
    </script>
    <script>
        //Validacion de fechas
        function validarFechas() {
            var fechainicial = document.getElementById("FechaInicial").value;
            var fechafinal = document.getElementById("FechaFinal").value;
            
            //La fecha final siempre debe ser mayor a la inicial
            //Caso contrario soltara una alerta
            if (Date.parse(fechafinal) < Date.parse(fechainicial)) {

                alert("La fecha final debe ser mayor a la fecha inicial");
            }
        }
    </script>
</body>

</html>