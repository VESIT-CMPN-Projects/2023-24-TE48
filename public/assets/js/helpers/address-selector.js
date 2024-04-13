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

async function fetchStates(country, selectedState) {
    await http.get(`/ajax/countries/${country}/states`)
    .then(res => {
        addOptions(document.querySelector('.state'), res.states, selectedState);
    })
    .catch(err => console.error(err));
}

async function fetchCities(state, selectedCity) {
    await http.get(`/ajax/states/${state}/cities`)
    .then(res => {
        addOptions(document.querySelector('.city'), res.cities, selectedCity);
    })
    .catch(err => console.error(err));
}

$('.country').on('select2:select', async function(evt) {
    const id = evt.params.data.id;
    await fetchStates(id);
});

$('.state').on('select2:select', async function(evt) {
    const id = evt.params.data.id;
    await fetchCities(id);
});

function loadSelectedAddressData(countryId, stateId, cityId) {
    if(countryId) {
        fetchStates(countryId, stateId);
    }
    if(stateId) {
        fetchCities(stateId, cityId);
    }
}