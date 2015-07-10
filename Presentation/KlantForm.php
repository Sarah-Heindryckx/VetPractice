<!DOCTYPE html>
<!-- Sarah: aangepast: andere velden, typografie
nog na te kijken: br weg doen - css aanpassen-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Klant Toevoegen</title>
        <link href="../Css/Style.css" rel="stylesheet"> <!-- deze link is correct, mapje css toegevoegd, style zit daar in -->
    </head>
    <body>
        <div id="page">
            <div id="header">
                <p> Dierenartspraktijk </p>
                <ul>
                    <li><a href="#">Home </a></li>
                    <li><a href="#">Praktijk </a></li>
                    <li><a href="#">Gezelschapsdieren </a></li>
                    <li><a href="#">Paarden </a></li>
                    <li><a href="#">Herkauwers </a></li>
                    <li><a href="#">Zoekertjes </a></li>
                    <li><a href="#">Webshop </a></li>
                    <li><a href="#">Contacteer Ons </a></li>
                </ul>
            </div>
            <div id="content-primary">
                <h1>Gegevens klant</h1>
                <form method="POST" action="
                      voegklanttoe.php?action=process">
                    <fieldset>
                        <legend>Klantgegevens</legend>
                        <br/>
                        
                        <label for="naam">Naam:</label><br />
                        <input type="text" size="50" name="naam" /><br />
                        <label for="voornaam">Voornaam:</label><br />
                        <input type="text" size="50" name="voornaam" /><br/>
                        <label for="straat">Straat:</label><br />
                        <input type="text" size="50" name="straat" /><br />
                        <label for="nr">Huisnummer:</label><br />
                        <input type="text" size="50" name="nr" /><br />
                        <label for="postcode">Postcode:</label><br />
                        <input type="text" size="10" name="postcode" /><br />
                        <label for="woonplaats">Woonplaats:</label><br />
                        <input type="text" size="50" name="woonplaats" /><br />
                        <label for="email">E-mail:</label><br />
                        <input type="email" size="50" name="email" /><br /><br>
                        <label for="wachtwoord">Wachtwoord:</label><br>
                        <input type="password" size="50" name="wachtwoord"> <br>
                        <label for="tel">Tel:</label><br />
                        <input type="text" size="50" name="tel" /><br /><br>
                        

                        <input type="submit" value="Opslaan" />
                        <br /><br/>

                    </fieldset>

                </form>
            </div>

            <div id="content-secondary">
                <button>Inloggen</button>               
                <button>Uitloggen</button>
                 
            </div>

            <div id="footer">
                <p> Dierenartspraktijk </p>
            </div>

        </div>
    </body>