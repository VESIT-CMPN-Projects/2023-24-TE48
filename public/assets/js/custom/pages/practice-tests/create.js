var element = document.querySelector("#create-parctice-test-stepper");
var startTestBtn = document.querySelector("#start-test-btn");
const step2Content = document.getElementById("step2Content");
const difficultySelector = document.getElementById("difficulty-selector");
const subjectSelector = document.getElementById("subject-selector");
const createParcticeTestForm = document.getElementById("create-parctice-test-form");
const hiddenElementsContainer = document.getElementById("hidden-elements-container");

// Initialize Stepper
var stepper = new KTStepper(element);

let selectorIsUpdated = true;
let subject;
let difficulty;
let csrf_token;

createParcticeTestForm.addEventListener("submit", handleFormSubmit);
subjectSelector.addEventListener("change", handleSelectorChange);
difficultySelector.addEventListener("change", handleSelectorChange);
step2Content.addEventListener("click", handleStep2ContentClick);

function handleStep2ContentClick(evt) {
    if(evt.target.classList.contains("chapter-selector")) {
        const clickedChapter = evt.target.parentNode.parentNode.parentNode;
        const questionCountInput = clickedChapter.querySelector("input.chapter-question-count");

        if(evt.target.checked) {
            questionCountInput.classList.remove("d-none");
        } else {
            questionCountInput.classList.add("d-none");
        }
    }
}

function init(token) {
    csrf_token = token;
    handleSelectorChange();
}

function handleSelectorChange(evt) {
    selectorIsUpdated = true;
    subject = subjectSelector.value;
    difficulty = difficultySelector.value;
}

async function fetchChapters(subject_id, difficulty) {
    const data = {
        subject_id,
        difficulty,
        _token: csrf_token,
    };

    let chapters = [];
    await http.post(`/ajax/practice-tests/create/fetch-chapters`, data)
        .then(res => chapters = res.chapters)
        .catch(err => {
            console.error(err)
        })

    return chapters;
}

async function addChapterCards() {
    let chapters = await fetchChapters(subject, difficulty);

    while(step2Content.firstChild) {
        step2Content.removeChild(step2Content.firstChild);
    }

    chapters.forEach(function(chapter) {
        const chapterCard = createChapterCard(chapter);
        step2Content.innerHTML += chapterCard;
    })
}

function createChapterCard(chapter) {
    let card = `<label class="chapter-card btn btn-outline btn-outline-solid btn-active-light-primary d-flex justify-content-between p-6 mb-5">
        <div class="d-flex align-items-center">
            <div class="form-check form-check-custom form-check-solid me-10">
                <input class="chapter-selector form-check-input h-25px w-25px" type="checkbox" value="${chapter.id}"/>
            </div>
            <div class="">
                <h2 class="d-flex align-items-center fs-3 fw-bold">
                    ${chapter.name}
                </h2>
                <div class="text-start fw-semibold opacity-75">
                    ${truncateText(chapter.description, 40)}
                </div>
            </div>
        </div>
        <div class="input-group input-group-sm d-flex align-items-center justify-content-end mw-200px">
            <input type="number" class=" d-none chapter-question-count form-control form-control-solid mw-150px h-35px" placeholder="No. of Questions" min="0" value="0" max="${chapter.practice_questions_count}"/>
        </div>
    </label>`

    return card;
}

function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + '...';
    }
    return text;
}

// Handle next step
stepper.on("kt.stepper.next", function (stepper) {
    if(selectorIsUpdated) {
        addChapterCards();
        selectorIsUpdated = false;
    }

    if($("#create-parctice-test-form").valid()) {
        stepper.goNext(); // go next step
    }
});

// Handle previous step
stepper.on("kt.stepper.previous", function (stepper) {
    stepper.goPrevious(); // go previous step
});

function handleFormSubmit(evt) {
    evt.preventDefault();
    // Activate indicator
    startTestBtn.setAttribute("data-kt-indicator", "on");

    while(hiddenElementsContainer.firstChild) {
        hiddenElementsContainer.removeChild(hiddenElementsContainer.firstChild);
    }

    const chapterCards = document.querySelectorAll(".chapter-card ");

    chapterCards.forEach( card => {
        const chapterSelector = card.querySelector(".chapter-selector");
        if(chapterSelector.checked) {
            const questionCountInput = card.querySelector(".chapter-question-count");
            if(questionCountInput.value != 0) {
                const chapter = `<input type="hidden" name="chapters[]" value="${chapterSelector.value}">`
                const count = `<input type="hidden" name="questionCounts[]" value="${questionCountInput.value}">`
                hiddenElementsContainer.innerHTML += chapter;
                hiddenElementsContainer.innerHTML += count;
            }
        }
    })

    if(!hiddenElementsContainer.firstChild) {
        Swal.fire({
            text: "Select a chapter and provide valid question count",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Buy Now",
            customClass: {
                confirmButton: "btn btn-info",
            }
        });

        startTestBtn.removeAttribute("data-kt-indicator");
    } else {
        if($("#create-parctice-test-form").valid()) {
            createParcticeTestForm.submit();
        }else {
            startTestBtn.removeAttribute("data-kt-indicator");
        }
    }
}

$(function() {
    $("#create-parctice-test-form").validate({
        rules: {
            title: {
                required: true,
                minlength:2,
                maxlength:255,
            },
            subject_id: {
                required: true,
            },
            difficulty: {
                required: true,
            }
        },
        errorElement: 'div',
        errorClass: "text-danger",
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if(placement) {
                $(placement).append(error);
            } else {
                error.insertAfter(element);
            }
        }
    });
});
