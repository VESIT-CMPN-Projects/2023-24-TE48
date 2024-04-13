const questionCard = document.getElementById("question_card");
const optionCard1 = document.getElementById("option_card_0");
const optionCard2 = document.getElementById("option_card_1");
const optionCard3 = document.getElementById("option_card_2");
const optionCard4 = document.getElementById("option_card_3");

const question_audio = document.getElementById("question_audio")
const rightAnsAudio = document.getElementById("right_answer_audio");
const wrongAnsAudio = document.getElementById("wrong_answer_audio");

const nextQuesBtn = document.getElementById("next-quest-btn")

questionCard.addEventListener("click", () => {
    question_audio.play();
})

optionCard1.addEventListener("click", () => {
    if(optionCard1.dataset.correct == 1) {
        playCorrectSound();
        setTimeout(() => {
            nextQuesBtn.click();
        }, 1200);
    }else {
        playWrongSound();
    }
});

optionCard2.addEventListener("click", () => {
    if(optionCard2.dataset.correct == 1) {
        playCorrectSound();
        setTimeout(() => {
            nextQuesBtn.click();
        }, 1200);
    }else {
        playWrongSound();
    }
});

optionCard3.addEventListener("click", () => {
    if(optionCard3.dataset.correct == 1) {
        playCorrectSound();
        setTimeout(() => {
            nextQuesBtn.click();
        }, 1200);
    }else {
        playWrongSound();
    }
});

optionCard4.addEventListener("click", () => {
    if(optionCard4.dataset.correct == 1) {
        playCorrectSound();
        setTimeout(() => {
            nextQuesBtn.click();
        }, 1200);
    }else {
        playWrongSound();
    }
});

function playCorrectSound() {
    rightAnsAudio.play();
}

function playWrongSound() {
    wrongAnsAudio.play();
}
