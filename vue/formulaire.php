<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Formulaire</title>
</head>
<body>
  <header>
    <div class="devise-french">
        REPUBLIQUE DU CAMEROUN
        <p>----------------</p>
        <p>Paix-Travail-Patrie</p>
    </div>
    <div class="devise-english">
        REPUBLIC OF CAMEROON
        <p>----------------</p>
        <p>Peace-Work-Fatherland</p>
    </div>
    <img src="http://localhost/acte_naissance/armoirie.png" alt="armoire du cameroun" srcset="">
    <h1>ACTE DE MARIAGE/<span class="english">MARRIAGE CERTIFICATE</span></h1>
    <p>N° <input type="text" id="numero" name="numero"></p>
  </header>
  <section>
    <br>
    <p>Mariage de - <span class="english">Mariage of</span> Pessidjo Germann</p>
    <p>Et de - <span class="english">And of</span> Celia</p>
    <p>Devant nous ont comparu publiquement - <span class="english">Before us appeared publicy</span> </p>
    <div class="epoux">    
      <p>M. - <span class="english">Mr</span> <input type="text" id="nom_epoux" name="nom_epoux"></p>
      <p>Né le - <span class="english">Born on </span><input type="text" id="naissance_epoux" name="naissance_epoux"> <span>A</span><span class="english">At</span><input type="text" id="lieu_naissance_epoux" name="lieu_naissance_epoux"></p>
      <p>Profession - <span class="english"></span> <input type="text" id="profession_epoux" name="profession_epoux"></p>
      <p>Nationalité - <span class="english">Nationality</span> <input type="text" id="nationalite_epoux" name="nationalite_epoux"></p>
      <p>Domicillié à - <span class="english">Résidence at</span> <input type="text" id="adresse_epoux" name="adresse_epoux"></p>
      <p>Fils de - <span class="english">Son of</span> <input type="text" id="pere_epoux" name="pere_epoux"></p>
      <p>Et de - <span class="english">And of</span> <input type="text" id="mere_epoux" name="mere_epoux"></p>
    </div>
    <div class="epouse">    
      <p>et Mlle - <span class="english">and Miss</span> <input type="text" id="nom_epouse" name="nom_epouse"></p>
      <p>Née le - <span class="english">Born on </span><input type="text" id="naissance_epouse" name="naissance_epouse"> <span>A</span><span class="english">At</span><input type="text" id="lieu_naissance_epouse" name="lieu_naissance_epouse"></p>
      <p>Profession - <span class="english"></span> <input type="text" id="profession_epouse" name="profession_epouse"></p>
      <p>Nationalité - <span class="english">Nationality</span> <input type="text" id="nationalite_epouse" name="nationalite_epouse"></p>
      <p>Domicilliée à - <span class="english">Résidence at</span> <input type="text" id="adresse_epouse" name="adresse_epouse"></p>
      <p>Fille de - <span class="english">Daughter of</span> <input type="text" id="pere_epouse" name="pere_epouse"></p>
      <p>Et de - <span class="english">And of</span> <input type="text" id="mere_epouse" name="mere_epouse"></p>
    </div>
    <div>
      <p>Les futurs époux déclarent que le contrat a été établi comme suit : <span class="english">The bride and the bridegroom state that the marriage settlement has been established as follows:</span></p>
      <p>Régime matrimonial — <span class="english">Type of antenuptial settlement</span><input type="text" id="regime_matrimonial" name="regime_matrimonial"></p>
    </div>
    <p>M.- Mr <input type="text" id="chef_famille_epoux" name="chef_famille_epoux"> Chef de famille de l'époux ou son représentant ;</p>  
    <p>Il n'a été constaté aucune opposition — <span class="english">No objection to marriage have been recorded</span></p>
    <p>Et de M.- and of Mr <input type="text" id="chef_famille_epouse" name="chef_famille_epouse"> Chef de famille de l'épouse ou son représentant </p>
    <p>Qui consentent au mariage - <span class="english">who agree to the marriage</span></p>
    <p>Et de — <span class="english">and of</span> <input type="text" id="temoin_epoux" name="temoin_epoux"> Témoin de l'époux — <span class="english">Witness of the husband</span></p>
    <p>Et de - <span class="english">and of</span> <input type="text" id="temoin_epouse" name="temoin_epouse"> Témoin de l'épouse - <span class="english">Witness of the wife</span></p>
    <p>Le présent acte a été dressé par nous, <input type="text" id="dressage" name="dressage"> <span class="english">The present certificate has been drawn by us</span></p>
    <p>Officier de l'Etat-civil du centre de <input type="text" id="centre" name="centre"> <span class="english">Civil status Registrar for the center of</span></p>
    <p>Assisté de -— <span class="english">In the presence of</span> <input type="text" id="assistant" name="assistant"></p>
    <p>Secrétaire d'Etat-civil - <span class="english">Civil status Registrar</span></p>
    <div class="partie3">
        <button type="button">Générer</button>
    </div>
  </section>
</body>
</html>
