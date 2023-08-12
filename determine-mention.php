<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détermination de la Mention</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .mention {
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h4>Résultats de l'élève</h4>

    <form action="" method="post">
        <label for="note">Veuillez renseigner la note:</label>
        <input type="text" name="note" id="note">
        <input type="submit" value="Valider">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $moyenne = $_POST['note'];
        $mention = "Aucune Mention";
        $mentionClass = "text-danger";

        if ($moyenne >= 10) {
            $decision = "Admis";

            if ($moyenne >= 17) {
                $mention = "Excellent";
                $mentionClass = "text-success";
            } elseif ($moyenne >= 16) {
                $mention = "Très Bien";
            } elseif ($moyenne >= 14) {
                $mention = "Bien";
                $mentionClass = "text-primary";
            } elseif ($moyenne >= 12) {
                $mention = "Assez Bien";
                $mentionClass = "text-primary";
            } else {
                $mention = "Passable";
                $mentionClass = "text-warning";
            }
        } else {
            $decision = "Éliminé";
        }
        ?>
        <b>Note: <?php echo $moyenne;?> </b>
        <p>Décision : <?php echo $decision; ?></p>
        <p class="mention <?php echo $mentionClass; ?>">
        Mention : <?php echo $mention; ?></p>
    <?php 
    } 
    ?>
</div>
</body>
</html>
