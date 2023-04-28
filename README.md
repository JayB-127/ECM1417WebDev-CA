# ECM141 Web Development - University of Exeter

Full-stack development project to build a website where users can play a memory game.

## Features

### Navbar - navbar.php

* Uses Bootstrap for mobile and responsive layout

### Landing Page - index.php

### Registration - registration.php

* Complex implementation:
    * Features are selected and combined to create an emoji avatar
* Input validation on username
* Details are stored in cookies

### Memory Game - pairs.php

* Complex implementation:
    * Multiple (3) rounds with increasing number of cards
    * First and second round consists of selecting pairs of randomly created avatars
    * Third round consists of selecting groups of 3 randomly created avatars
    * Points are calculated for each round and total
    * Background of game turns gold if current highscore is surpassed
* Total score and those for each round are shown after game has ended
* Unregistered users prompted to register instead of submitting score
* Timer that displays time left during game
* Attempt counter that displays number of moves left during game
* Music track is played when the game starts
* Sound effect is played when a card is flipped

### Leaderboard - leaderboard.php
