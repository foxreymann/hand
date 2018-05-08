<?php

function hand($decks, $hand_array, $playing_card, $split) {
  return [
    'split' => $playing_card,
    'message'=> 'split was '.$split
  ];
}

$playing_card = "King Spades";
$hand_array = $king_spades;
$result = hand($decks, $hand_array, $playing_card, $split);
print_r(array_unique($result));
$split = $result['split'];
$message = $result['message'];
echo $message;

$playing_card = "Queen Hearts";
$hand_array = $queen_hearts;
$result = hand($decks, $hand_array, $playing_card, $split);
print_r(array_unique($result));
$split = $result['split'];
$message = $result['message'];
echo $message;

$playing_card = "Jack Clubs";
$hand_array=$jack_clubs;
$result = hand($decks, $hand_array, $playing_card, $split);
print_r(array_unique($result));
$split = $result['split'];
$message = $result['message'];
echo $message;

$playing_card = "Ace Diamonds";
$hand_array=$ace_diamonds;
$result = hand($decks, $hand_array, $playing_card, $split);
print_r(array_unique($result));
$split = $result['split'];
$message = $result['message'];
echo $message;

$playing_card = "Joker Any-suit";
$hand_array=$joker_anysuit;
$result = hand($decks, $hand_array, $playing_card, $split);
print_r(array_unique($result));
$split = $result['split'];
$message = $result['message'];
echo $message;

$split = $king_spades = $queen_hearts = $jack_clubs = $ace_diamonds = $joker_anysuit = '';

$game = [
  'King Spaced' => $king_spades,
  'Queen Hearst' => $queen_hearts,
  'Jack Clubs' => $jack_clubs,
  'Ace Diamonds' => $ace_diamonds,
  'Joker Any-suit' => $joker_anysuit
];

foreach($game as $playing_card => $hand_array) {
  $result = hand($decks, $hand_array, $playing_card, $split);
  print_r(array_unique($result));
  $split = $result['split'];
  $message = $result['message'];
  echo $message;
}
