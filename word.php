<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>word excuse</title>
    <link rel="icon" href="fake_excuse.png">
    <link rel="stylesheet" href="./style.css">
   
</head>
<body>

    <?php 
   
    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $teacher = $_GET['teacher'];
    $motif = $_GET['motif'];
    
    ?>

    <h1>Word Excuse</h1>

    <p class="date">Le 
        <?php
            $date = date("l\, d-m-Y");
            setlocale(LC_TIME, "fr-FR");
            echo strftime("%A %d %B %G", strtotime($date));
        ?>,
    </p>

    <p class="paragraphe">Mrs, Mr,</p>

    <p class="paragraphe">Please excuse the absence of
        <?php
            $gender = $gender == "boy" ?  "my son, " : "my daughter, ";

            echo $gender . " " . $name . ", for this day.";
        ?>
    </p>

    <p class="paragraphe">In effect, 
        <?php
            echo($gender == "boy" ?  "he " : "she ");
        ?>

        will not be able to follow the teacher's course

        <?php
            echo $teacher;
        ?>

        for the following reason
    </p>

    <ul>
        <li> - <?php 
        echo $motif . " ";
        switch ($motif) {
            case 'illness':
                echo " : the doctor diagnosed malaria";
                break;

            case 'death of the goldfish':
                echo " : our goldfish died last night";
                break;

            case 'significant extra-curricular activity':
                echo " : a soccer tournament is planned during the week";
                break;

                case 'business trip':
                    echo " : we urgently need to go to the maldives to sort things out";
                    break;
            
            default:
            echo " : the school is not priority";
                break;
        }
        ?>
        </li>
    </ul>
    
    <p class="paragraphe">Please accept my best regards</p>

    <img src="logo.jpg" alt="Logo of school">
</body>
</html>