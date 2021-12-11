<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SoQuiz - Culture Generale</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <!-- Styles -->
    </head>

    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="cer-fluid">
                <a class="navbar-brand" href="/">
                    <img src="https://www.so-buzz.fr/wp-content/uploads/2018/05/logo_full_noir.png" />
                </a>
            </div>
            <div class="cer-fluid">
                <a class="navbar-brand" href="/score">
                    Score
                </a>
            </div>
        </nav>
    </hader>

    <body>
        <div style="margin-top: 3%" class="container ">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10 col-lg-10">
                    <div class="border">

                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row justify-content-between align-items-center mcq">
                                <h4>SoQuiz - Culture Generale</h4><h2 id="number_score">1</h2>
                            </div>
                        </div>


                        <div id="quizzz" class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row align-items-center question-title">
                            <h5 class="mt-1 ml-2" id="question">Berlin est la capitale de ?</h5>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio">
                                <button class="btn btn-primary border-success align-items-center btn-success" type="button" onclick="next(1)"><i class="fa fa-angle-right"></i></button>
                                    <span id="reponse1">L'Italie</span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio">
                                <button class="btn btn-primary border-success align-items-center btn-success" type="button" onclick="next(2)"><i class="fa fa-angle-right"></i></button>
                                    <span id="reponse2">La France</span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio">
                                <button class="btn btn-primary border-success align-items-center btn-success" type="button" onclick="next(3)"><i class="fa fa-angle-right"></i></button>
                                    <span id="reponse3">L'Allemagne</span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio">
                                <button class="btn btn-primary border-success align-items-center btn-success" type="button" onclick="next(4)"><i class="fa fa-angle-right"></i></button>
                                    <span id="reponse4">L'Espagne</span>
                                </label>
                            </div>
                        </div>

                        <div id="name" class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>

let Question = {
        nombre_question: 8,
        question: {
            1:"Berlin est la capitale de ?",
            2:"Combien font 4+8 ?",
            3:"On dit qui vole un œuf vole un ... ?",
            4:"Qui a Gagné la coupe du Monde 2018 ?",
            5:"Que représente le Logo de So-Buzz ? ",
            6:"Comment s'écrit le nombre 19 en chiffres romains ?",
            7:"De quel couleur est le logo de Facebook ?",
            8:"La dernière lettre de l'Alphabet ?"
        },
        choix: {
            1: {1:"L'Italie",2:"La France", 3:"L'Allemagne", 4:"L'Espagne"},
            2: {1:"10", 2:"11", 3:"12", 4:"13"},
            3: {1:"Vélo", 2:"Arbre", 3:"Bœuf", 4:"Steak"},
            4: {1:"Belgique", 2:"France", 3:"Espagne", 4:"Italie"},
            5: {1:"Ours", 2:"Lapin", 3:"Abeille", 4:"Canard"},
            6: {1:"XVIII", 2:"XIV", 3:"XXI", 4:"XIX"},
            7: {1:"Bleu", 2:"Vert", 3:"Rouge", 4:"Noir"},
            8: {1:"A", 2:"B", 3:"C", 4:"Z"}
        },
    };
var reponsex = { reponse_joueur: { 1:"0", 2:"0", 3:"0", 4:"0", 5:"0", 6:"0", 7:"0", 8:"0" } };
var reponsev = { reponse: { 1:"L'Allemagne", 2:"12", 3:"Bœuf", 4:"France", 5:"Abeille", 6:"XIX", 7:"Bleu", 8:"Z" } };
var number = 0;
var b = "Fin du quiz continuer pour le score <button class=\"btn btn-primary border-success align-items-center btn-success\" type=\"button\" onclick=\"fin()\">Suivant</button>"

function next(num) {
    
    number = document.getElementById("number_score").innerHTML;
    number = parseInt(number) + 1;
    document.getElementById("number_score").innerHTML = number;

    if (number <= 9)
        reponsex.reponse_joueur[number - 1] = Question.choix[number - 1][num];
    if (number == 9) {
        document.getElementById("quizzz").innerHTML = b;
        document.getElementById("number_score").innerHTML = "Fin du quiz";
        number++;
        return;
    }
    document.getElementById("reponse1").innerHTML = Question.choix[number][1];
    document.getElementById("reponse2").innerHTML = Question.choix[number][2];
    document.getElementById("reponse3").innerHTML = Question.choix[number][3];
    document.getElementById("reponse4").innerHTML = Question.choix[number][4];
    var question = Question.question[number];
    document.getElementById("question").innerHTML = question;
}

function fin() {
    var score = 0;

    for (let num = 1; num <= Question.nombre_question; num++)
        reponsex.reponse_joueur[num] == reponsev.reponse[num] ? score++ : 0;
    document.getElementById("quizzz").innerHTML = "<h3>Vous avez " + score + "/" + Question.nombre_question + "</h3>" +
    "</br> <h5> Si vous voulais enregistrer votre score, continuer. </h5>";
    document.getElementById("name").innerHTML =  "<button class=\"btn btn-primary border-success align-items-center btn-success\" onclick=\"change_link(" +
    score + ")\" type=\"button\" ><i class=\"fa fa-angle-right\">Suivant</i></button>"
}

function change_link(score) {
    document.location.href = "/inscription?" + score
}

</script>