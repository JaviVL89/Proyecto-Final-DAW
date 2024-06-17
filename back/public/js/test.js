document.addEventListener("DOMContentLoaded", function () {
    let currentQuestion = 0;
    const questions = document.querySelectorAll(".form-group");
    const progressIndicators = document.querySelectorAll(".progress-indicator");

    function showQuestion(index) {
        questions.forEach((question, i) => {
            question.classList.toggle("active", i === index);
        });
        updateProgress();
        toggleButtons();
    }

    function updateProgress() {
        questions.forEach((question, i) => {
            const inputs = question.querySelectorAll("input");
            const isAnswered = Array.from(inputs).some(
                (input) => input.checked
            );
            progressIndicators[i].classList.toggle("answered", isAnswered);
        });
    }

    function toggleButtons() {
        document.getElementById("prev").disabled = currentQuestion === 0;
        document.getElementById("next").style.display =
            currentQuestion === questions.length - 1 ? "none" : "inline-block";
        document.querySelector("button[type='submit']").style.display =
            currentQuestion === questions.length - 1 ? "inline-block" : "none";
    }

    document.getElementById("prev").addEventListener("click", function () {
        if (currentQuestion > 0) {
            currentQuestion--;
            showQuestion(currentQuestion);
        }
    });

    document.getElementById("next").addEventListener("click", function () {
        if (currentQuestion < questions.length - 1) {
            currentQuestion++;
            showQuestion(currentQuestion);
        }
    });

    showQuestion(currentQuestion);
});
