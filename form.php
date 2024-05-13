<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="vzhled.css">
</head>
<body>
<header>
        <h1>Dobromilovci</h1>

        <nav>
            <a href="index.php">Domů</a>
            <a href="form.php">Produkty a služby</a>
            <a href="onas.php">O nás</a>
            <a href="kontakty.php">Kontakty</a>
        </nav>

    </header>
<fieldset>
    <form action="" method="post">
    <legend><h1>Objednejte si jednu z našich služeb!</h1></legend>
  <label for="skull">Odchyt Skulletů: </label><input type="number" step="0" max="75650" value="0" name="skull" id="skull" class="sluzby" >
  <br>
  <br>
  <label for="mull">Odchyt Mulletů: </label><input type="number" step="0" max="15000" value="0" name="mull" id="mull" class="sluzby">
    <br>
    <br>
    <label for="kom">Odchyt Komunistů: </label><input type="number" step="0" max="68" value="0" name="kom" id="kom" class="sluzby">
    <br>
    <br>
    <label for="furr">Odchyt Furrýků: </label><input type="number" step="0" max="69" value="0" name="furr" id="furr" class="sluzby">
    <br>
    <br>
    <label for="jeh">Odchyt Jehovistů: </label><input type="number" step="0" max="420" value="0" name="jeh" id="jeh" class="sluzby">
    <br>
    <br>
    <label for="kres">Odchyt Křesťanů: </label><input type="number" step="0" max="19116" value="0" name="kres" id="kres" class="sluzby">
    <br>
    <br>
    <label for="ehm">Odchyt lidí z teplejších krajin: </label><input type="number" step="0" max="418369" value="0" name="ehm" id="ehm" class="sluzby">
    <br>
    <br>
    <label for="slech">Odchyt šlechty: </label><input type="number" step="0" max="195" value="0" name="slech" id="slech" class="sluzby">
    <br>
    <br>
    <label for="delnik">Odchyt levných dělníků z východu: </label><input type="number" step="0" max="369330" value="0" name="delnik" id="delnik" class="sluzby">
    <br>
    <br>
    <label for="mnam">Odchyt kebabových lidí: </label><input type="number" step="0" max="2000" value="0" name="mnam" id="mnam" class="sluzby">
    <br>
    <br>
    <input type="submit" value="Dokonči objednávku" id="submit" name="dokoncit">
    <br>
    <br>
</form>
</fieldset>
<br>
<footer>
Copyright &copy; 2024 Dobromilovci a.s. All Rights reserved
</footer>
<script src="script.js"></script>
</body>
</html>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dobromilovci";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if(isset($_POST["dokoncit"])){
        $skull=$_POST["skull"];
        $mull=$_POST["mull"];
        $kom=$_POST["kom"];
        $furr=$_POST["furr"];
        $jeh=$_POST["jeh"];
        $kres=$_POST["kres"];
        $ehm=$_POST["ehm"];
        $slech=$_POST["slech"];
        $delnik=$_POST["delnik"];
        $mnam=$_POST["mnam"];
    
        $sql = "INSERT INTO sluzby (id,skull, mull, kom, furr, jeh, kres, ehm, slech, delnik, mnam)
        VALUES ('','$skull', '$mull','$kom', '$furr', '$jeh', '$kres', '$ehm', '$slech', '$delnik', '$mnam')"; 
        $conn->query($sql);
        }

?>
