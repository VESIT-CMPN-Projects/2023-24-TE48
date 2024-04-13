const learnImg1 = document.getElementById("learning_image_1");
const learnImg2 = document.getElementById("learning_image_2");
const learnImg3 = document.getElementById("learning_image_3");

const learnAudio1 = document.getElementById("learning_audio_1");
const learnAudio2 = document.getElementById("learning_audio_2");
const learnAudio3 = document.getElementById("learning_audio_3");

learnImg1.addEventListener("click", playAudio1);
learnImg2.addEventListener("click", playAudio2);
learnImg3.addEventListener("click", playAudio3);

function playAudio1() {
    learnAudio1.play();
}

function playAudio2() {
    learnAudio2.play();
}

function playAudio3() {
    learnAudio3.play();
}
