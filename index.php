<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="greeting.php" method="GET">
        <div>
            <label for="paragraphe">Inserisci la frase</label>
            <input id="paragraphe" type="text" name="paragraphe">  
        </div>
        <div>
            <label for="badword">Inserisci la parola da cersurare</label>
            <input id="badword" type="text" name="badword"> 
        </div>
        
        <button type="submit">submit</button>
    </form>
</body>
</html>