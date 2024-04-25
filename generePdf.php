<?php
use Dompdf\Dompdf;
use Dompdf\Options;


ob_start();
require_once 'formulaire.php';
$html=ob_get_contents();
ob_end_clean();

require_once 'dompdf/autoload.inc.php';

$dompdf=new Dompdf();


$dompdf->loadHtml($html);
// Réinitialisation du chemin de base pour les ressources (images, CSS)
$dompdf->setBasePath(__DIR__);

$dompdf->setPaper('A4','portrait');

$dompdf->render();

$name='mariage.pdf';

file_put_contents($name,$dompdf->output());

// Affichage ou téléchargement du PDF
$dompdf->stream($name, array('Attachment' => 0)); // 'Attachment' à 1 pour télécharger le PDF