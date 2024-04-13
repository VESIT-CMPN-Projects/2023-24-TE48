function addOptions(select, options, selectedOption) {
    for(i = select.options.length; i > 0; i--) {
        select.remove(i);
    }
    let newOption = document.createElement('option');
    select.append(newOption);
    options.forEach(option => {
        let newOption = undefined;
        if(option.id == selectedOption)
            newOption = new Option(option.name, option.id, true, true);
        else
            newOption = new Option(option.name, option.id, false, false);
        select.append(newOption);
    });
}

function addCourses(select, elements, selectedCourse) {
    if(elements.length > 0) {
        addOptions(select, elements, selectedCourse);
    } else {
        select.removeAttribute('required');
        select.setAttribute('disabled', true);
    }
}

async function fetchMediums(boardId, selectedMedium) {
    await http.get(`/ajax/boards/${boardId}/mediums`)
    .then(res => {
        addOptions(document.querySelector('.medium'), res.mediums, selectedMedium);
    })
    .catch(err => console.error(err));
    $('#standard').empty();
    $('#course').empty();
    document.querySelector('#course').setAttribute('required', true);
    document.querySelector('#course').removeAttribute('disabled');
}

async function fetchStandards(boardId, mediumId, selectedStandard) {
    await http.get(`/ajax/boards/${boardId}/mediums/${mediumId}/standards`)
    .then(res => {
        addOptions(document.querySelector('.standard'), res.standards, selectedStandard);
    })
    .catch(err => console.error(err));
    $('#course').empty();
    document.querySelector('#course').setAttribute('required', true);
    document.querySelector('#course').removeAttribute('disabled');
}

async function fetchCourses(boardId, mediumId, standardId, selectedCourse) {
    await http.get(`/ajax/boards/${boardId}/mediums/${mediumId}/standards/${standardId}/courses`)
    .then(res => {
        addCourses(document.querySelector('.course'), res.courses, selectedCourse);
    })
    .catch(err => console.error(err));
}

$('.board').on('select2:select', async function(evt) {
    const id = evt.params.data.id;
    fetchMediums(id);
});

$('.medium').on('select2:select', async function(evt) {
    const boardId = $('.board').find(':selected').val();
    const mediumId = evt.params.data.id;
    fetchStandards(boardId, mediumId);
});

$('.standard').on('select2:select', async function(evt) {
    const boardId = $('.board').find(':selected').val();
    const mediumId = $('.medium').find(':selected').val();
    const standardId = evt.params.data.id;
    fetchCourses(boardId, mediumId, standardId);
});

function loadSelectedStandardData(boardId, mediumId, standardId, courseId) {
    console.log(boardId, mediumId, standardId, courseId);
    if(boardId) {
        fetchMediums(boardId, mediumId);
        if(mediumId) {
            fetchStandards(boardId, mediumId, standardId);
            if(standardId)
                fetchCourses(boardId, mediumId, standardId, courseId);
        }
    }
}