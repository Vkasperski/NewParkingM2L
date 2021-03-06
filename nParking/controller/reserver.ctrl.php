<?php
include("data/reserver.data.php");

function getHistoriqueMembre($id){
	$h = historiqueData($id);
	$i = 0;
	$historique = array();
	while($data = $h->fetch()){
		$historique [$i] = array(
			"date_debut_periode" => $data["date_debut_periode"],
			"date_fin_periode" => $data["date_fin_periode"],
			"num_place" => $data["num_place"]
			);
		$i++;
	}
	return $historique;
}

function getReserver($id){
	$place = placeActuelMembre($id);
	$p = $place->fetch();
	$arPlace = array(
		"date_debut_periode" => $p["date_debut_periode"],
		"date_fin_periode" => $p["date_fin_periode"],
		"num_place" => $p["num_place"],
        "id_place" => $p["id_place"]
	);
	return $arPlace;
}

function reserver($idm){
    $c = getcountPd();
    if ($c>0){
        $places = getPlaceDispo();
        $place = $places[0];
        reserverPlace($idm,$place["id_place"]);

    }
}

function setRang($idm){
    $r = getMaxRang();
    $r++;
    reserverRang($idm,$r);
    $resa = getProcheResa();
    reserverPlacePrecise($idm,$resa["id_place"],$resa["date_fin_periode"]);
}

function selectRang(){
    $r = selectRangData();
    $membres = array();
    $i = 0;
    while($data = $r->fetch()){
        $membres[$i] = array(
            "id_membre" => $data["id_membre"]
        );
        $i++;
    }
    return $membres;
}

function trier(){
    $m = selectRang();
    foreach ($m as $membre){
        setNonRang($membre["id_membre"]);
    }
}

function getProcheResa(){
    $resa = getProcheResaData();
    $res = array();
    $i=0;
    while($r = $resa->fetch()){
        $res[$i] = array(
            "id_place" => $r["id_place"],
            "date_fin_periode" => $r["date_fin_periode"]
            );
    }
    return $res[0];

}

function getcountPd(){
 return countPd();
}


function getplaceDispo(){
    $s = selectPlaceDispo();
    $array = array();
    $i=0;
    while ($d=$s->fetch()){
        $array[$i] = array(
            "id_place" => $d["id_place"],
            "num_place" => $d["num_place"]
        );
        $i++;
    }
    return $array;
}
?>