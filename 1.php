<?php


header('Content-Type: application/json');

$data  = array(
  "name"        =>"moh.zakaria",
  "age"         =>"21",
  "address"     =>"Kec. Driyorejo, Kab. Gresik, Ds. Tanjungan",
  "hobbies"     =>"reading",
  "is_married"  => False,
  "list_scholl" => array(
                     array(
                       "name"=>"SDN Tanjungan",
                       "year_in"=>2005,
                       "year_out"=>2011,
                       "major"=>null
                     ),
                     array(
                       "name"=>"Mts Darul Ulum",
                       "year_in"=>2011,
                       "year_out"=>2014,
                       "major"=>null
                     ),
                     array(
                       "name"=>"SMKN 1 Driyorejo",
                       "year_in"=>2014,
                       "year_out"=>2017,
                       "major"=>"Electrical Engginer"
                     )
                   ),
  "skills"     => array(
                     array(
                       "skill_name" => "Web Programming",
                       "level" => "Advanced"
                     ),
                     array(
                       "skill_name" => "Graphic Design",
                       "level" => "Beginner"
                     ),
                     array(
                       "skill_name" => "Electrical Engginer",
                       "level" => "Advanced"
                     )
                   ),
  "interest_in_coding" => true
);

function json_response($array_object){
  return $json = json_encode($array_object);

}

echo json_response($data);


 ?>
