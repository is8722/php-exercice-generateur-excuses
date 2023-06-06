<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuse</title>
</head>
<body>
   

    <h2>Please enter the required information :</h2>

    <form action="mot.php" method="get">
        <label for="name">Enter name of the child please : </label>
        <input type="text" name="name"><br>
        <label for="gender">Enter gender of the child please :</label>
        <input type="radio" name="gender" value="boy">Boy
        <input type="radio" name="gender" value="girl">Girl<br>
        <label for="teacher">Enter name of the teacher please : </label>
        <input type="" name="teacher"><br>
        <label for="motif">Enter a reason for the absence please :</label><br>
        <input type="radio" name="motif" value="illness">Illness<br>
        <input type="radio" name="motif" value="death of the red fish">Death of the red fish<br>
        <input type="radio" name="motif" value="significant extra-curricular activity">Significant extra-curricular activity<br>
        <input type="radio" name="motif" value="business trip">Business trip<br>
        <input type="submit" value="Send">
    </form>

</body>
</html>