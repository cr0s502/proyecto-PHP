<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Biografia Joan Cruz</title>
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Joan Cruz - 100456854</a></div>
            <ul class="menu">
                <il><a href="#">Home</a></il>
                <il><a href="#">Admin</a></il>
            </ul>
        </div>
    </nav>
    <?php
    //file permite obtener el contenido de un archivo como un arreglo. Cada linea del archivo, representa un elemento del arreglo.
    $blog = file("blog.txt");
    for ($i = 0; $i < count($blog); $i++) {
        $filaActual = explode("|", $blog[$i]);
        $id = $filaActual[0];
        echo "<div class='card' style='width: 18rem;'>" . "<div class='card-body'>";
        echo $i >= 0 ? "<h2 class='card-title'>" . $filaActual[1] . "</h2>" . "<h6 class='card-subtitle mb-2 text-muted'>" . $filaActual[2] . "</h6>" . "<h6 class='card-subtitle mb-2 text-muted'>" . "<p class='card-text'>" . $filaActual[3] . "</h6>" . $filaActual[4] . "</p>" : "<h6>" . "no se encontraron blogs" . "</h6>";
        echo "</div>" . "</div>";
    }
    ?>
</body>

</html>