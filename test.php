<!DOCTYPE html>

<html>
<head>
    <title>
        Testing new portfolio project
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="lorem ipsum porel mipsus wololololo">
    <meta name="keywords" content="test,portfolio,job,website,php">
    <meta name="author" content="Vladescu Gabriel">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet" >
    <link href="styles/owl.carousel.css" rel="stylesheet">
    <link href="styles/owl.theme.default.css" rel="stylesheet">
    <link href="styles/category_nav_style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">

</head>

<body>

<!-- Deci footer contine js, header... cam da. Sunt foarte rare cazurile cand ai nevoie de js in header. Nu-mi vine unul in minte acum. -->
<!-- Good... In rest e ok. Sa ai grija intotdeauna fisierul tau de custom.js, sa fie ultimul. Pentru ca el compileaza in ordinea pe care o alegi tu. Si sa zicem ca in owl.carousel, exista o functie idk, slide. care face slide automat odata la 10 secunde.
Daca tu in custom.js apelezi functia si ii zici sa faca la 2 secunde, pentru ca fisierul owl e inclus dupa, o sa iti dea over write mereu. la fel si la css. -->
<!-- Voiai sa scrii ceva. Nu. Ai inteles la ce ma refer? Da. Acum da. Exista vreo problema daca bag in <head> tot ce tine de js si css?
hai sa iti arat -->

<?php include("includes/header.php"); ?>
<?php include("home.php"); ?>
<?php include("includes/footer.php"); ?>

</body>

</html>