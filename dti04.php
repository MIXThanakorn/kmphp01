<?php
    //array
    //Index array
    $dataA = [10, 20, 30, 40, 50];
    $dataB = array("red", "green", "blue", "yellow");
    $dataC = [true, false, true, true];

    echo $dataA[0] . " ";
    echo $dataB[2] . " ";
    echo $dataC[1] . " ";

    //associative array
    $majors = [
        "AS" => "Arts Sci",
        "EN" => "Engineer",
        "BU" => "Business",
    ];
    $subjects = array(
        "AS" => "History",
        "EN" => "Computer",
        "BU" => "Marketing",
    );
    echo "<br/>" . $majors["EN"];
    echo "<br/>" . $majors["AS"];
    echo "<br/>" . $majors["BU"];
    echo "<br/>" . $subjects["EN"];
    echo "<br/>" . $subjects["AS"]; 
    echo "<br/>" . $subjects["BU"];


?>