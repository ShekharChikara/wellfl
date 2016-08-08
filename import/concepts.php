<?php 
ini_set("allow_url_fopen", 1);

$json = file_get_contents('http://dev-standard.wellcertified.com/json/concepts');
$obj = json_decode($json);

$count = 2;
$conceptsImported = array();
foreach ($obj->results as $concept) {
	$title 			= $concept->title;
	$intent 		= $concept->intent;
	$description 	= $concept->description;

	$foldername = '../user/pages/0'.$count.".".strtolower($title);
	$conceptsImported[$title] = $foldername;
	mkdir($foldername, 0777, true);
	$conceptFile = fopen($foldername."/concept.md", "w") or die("Unable to open file!");
	$description = str_replace("\n", "\n\n", $description);

	$filetxt = "---\ntitle: ".$title."\nslug: ".strtolower($title)."\ntaxonomy:\n";
	$filetxt .= "    category:\n        - docs\n---\n";
	$filetxt .= "\n".$intent."\n===\n";
	$filetxt .= "##Background##\n";
	$filetxt .= $description;

	fwrite($conceptFile, $filetxt);

	fclose($conceptFile);
	$count++;
	echo "Imported concept -> ".$title." \n";
}

getFeaturesForConcepts($conceptsImported);

function getFeaturesForConcepts($concepts) {
	$json = file_get_contents('http://dev-standard.wellcertified.com/json/features-parts');
	$obj = json_decode($json);
	//var_dump($obj);

	$groupedFeatures = array();
	foreach($obj->results as $feature) {
		$featureTitle 	= $feature->feature;
		$concept 		= $feature->concept;
		unset($feature->feature);
		unset($feature->concept);
		if(array_key_exists($concept, $groupedFeatures)) {
			if(array_key_exists($featureTitle, $groupedFeatures[$concept])) {
				$groupedFeatures[$concept][$featureTitle][] = $feature;
			} else {
				$groupedFeatures[$concept][$featureTitle] = array($feature);
			}
		} else {
			$groupedFeatures[$concept][$featureTitle] = array($feature);
		}
	}
	//var_dump($groupedFeatures);

	foreach($groupedFeatures as $concept=>$features) {
		
		$currentFeature = "";
		$filetxt = "";
		$summary = "";
		$featureBody = "";		

		$keys = array_keys($features);

		for($i=0; $i<count($keys); $i++) {
			$featureTitle 	= $keys[$i];
			$featureNumber 	= filter_var($featureTitle, FILTER_SANITIZE_NUMBER_INT);
			$summary 		= initializeFeatureSummary();
			$summary 		.= '<tbody>';
			$title 			= trim(preg_replace('/[0-9]+/', '', $featureTitle));
			$title 			= str_replace(".", "", $title);
			echo "{$title}\n";

			$folderNumber 	= strPad($featureNumber, 4);
			$foldername 	= $concepts[$concept]."/{$folderNumber}.".str_replace(" ", "-", $title);
			mkdir($foldername, 0777, true);

			$parts 			= $features[$featureTitle];
			$imgDownload 	= false;
			foreach($parts as $part) {
				$featureDesc1 		= $part->text1;
				$featureDesc2		= $part->text2;
				$summary 			.= "<tr><td>".$part->part."</td>";
				$summary 			.= addRowValue($part->core, true);
				$summary 			.= addRowValue($part->interiors, false);
				$summary 			.= addRowValue($part->buildings, false);
				$summary 			.= addRowValue($part->kitchen, false);
				$summary 			.= addRowValue($part->education, false);
				$summary 			.= addRowValue($part->residential, false);
				$summary 			.= addRowValue($part->restaurant, false);
				$summary 			.= addRowValue($part->retail, false)."</tr>";

				//$summary 			.= ("|".$part->part."|".$part->core."|".$part->interiors."|".$part->buildings."|".$part->kitchen."|".$part->education."|".$part->residential."|".$part->restaurant."|".$part->retail."|\n");
				$featureBody 		= $featureDesc1."\n".$featureDesc2;
				if(!$imgDownload) {
					//Download the feature image.
					$url = $part->image->src;
					$img = $foldername.'/feature-image.png';
					file_put_contents($img, file_get_contents($url));
					$imgDownload = true;
				}
			}

			$filetxt 	= createFeatureHeader($featureTitle, $featureNumber);
			$filetxt	.= $summary."</table>\n===\n\n".$featureBody;

			$featureFile = fopen($foldername."/feature.md", "w") or die("Unable to open file!");
			fwrite($featureFile, $filetxt);
			fclose($featureFile);

			echo "Imported feature -> ".$featureTitle."\n";
		}

	} 
}

/*
* Function to initliaze the feature summary table header.
*/
function initializeFeatureSummary() {
	$summary 	= "<table><thead><tr><th class='text-center'></th><th class='text-center'>Core & Shell</th><th class='text-center'>New & Existing Interiors</th><th class='text-center'>New & Existing Buildings</th><th class='text-center'>Commercial Kitchen</th><th class='text-center'>Education</th><th class='text-center'>Multifamily Residential</th><th class='text-center'>Restaurant</th><th class='text-center'>Retail</th></tr>";
	//$summary 	= "|&nbsp;|Core & Shell|New & Existing Interiors|New & Existing Buildings|Commercial Kitchen|Education|Multifamily Residential|Restaurant|Retail|\n";
	//$summary 	.= "|---|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|\n";
	return $summary;
}

/*
* Function to create the feature header slug on the basis of the feature title and the feature number.
* Also, adds the alias for the feature so that it can be accessed via the URL like features/#featureID
*/

function createFeatureHeader($featureTitle, $featureNumber) {
	$title 		= trim(preg_replace('/[0-9]+/', '', $featureTitle));
	$slug 		= str_replace(" ", "-", strtolower($title));
	$slug 		= str_replace(".", "", $slug);
	echo "{$title}\n";
	$filetxt 	= "---\ntitle: ".$title."\nslug: ".$slug."\ntaxonomy:\n";
	$filetxt 	.= "    category:\n        - docs\n";
	$filetxt	.= "routes:\n    aliases:\n        ";
	$filetxt	.= "- /features/".$featureNumber."\n\n---\n";
	return $filetxt;
}

function addRowValue($value, $flag) {
	$str = '';
	if($flag) {
		if($value=='P') $str = "<td class='text-center comp-pre'>".$value."</td>";
		else if($value=='O') $str = "<td class='text-center comp-opt'>".$value."</td>";
		else $str = "<td class='text-center comp-none'>".$value."</td>";
	} else {
		if($value=='P') $str = "<td class='text-center cert-pre'>".$value."</td>";
		else if($value=='O') $str = "<td class='text-center cert-opt'>".$value."</td>";
		else $str = "<td class='text-center cert-none'>".$value."</td>";
	}
	return $str;
}

function strPad($number, $pad) {
	return str_pad($number, $pad, "0", STR_PAD_LEFT);
}

?>