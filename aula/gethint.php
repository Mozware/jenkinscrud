<?php
$names = [
    "Anna",
    "Brittany",
    "Cinderella",
    "Diana",
    "Eva",
    "Fiona",
    "Gunda",
    "Hege",
    "Inga",
    "Johanna",
    "Kitty",
    "Linda",
    "Nina",
    "Ophelia",
    "Petunia",
    "Amanda",
    "Raquel",
    "Cindy",
    "Doris",
    "Eve",
    "Evita",
    "Sunniva",
    "Tove",
    "Unni",
    "Violet",
    "Liza",
    "Elizabeth",
    "Ellen",
    "Wenche",
    "Vicky"
];
$q = $_REQUEST["q"];
$hint = "";
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($names as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
    echo $hint === "" ? "no suggestion" : $hint;
}
