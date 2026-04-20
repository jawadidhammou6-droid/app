<!DOCTYPE html>
<html>
<head>
    <title>Gestion des étudiants</title>
    <style>
        body {
            font-family: Arial;
            background-color: #ffffff; /* blanc */
            text-align: center;
        }

        h1 {
            color: #2c3e50;
        }

        .container {
            background-color: #ffffff;
            width: 320px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            outline: none;
        }

        /* Bleu ciel pour les champs */
        .nom, .prenom {
            background-color: #d0ebff; /* bleu ciel */
        }

        /* Bouton bleu foncé */
        button {
            background-color: #007BFF; /* bleu */
            color: white;
            padding: 10px;
            width: 95%;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <h1>Gestion des étudiants</h1>

    <div class="container">
        <form action="add.php" method="POST">
            <input type="text" name="nom" placeholder="Nom" class="nom" required>
            <input type="text" name="prenom" placeholder="Prénom" class="prenom" required>

            <button type="submit">Ajouter</button>
        </form>
    </div>
    <div class="container">
        <table>
            <thead>
                <th><td>test</td></th>
            </thead>
            <tbody>
                <tr>
                    <td>isaac</td>
                </tr>
            </tbody>
        </table>
    </div>
    



