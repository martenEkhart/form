<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<title>Page Title</title>
</head>
<body>


        <?php
        
                  
            // define variables and set to empty values
$nameErr = $achternaamErr = $emailErr = $telErr = $straatErr = $postcodeErr = $plaatsErr = $geboortedatumErr = $geslachtErr ="";
$name = $achternaam = $email = $tel = $straat = $postcode = $plaats = $geboortedatum = $geslacht = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["name"])) {
    $nameErr = "name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["achternaam"])) {
    $achternaamErr = "achternaam is required";
  } else {
    $achternaam = test_input($_POST["achternaam"]);
  }
    
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["tel"])) {
    $telErr = "tel is required";
  } else {
    $tel = test_input($_POST["tel"]);
  }

  if (empty($_POST["straat"])) {
    $straatErr = "straat is required";
  } else {
    $straat = test_input($_POST["straat"]);
  }

  if (empty($_POST["postcode"])) {
    $postcodeErr = "postcode is required";
  } else {
    $postcode = test_input($_POST["postcode"]);
  }

  if (empty($_POST["plaats"])) {
    $plaatsErr = "plaats is required";
  } else {
    $plaats = test_input($_POST["plaats"]);
  }

  if (empty($_POST["geboortedatum"])) {
    $geboortedatumErr = "geboortedatum is required";
  } else {
    $geboortedatum = test_input($_POST["geboortedatum"]);
  }

  if (empty($_POST["geslacht"])) {
    $geslachtErr = "geslacht is required";
  } else {
    $geslacht = test_input($_POST["geslacht"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (!empty($_POST)) {
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $br = "\r\n"; 



            // $name = htmlspecialchars($_POST["name"]);
            // $achternaam = htmlspecialchars($_POST["achternaam"]);
            // $email = htmlspecialchars($_POST["email"]);
            // $tel = htmlspecialchars($_POST["tel"]);
            // $straat = htmlspecialchars($_POST["straat"]);
            // $postcode = htmlspecialchars($_POST["postcode"]);
            // $plaats = htmlspecialchars($_POST["plaats"]);
            // $geboortedatum = htmlspecialchars($_POST["geboortedatum"]);
            // $geslacht = htmlspecialchars($_POST["geslacht"]);
            fwrite($myfile,"Inschrijf-datum:".  date('Y-m-d H:i:s') . $br);
            fwrite($myfile,"voornaam:". $name . $br . "achternaam:" . $achternaam  . $br ."email: " . $email . $br . "tel: " . $tel . $br ."straat: " . 
            $straat . $br ."postcode: " . $postcode . $br ."plaats: " . $plaats . $br ."geboortedatum: " . $geboortedatum . $br ."geslacht: " . $geslacht .  $br);
    
          
            fclose($myfile);
}

        ?>



<h1>Formulier invoer school</h1>
<div class="upload">
        <h3>Invoer Leerling</h3>
        <p><span class="error">* required field</span></p>
              <form class="phpform" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
   Voornaam: <input class="phpform2" type="text" name="name"><br>
             <span class="error">* <?php echo $nameErr;?></span>
             <br><br>
 Achternaam: <input class="phpform2" type="text" name="achternaam"><br>
 <span class="error">* <?php echo $achternaamErr;?></span>
 <br><br>
      Email: <input class="phpform2" type="text" name="email"><br>
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
        Tel: <input class="phpform2" type="text" name="tel"><br>
        <span class="error">* <?php echo $telErr;?></span> 
        <br><br>
     straat: <input class="phpform2" type="text" name="straat"><br> 
     <span class="error">* <?php echo $straatErr;?></span>
     <br><br>
   postcode: <input class="phpform2" type="text" name="postcode"><br>
   <span class="error">* <?php echo $postcodeErr;?></span>
   <br><br> 
     plaats: <input class="phpform2" type="text" name="plaats"><br>
     <span class="error">* <?php echo $plaatsErr;?></span>
     <br><br> 
     Geboortedatum: <input class="phpform2" type="text" name="geboortedatum"><br>
     <span class="error">* <?php echo $geboortedatumErr;?></span> 
     <br><br>
  Geslacht: <input type="radio" name="geslacht" value="vrouw">Vrouw
            <input type="radio" name="geslacht" value="man">Man
            <input type="radio" name="geslacht" value="other">Anders
            <span class="error">* <?php echo $geslachtErr;?></span>
  
  
            <input type="submit">
        </form>



        <?php
        // put your code here
        ?>
        
   
    </div>

</body>
</html