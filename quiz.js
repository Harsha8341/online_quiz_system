
document.addEventListener("DOMContentLoaded", function () {
  const container = document.getElementById("quiz-container");
  fetch("get_questions.php")
    .then((res) => res.json())
    .then((questions) => {
      let score = 0;
      let index = 0;
      function showQuestion() {
        if (index >= questions.length) {
          container.innerHTML = `
            <h2>Your score: ${score}</h2>
            <form method="POST" action="save_score.php">
              <input type="hidden" name="score" value="${score}">
              <input type="text" name="username" placeholder="Your Name" required>
              <input type="submit" value="Submit Score">
            </form>
          `;
          return;
        }
        const q = questions[index];
        container.innerHTML = `
          <h2>${q.question}</h2>
          ${["a", "b", "c", "d"].map(opt => `
            <button onclick="selectAnswer('${q.correct}', '${q[opt]}')">${q[opt]}</button>
          `).join("<br><br>")}
        `;
      }
      window.selectAnswer = function (correct, selected) {
        if (correct === selected) score++;
        index++;
        showQuestion();
      };
      showQuestion();
    });
});
