<?php

$superheroes = [
  [
      "id" => 1,
      "name" => "Steve Rogers",
      "alias" => "Captain America",
      "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers.",
  ],
  [
      "id" => 2,
      "name" => "Tony Stark",
      "alias" => "Ironman",
      "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man.",
  ],
  [
      "id" => 3,
      "name" => "Peter Parker",
      "alias" => "Spiderman",
      "biography" => "Bitten by a radioactive spider, Peter Parker’s arachnid abilities give him amazing powers he uses to help others, while his personal life continues to offer plenty of obstacles.",
  ],
  [
      "id" => 4,
      "name" => "Carol Danvers",
      "alias" => "Captain Marvel",
      "biography" => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.",
  ],
  [
      "id" => 5,
      "name" => "Natasha Romanov",
      "alias" => "Black Widow",
      "biography" => "Despite super spy Natasha Romanoff’s checkered past, she’s become one of S.H.I.E.L.D.’s most deadly assassins and a frequent member of the Avengers.",
  ],
  [
      "id" => 6,
      "name" => "Bruce Banner",
      "alias" => "Hulk",
      "biography" => "Dr. Bruce Banner lives a life caught between the soft-spoken scientist he’s always been and the uncontrollable green monster powered by his rage.",
  ],
  [
      "id" => 7,
      "name" => "Clint Barton",
      "alias" => "Hawkeye",
      "biography" => "A master marksman and longtime friend of Black Widow, Clint Barton serves as the Avengers’ amazing archer.",
  ],
  [
      "id" => 8,
      "name" => "T'challa",
      "alias" => "Black Panther",
      "biography" => "T’Challa is the king of the secretive and highly advanced African nation of Wakanda - as well as the powerful warrior known as the Black Panther.",
  ],
  [
      "id" => 9,
      "name" => "Thor Odinson",
      "alias" => "Thor",
      "biography" => "The son of Odin uses his mighty abilities as the God of Thunder to protect his home Asgard and planet Earth alike.",
  ],
  [
      "id" => 10,
      "name" => "Wanda Maximoff",
      "alias" => "Scarlett Witch",
      "biography" => "Notably powerful, Wanda Maximoff has fought both against and with the Avengers, attempting to hone her abilities and do what she believes is right to help the world.",
  ], 
];

?>

<?php $q = $_REQUEST["character-search"]; 
if ($q == ""){
    foreach ($superheroes as $superhero){
        echo "<ul><li>";
        echo $superhero['alias']; 
        echo "</li></ul>";
    }
} 
?>


<?php
// get the character search parameter from URL
$q = $_REQUEST["character-search"];

$resultChecker = "";

// lookup all heroes from array if $q is different from ""
if ($q !== "") {
  //$q = strtolower($q);
  $len=strlen($q);
  foreach($superheroes as $hero) {
    if ($q == $hero['name'] || $q == $hero['alias']){
        echo "<h3>";
        echo $hero['alias'];
        echo "</h3>";
        echo "<h4>";
        echo $hero['name'];
        echo "</h4>";
        echo "<p>";
        echo $hero['biography'];
        echo "</p>";
    }
    elseif (stristr($q, substr($hero['alias'], 0, $len))) {
      if ($resultChecker === "") {
        $resultChecker = $hero['alias'];
      } else {
        $resultChecker .= "<li>".$hero['alias']."</li>";
      }
    }
    elseif (stristr($q, substr($hero['name'], 0, $len))){
        if ($resultChecker === "") {
        $resultChecker = $hero['alias'];
      } else {
        $resultChecker .= "<li>".$hero['alias']."</li>";
      }
    }
  }
}

// Output "Superhero not found" if no hero was found or output correct values

if ($resultChecker ==="" && $q !==""){
    echo "Hero not found!";
}

if ($resultChecker !== ""){
    echo $resultChecker;
}


?>
