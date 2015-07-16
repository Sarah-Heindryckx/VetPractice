<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dierenartspraktijk</title>
        <link type="text/css" rel="stylesheet" href="./Css/style.css"/>
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
                <h1>Gegevens dier</h1>       
                <form method="post" action="./voegdiertoe.php?action=process">
                    <fieldset>
                        <legend> Gegevens DIER </legend>
                        <br/>
                        
                        <label for="soort">Diersoort:</label><br />
                        <input type="text" size="50" name="soort" /><br />
                        <label for="ras">Ras:</label><br />
                        <input type="text" size="50" name="ras" /><br />
                        <label for="naam">Naam:</label><br />
                        <input type="text" size="50" name="naam" /><br />
                        <label for="chipnr">Chipnummer:</label><br />
                        <input type="text" size="50" name="chipnr" /><br />
                        <label for="paspoortnr">Paspoortnummer:</label><br />
                        <input type="text" size="50" name="paspoortnr" /><br />
                        <label for="stamboomnaam">Stamboomnaam:</label><br />
                        <input type="text" size="50" name="stamboomnaam" /><br />
                        <label for="gebdatum">Geboortedatum:</label><br />
                        <input type="text" size="50" name="geboortedatum" /><br />
                        <label for="kleur">Kleur:</label><br />
                        <input type="text" size="50" name="kleur" /><br />
                        <label for="medbeeld">Medische beeldvorming:</label><br />
                        <input type="text" size="50" name="medbeeld" /><br />
                        <br />
                        <input type="submit" value="Wijziging Opslaan" />
                        <br /><br/>
                        <input type="submit" value="Terug naar Overzicht" />
                        <br />
                        <br />
                        </p> 

                        <br/>
                    </fieldset>

                </form>


                <br />
                <br />
                <br />
                <br />


            </div>

            <div id="content-secondary">
                <p><br />

                    Ingelogd door<br />
                    Log out </p>
                <br/>
                <p> Log In </p><br />
                <p>Search</p>
                <input name="zoekterm" type="search" />

                <p> <img src="" alt=""/>   </p>
            </div>

            <div id="footer">
                <p> Footer </p>
            </div>

        </div>


    </body>

</html>