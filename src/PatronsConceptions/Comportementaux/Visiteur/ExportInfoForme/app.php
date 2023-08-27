<?php

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Carre;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Point;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Forme\Cercle;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Exportateur\ExportateurFormeXML;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Visiteur\ExportInfoForme\Exportateur\ExportateurFormeJSON;

require __DIR__.'/../vendor/autoload.php';

$point1 = new Point(5, 6, "point 1");
$point2 = new Point(12, 4, "point 2");
$point3 = new Point(8, 8, "point 3");
$point4 = new Point(15, 16, "point 4");

$carre1 = new Carre($point1, $point2, $point3, $point4, "carré 1");

$cercle1 = new Cercle($point2, $point3, "cercle 1");

$xmlFormeExport = new ExportateurFormeXML();
$xmlFormeExport->inspecterPoint($point1);
$xmlFormeExport->inspecterCercle($cercle1);
$xmlFormeExport->inspecterCarre($carre1);

$jsonFormeExport = new ExportateurFormeJSON();
$jsonFormeExport->inspecterPoint($point1);
$jsonFormeExport->inspecterCercle($cercle1);
$jsonFormeExport->inspecterCarre($carre1);

echo "Export en format XML :". PHP_EOL . $xmlFormeExport->getExport() . PHP_EOL;
echo "Export en format JSON :". PHP_EOL . $jsonFormeExport->getExport() . PHP_EOL;
