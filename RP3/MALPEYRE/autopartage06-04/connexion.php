<html>

<head>
    <title>Auto partage</title>
    <link rel="stylesheet" href="style9.css" type="text/css">
    <?php include 'footer.html'; ?>
</head>

<body>
    <div id="nav">
        <div id="cadre">
            <h1>Autopartage
                <logolycee>
                    <a href="https://lycee-heinrich-nessel.fr/enseignement-superieurs/l-enseignement-superieur/73-bts/215-bts-sn-informations" title="Site du lyc&eacute;e-heinrich-nessel">
                        <img src="image/logolycee.png" alt="logo" style="float:left;width:120px;height:120px;">
                    </a>
                </logolycee>
                <logoconnexion>
                    <a href="connexion.php" title="Connexion">
                        <img src="image/login-button.jpg" alt="connexion" style="float:right;width:120px;height:120px;">
                    </a>
                </logoconnexion>
                <ul id="menu-demo2">
                    <li><a href="index.html">Accueil</a>
                    </li>
                    <li><a href="#">Autopartage</a>
                        <ul>
                            <li><a href="location-client.php">loueur</a></li>
                            <li><a href="location-proprietaire.php">Propri&eacute;taire</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Question ?</a>
                        <ul>
                            <li><a href="presentation.php">A propos de nous</a></li>
                            <li><a href="Question.php">Foire aux questions</a></li>
                        </ul>
                    </li>
                </ul>
            </h1>
        </div>
        <br><br><br><br><br>
        <form action="Ecriturebdd.php" method="post">
            <TABLE BORDER=1 style="margin-left: 40%;margin-right: 40%;">
                <TR>
                    <TD>Nom</TD>
                    <TD>
                        <INPUT type=text name="Nom">
                    </TD>
                </TR>
                <TR>
                    <TD>Adresse Mail</TD>
                    <TD>
                        <INPUT type=text name="Adressemail">
                    </TD>
                </TR>
                <TR>
                    <TD>Moyen De Paiement</TD>
                    <TD>
                        <INPUT type=text name="MoyenDePaiement">
                    </TD>
                </TR>
                <TR>
                    <TD>Papier Des Vehicules</TD>
                    <TD>
                        <INPUT type=text name="PapierDesVehicules">
                    </TD>
                </TR>
                <TR>
                    <TD>Mot de passe</TD>
                    <TD>
                        <INPUT type=text name="MdpProprietaire">
                    </TD>
                </TR>
                <TR>
                    <TD COLSPAN=2>
                        <input type="submit" name="insert" value="Ins&eacute;rer">
                    </TD>
                </TR>
            </TABLE>
        </FORM>
</body>

</html>