<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitxa de la Persona</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
        }

        .card img {
            width: 100%;
            border-radius: 10px;
        }

        .card h3 {
            margin: 15px 0;
        }

        .card p {
            text-align: left;
        }

    </style>
</head>
<body>

    <h1>Fitxa de la Persona</h1>

    <div class="card">
        <?php
        $persones = [
            1 => [
                "nom" => "Joan Puig", 
                "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4YreOWfDX3kK-QLAbAL4ufCPc84ol2MA8Xg&s", 
                "telefon" => "654 321 987", 
                "email" => "joan.puig@example.com", 
                "edat" => 28, 
                "professio" => "Enginyer"
            ],
            2 => [
                "nom" => "Marc Vidal", 
                "foto" => "data:image/jpeg;base64,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", 
                "telefon" => "612 345 678", 
                "email" => "marc.vidal@example.com", 
                "edat" => 35, 
                "professio" => "Dissenyador"
            ],
            3 => [
                "nom" => "Júlia Casals", 
                "foto" => "data:image/jpeg;base64,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", 
                "telefon" => "622 555 444", 
                "email" => "julia.casals@example.com", 
                "edat" => 30, 
                "professio" => "Periodista"
            ]
        ];

        $id = $_GET['id'];

        if (isset($persones[$id])) {
            $persona = $persones[$id];
            echo '
            <img src="'.$persona['foto'].'" alt="Foto de '.$persona['nom'].'">
            <h3>'.$persona['nom'].'</h3>
            <p><strong>Telèfon:</strong> '.$persona['telefon'].'</p>
            <p><strong>Correu electrònic:</strong> '.$persona['email'].'</p>
            <p><strong>Edat:</strong> '.$persona['edat'].'</p>
            <p><strong>Professió:</strong> '.$persona['professio'].'</p>';
        } else {
            echo '<p>Persona no trobada.</p>';
        }
        ?>
    </div>

</body>
</html>
