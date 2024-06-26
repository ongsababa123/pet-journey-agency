async function updateLanguage(lang) {
    try {
        const response = await fetch(BASE_URL + 'public/data/language/header_locale.json');
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        const data = await response.json();

        const elements = [
            'info_open1', 'info_open2', 'info_email1', 'info_email2', 
            'info_callus1', 'info_callus2', 'menu_home', 'menu_about_us', 
            'menu_service', 'menu_review', 'menu_contact'
        ];

        elements.forEach(id => {
            if (document.getElementById(id)) {
                document.getElementById(id).textContent = data[lang][id];
            }
        });

        const homepageResponse = await fetch(BASE_URL + 'public/data/language/homepage_locale.json');
        if (!homepageResponse.ok) {
            throw new Error('Network response was not ok ' + homepageResponse.statusText);
        }
        const homepageData = await homepageResponse.json();

        const homepageElements = {
            'title_about_us': 'title_about_us',
            'btn_view_more1': 'btn_view_more1',
            'btn_view_more2': 'btn_view_more2',
            'title_our_service_part1': 'title_our_service_part1',
            'title_our_service_part2': 'title_our_service_part2',
            'title_review': 'title_review',
            'title_partner': 'title_partner',
            'sub_title_animal_clinic': 'sub_title_animal_clinic',
            'sub_title_pet_friendly': 'sub_title_pet_friendly',
            'sub_title_pet_hotel': 'sub_title_pet_hotel',
            'title_quote_part1': 'title_quote_part1',
            'title_quote_part2': 'title_quote_part2',
            'title_quote_part3': 'title_quote_part3',
            'label_name': 'label_name',
            'ph_name': 'ph_name',
            'label_phone': 'label_phone',
            'phone_input': 'ph_phone',
            'label_email': 'label_email',
            'email_input': 'ph_email',
            'label_date': 'label_date',
            'travel_date_input': 'ph_date',
            'label_country': 'label_country',
            'origin_country_input': 'ph_origin_country',
            'label_destination_country': 'label_destination_country',
            'destination_country_input': 'ph_destination_country',
            'label_travel_type': 'label_travel_type',
            'travel_type_input': 'ph_travel_type',
            'label_pet_transport': 'label_pet_transport',
            'pet_transport_input': 'ph_pet_transport',
            'label_pet_type': 'label_pet_type',
            'pet_type_input': 'ph_pet_type',
            'label_breed': 'label_breed',
            'breed_input': 'ph_breed',
            'label_age': 'label_age',
            'age_input': 'ph_age',
            'label_weight': 'label_weight',
            'weight_input': 'ph_weight',
            'label_reason': 'label_reason',
            'reason_input': 'ph_reason',
            'btn_submit_quote': 'btn_submit_quote'
        };

        for (const [id, key] of Object.entries(homepageElements)) {
            if (document.getElementById(id)) {
                if (id.endsWith('_input')) {
                    document.getElementById(id).placeholder = homepageData[lang][key];
                } else {
                    document.getElementById(id).textContent = homepageData[lang][key];
                }
            }
        }
    } catch (error) {
        console.error('Failed to fetch content: ', error);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var defaultLang = 'en';
    updateLanguage(defaultLang);

    document.getElementById('language-select').addEventListener('change', function() {
        var selectedLang = this.value;
        updateLanguage(selectedLang);
        var flagImg = document.getElementById('flag-img');
        if (selectedLang === 'th') {
            flagImg.src = BASE_URL + 'dist/img/flagth.png';
        } else {
            flagImg.src = BASE_URL + 'dist/img/flagen.png';
        }
    });

    document.getElementById('language-select-bottom').addEventListener('change', function() {
        var selectedLang = this.value;
        updateLanguage(selectedLang);
        var flagImg = document.getElementById('flag-img-bottom');
        if (selectedLang === 'th') {
            flagImg.src = BASE_URL + 'dist/img/flagth.png';
        } else {
            flagImg.src = BASE_URL + 'dist/img/flagen.png';
        }
    });

    document.getElementById('language-select-mobile').addEventListener('change', function() {
        var selectedLang = this.value;
        updateLanguage(selectedLang);
    });
});
