const QUESTION_BLOCK = document.getElementById('question-block');
const CLOSE_Q = document.getElementById('close-block');
const OPEN_Q1 = document.getElementById('question2')
const OPEN_Q = document.getElementById('open-block');

function showQuestion() {
  QUESTION_BLOCK.classList.toggle('active-demo')
  document.getElementById('pop-up-modal2').classList.toggle('pop-up')
}

if(OPEN_Q){ OPEN_Q.addEventListener('click', showQuestion) }
if(OPEN_Q1){ OPEN_Q1.addEventListener('click', showQuestion) }
if(CLOSE_Q){ CLOSE_Q.addEventListener('click', showQuestion) }