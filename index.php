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
    </div>
    <body style="background-color: lightgreen;">
        <!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>

<h2>Liste des étudiants</h2>

<ul id="studentList"></ul>
<!DOCTYPE html>
<html>
<head>
    <title>DevOps Status</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            text-align: center;
        }
        .box {
            margin-top: 100px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0px 0px 10px gray;
        }
        .ok {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <p>Application : <span class="ok">Running ✔</span></p>
    <p>CI/CD : <span class="ok">Active ✔</span></p>
    <p>Version : 1.0</p>

</di





    



