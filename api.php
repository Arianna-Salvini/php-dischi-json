<?php
// Includo file dischi.json
$dischi_json = file_get_contents('dischi.json');
$dischi = json_decode($dischi_json, true);

// Ricodifico e stampo i dati dei dischi
header('Content-Type: application/json');
echo json_encode($dischi);
