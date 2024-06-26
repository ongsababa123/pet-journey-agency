async function setLanguage(lang, jsonFile) {
    try {
        const response = await fetch(jsonFile);
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        const data = await response.json();

        for (const key in data[lang]) {
            if (data[lang].hasOwnProperty(key)) {
                let element = document.getElementById(key);
                if (element) {
                    element.textContent = data[lang][key];
                }
            }
        }

        // Update language selectors
        document.querySelectorAll('.language-select').forEach(select => {
            select.value = lang;
        });

    } catch (error) {
        console.error('Error loading translations:', error);
    }
}

document.querySelectorAll('.language-select').forEach(select => {
    select.addEventListener('change', function() {
        var selectedLang = this.value;
        var jsonFile = this.dataset.json;
        setLanguage(selectedLang, jsonFile);
    });
});

setLanguage('en', 'data/language/header_locale.json');