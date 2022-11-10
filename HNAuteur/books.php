<?php
include('header.php');
?>
    <head>
        <style>
            body{
                background-image: url(images/bgBooks.jpeg);
            }
            main section{
                height: auto;
                padding: 2%;
                margin: 10%;
                background-color: white;
                color: black;                
            }
            .promo{
                display: flex;
                justify-content: space-around;
                background-image: url(images/bgIndex.jpg);
                background-repeat: no-repeat;
                background-color: aqua;
                color: white;
                font-size: xx-large;
                padding: 1%;
                margin: -2.7%;
                margin-bottom: 2%;
                height: 250px;
                width: auto;
            }
            .toutLesLivres, .toutesLesNouvelles{
                display: flex;
                justify-content: space-around;
                align-items: center;
                flex-wrap: wrap;
            }
            .livre{
                border: 1px black solid;
                margin: 2%;
                padding: 1%;
                text-align: center;
            }
            img{
                width: 200px;
                height: auto;
            }
            .promo img{
                width: auto;
                height: 400px;
            }
            .promo h1{
                color: cyan;
                background: linear-gradient(to right, cyan 0%, yellow 100%);
	            -webkit-background-clip: text;
	            -webkit-text-fill-color: transparent;
            }
        </style>
    </head>
        <main>
            <section>
                <div class="promo">
                    <h1>CRYPTOSYSE</h1>
                    <img src="images/livre/mokup-Cryptosyse.png" alt="Mokup de Cryptosyse">
                </div>
                <h1>Livres</h1>
                <div class="toutLesLivres">
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                </div>
                <h1>Nouvelles</h1>
                <div class="toutesLesNouvelles">
                    <div class="livre">
                        <img src="http://www.cheatsheet.com/wp-content/uploads/2015/12/christmas-silent-night.jpg?w=640&h=427" alt="Couverture">
                        <h3>L'usine de NoHell</h3>
                    </div>
                    <div class="livre">
                        <img src="data:image/jpeg;base64,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" alt="Couverture">
                        <h3>La petite Planète</h3>
                    </div>
                    <div class="livre">
                        <img src="https://jolstatic.fr/www/captures/3588/5/127685-640.jpg" alt="Couverture">
                        <h3>Une Boîte de Raviolie</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-nouvelle.png" alt="Couverture">
                        <h3>Le Chasseur et la Louve</h3>
                    </div>
                </div>
            </section>
        </main>
<?php
include('footer.php');
?>