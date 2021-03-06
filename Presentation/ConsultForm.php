<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dierenartspraktijk</title>
        <link type="text/css" rel="stylesheet" href="../Css/style.css"/>
        <link href="../jq/jquery-ui.css" rel="stylesheet"/>
    </head>

    <body>
        <div id="page">

            <div id="header">
                <p> Dierenartspraktijk </p>
                <ul>
                    <li><a href="#">Home </a></li>
                    <li><a href="#">Praktijk </a></li>
                    <li><a href="#">Mijn dier </a></li>
                    <li><a href="#">Mijn gegevens </a></li>
                    <li><a href="#">Zoekertjes </a></li>
                    <li><a href="#">Webshop </a></li>
                    <li><a href="#">Contacteer Ons </a></li>
                </ul>
            </div>

            <div id="content-primary">
                <h1>Consultatieformulier. </h1>       
                <form>
                    <fieldset>

                        <legend>CONSULTATIE - BEHANDELING </legend>

                        <br/>
                        <p>Klantnr:<br />
                            <input type="text" size="10" name="klantnr" /><br/>
                            <p>Klantnaam:<br />
                                <input type="text" size="50" name="klantnaam" /><br/>      
                                <p>Klantvoornaam: <br/>   
                                    <input type="text" size="50" name="klantvoornaam" /><br/>      	  <p>Woonplaats: <br/>   
                                        <input type="text" size="50" name="woonplaats" /><br/>

                                        <p>Datum consultatie :<br />

                                            Datum: <input type="text" id="datepicker"/></p><br>

                                            <p>Naam Dier:<br />
                                                <input type="text" size="50" name="naamDier" /><br/>

                                                <p>
                                                    Consultatie uitgevoerd door :<br />
                                                    <input type="text" size="50" name="naamDierenarts" /><br /><br/>
                                                    Notitie:<br />
                                                    <textarea rows="7" cols="50" name="InfoHuidig"></textarea>
                                                    <br />

                                                    Gewicht:<br />
                                                    <input type="text" size="10" name="Gewicht(kg)" /><br /><br/>         
                                                    <br />
                                                    <input type="submit" value="Wijziging Opslaan" />
                                                    <br />
                                                    <br/>
                                                    <input type="submit" value="Nieuwe Consultatie" />
                                                </p> 

                                                <input type="submit" value="Nieuw Dier" />
                                            </p> 

                                            <input type="submit" value="Nieuwe Klant" />
                                    </p>  


                                    </fieldset>
                                    <fieldset>

                                        <legend>  </legend>
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
                                            Datum<br />
                                            Uur<br />
                                            Ingelogd door<br />
                                            Log Uit </p>
                                        <br/>
                                        <p> Log In </p><br />
                                        <p>Search</p>
                                        <input name="zoekterm" type="search" />

                                        <p> <img src="" alt=""/>   </p>
                                    </div>

                                    <div id="footer">
                                        <p> Dierenartsenpraktijk - Vlamingstraat - Wevelgem              <br/> Openingsuren: Van ma tot vrij 8h30 - 17h /  Zavom: 8h tot 12h</p>
                                    </div>

                                    </div>
                                    <script src="../jq/jquery.js"></script>
                                    <script src="../jq/jquery-ui.js"></script>
                                    <script>
                                        $(function () {
                                            $("#datepicker").datepicker({
                                                dateFormat: "dd/mm/yy"
                                            });
                                        });
                                    </script>

                                    </body>

                                    </html>