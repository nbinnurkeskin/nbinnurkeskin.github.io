
let button = document.getElementById("catchMe");
let levelSpan = document.getElementById("level");
let scoreSpan = document.getElementById("score");


let level = 1;
let score = 0;
let timeout = 1000; 
let moveInterval;


function getRandomPosition() {
  let top = Math.random() * 400;   
  let left = Math.random() * 400;
  return { top, left };
}


function moveButton() {
  let { top, left } = getRandomPosition();
  button.style.marginTop = top + "px";
  button.style.marginLeft = left + "px";


  moveInterval = setTimeout(moveButton, timeout);
}

button.addEventListener("click", () => {
  score++;
  scoreSpan.textContent = score;

  if (score >= 3) {
    level++;
    score = 0;

    timeout = Math.max(0, 1000 - (level - 1) * 100);
    levelSpan.textContent = level;
    scoreSpan.textContent = score;

    alert(`Level ${level - 1} tamamlandı! Şimdi Level ${level}`);
  }
});

button.style.position = "absolute";
button.style.width = "120px";
button.style.height = "60px";
button.style.fontSize = "18px";


moveButton();