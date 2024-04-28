@extends('pages.app')

@section('content')

<div class="my-5 mx-3 row">
    <div class="col-12" id="h">
    <ul><h1 style="color:#024A59">Sécurité et confidentialité</h1><br>
        <h3 style="color:#1BA491">Mesures de sécurité :</h3><br>
     <p style="color: black; font-size:large;"><i><b>Chiffrement des données :</b></i> Toutes les données médicales sont chiffrées lors de la transmission et au repos pour éviter tout accès non autorisé.</p>
     <p style="color: black; font-size:large;"><i><b>Authentification robuste :</b></i> Utilisation de mécanismes d'authentification forte pour garantir que seuls les utilisateurs autorisés peuvent accéder aux données sensibles.</p>
     <p style="color: black; font-size:large;"><i><b>Contrôle d'accès : </b></i>Mise en place de contrôles d'accès granulaires pour limiter l'accès aux données médicales en fonction des rôles et des autorisations.</p>
     <p style="color: black; font-size:large;"><i><b>Audit et suivi des accès : </b></i> Journalisation de toutes les activités de l'application pour permettre un suivi des accès et des modifications des données. </p>
       <br> <h3  style="color:#1BA491">Conformité réglementaire :</h3><br>
     <p style="color: black; font-size:large;"><i><b>Respect des normes de confidentialité des données médicales : </b></i>Conformité aux réglementations telles que le RGPD, la HIPAA (pour les utilisateurs aux États-Unis) ou toute autre législation locale pertinente.</p>
     <p style="color: black; font-size:large;"><i><b>Consentement utilisateur :</b></i> Obtention du consentement explicite des utilisateurs pour collecter, stocker et traiter leurs données médicales.</p>
    </ul>  
    </div>
</div>
<div class="my-5 mx-3 row">
 <div class="col-12" id="h">
 <ul><h1 style="color:#024A59">Intégration des objets connectés</h1><br>
     <h3  style="color:#1BA491">Liste des objets connectés pris en charge :</h3><br>
  <p style="color: black; font-size:large;"><i><b>Montres intelligentes :</b></i>  Intégration avec des montres intelligentes capables de surveiller les signes vitaux tels que le pouls, la fréquence cardiaque, etc.</p>
  <p style="color: black; font-size:large;"><i><b>Tensiomètres connectés :</b></i> Prise en charge des tensiomètres connectés pour surveiller la pression artérielle et enregistrer les données dans l'application.</p>
  <p style="color: black; font-size:large;"><i><b>Glucomètres connectés :  </b></i> Intégration avec des glucomètres connectés pour surveiller la glycémie des patients diabétiques et enregistrer les lectures automatiquement.</p>
    <br> <h3  style="color:#1BA491">Méthodes d'intégration et de communication :</h3><br>
  <p style="color: black; font-size:large;"><i><b>Protocoles de communication standard : </b></i>Utilisation de protocoles comme Bluetooth Low Energy (BLE) ou Wi-Fi pour établir une communication bidirectionnelle entre les objets connectés et l'application.</p>

 </ul>  
 </div>
</div>
     
@endsection