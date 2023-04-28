# ECM1417 Web Development - University of Exeter

Full-stack development project to build a website where users can play a memory game.

## Features

### Navbar - navbar.php

* Uses Bootstrap for mobile and responsive layout

### Landing Page - index.php

* Displays different text depending on if the user is registered

### Registration - registration.php

* Complex implementation:
    * Features are selected and combined to create an emoji avatar
    * Displays a live preview of the avatar during selection process
* Input validation on username
* Details are stored in cookies

### Memory Game - pairs.php

* Complex implementation:
    * Multiple (3) rounds with increasing number of cards
    * Cards have randomly created emojis
    * First and second round - pairs of cards are selected
    * Third round - groups of 3 cards are selected
    * Points are calculated for each round and total
    * Background of game turns gold if current highscore is surpassed
* Timer that displays time left during game
* Attempt counter that displays number of moves left during game
* Music track is played when the game starts
* Sound effect is played when a card is flipped
* Game is won if all 3 rounds passed, and lost if time or attempt limit is reached
* Total score and those for each round are shown after game has ended
* Unregistered users prompted to register instead of submitting score
* Different sound effects played when a player either wins or loses

### Leaderboard - leaderboard.php

* Contains only one score per player (removes duplicates)
* Displays player's name, scores per round and total score
* Sorts players by total score, displaying them in descending order (greatest to least)
