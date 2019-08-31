/*
GAME RULES:

- The game has 2 players, playing in rounds
- In each turn, a player rolls a dice as many times as he whishes. Each result get added to his ROUND score
- BUT, if the player rolls a 1, all his ROUND score gets lost. After that, it's the next player's turn
- The player can choose to 'Hold', which means that his ROUND score gets added to his GLBAL score. After that, it's the next player's turn
- The first player to reach 100 points on GLOBAL score wins the game

*/
var scores, roundScore, activPlayer, dice, gamePlaying;
startNewGame();
// console.log(dice);

// document.querySelector('#current-'+activPlayer).textContent = dice;
// document.querySelector('#current-'+activPlayer).innerHtml = '<p>'+dice+'</p>';

//
// var x = document.querySelector('#score-0').textContent;
// console.log(x);

document.querySelector('.btn-roll').addEventListener('click', function(){

  if (gamePlaying) {
    // 1. Random number
    var dice = Math.floor(Math.random()*6)+1;

    // 2. Display result
  var diceDOM = document.querySelector('.dice');
  diceDOM.style.display = 'block';
  diceDOM.src = 'dice-'+dice+'.png';

    // 3. Update scores
  if (dice !==1) {
    roundScore += dice;
    document.querySelector('#current-'+activPlayer).textContent = roundScore;
  } else {
  nextPlayer();
  }
  }

});

document.querySelector('.btn-hold').addEventListener('click', function(){

if (gamePlaying) {
  // add current score to global scores
  scores[activPlayer] += roundScore;

  // update UI
document.querySelector('#score-'+activPlayer).textContent = scores[activPlayer];


  // Cechk if player won the Game
if (scores[activPlayer] >= 25) {
  document.querySelector('#name-'+activPlayer).textContent = 'WYGRANA!';
  document.querySelector('.dice').style.display = 'none';
  gamePlaying = false;
} else {nextPlayer();
}
}

});

function nextPlayer(){

    // Next player
  activPlayer === 0 ? activPlayer = 1 : activPlayer = 0;
  console.log('ActivePlayer = '+activPlayer);
  roundScore = 0;

  document.getElementById('current-0').textContent = '0';
  document.getElementById('current-1').textContent = '0';

  console.log(document.querySelector('.player-0-panel'));

  document.querySelector('.player-0-panel').classList.toggle('active');
  document.querySelector('.player-1-panel').classList.toggle('active');
document.querySelector('.dice').style.display = 'none';
  // document.querySelector('.player-1-panel').clssList.add('active');

}

function startNewGame() {
 gamePlaying = true;
  scores = [0,0];
  roundScore = 0;
  activPlayer = 0;

  document.querySelector('.dice').style.display = 'none';
  document.getElementById('score-0').textContent = '0';
  document.getElementById('score-1').textContent = '0';
  document.getElementById('current-0').textContent = '0';
  document.getElementById('current-1').textContent = '0';
  document.getElementById('name-0').textContent = 'Gracz 1';
  document.getElementById('name-1').textContent = 'Gracz 2';

  console.log('New game start');
};

document.querySelector('.btn-new').addEventListener('click', startNewGame);
