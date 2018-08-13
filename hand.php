<?php

function hand($decks, $hand_array, $playing_card, $split) {
  return [
    'split' => $playing_card,
    'message'=> 'split was '.$split,
    'score' => 'score for '.$playing_card
  ];
}

function createScoreVariableName($str){
  $str = strtolower(trim($str));
  $str = preg_replace('/[^a-z0-9]/', '_', $str);
  $str = $str.'_score';
  return $str;
}

$decks = $split = $king_spades = $queen_hearts = $jack_clubs = $ace_diamonds = $joker_anysuit = '';

$game = [
  'King Spades' => $king_spades,
  'Queen Hearts' => $queen_hearts,
  'Jack Clubs' => $jack_clubs,
  'Ace Diamonds' => $ace_diamonds,
  'Joker Any-suit' => $joker_anysuit
];

foreach($game as $playing_card => $hand_array) {
  $result = hand($decks, $hand_array, $playing_card, $split);
  print_r(array_unique($result));
  $split = $result['split'];
  $message = $result['message'];
  ${createScoreVariableName($playing_card)} = $result['score'];
  echo $message.PHP_EOL.PHP_EOL;
}

echo $king_spades_score.PHP_EOL;
echo $queen_hearts_score.PHP_EOL;
echo $jack_clubs_score.PHP_EOL;
echo $ace_diamonds_score.PHP_EOL;
echo $joker_any_suit_score.PHP_EOL;
