<?php
$decks = $split = $king_spades = $queen_hearts = $jack_clubs = $ace_diamonds = $joker_anysuit = '';

function hand($decks, $hand_array, $playing_card, $split) {
  return [
    'split' => $playing_card,
    'message'=> 'split was '.$split,
    'score' => 'score for '.$playing_card
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
