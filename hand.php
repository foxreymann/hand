<?php

function hand($decks, $hand_array, $playing_card, $split) {
  return [
    'split' => $playing_card,
    'message'=> 'split was '.$split
  ];
}

$decks = $split = $king_spades = $queen_hearts = $jack_clubs = $ace_diamonds = $joker_anysuit = '';

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
