async function updateLanguage(lang) {
    try {
        const response = await fetch(BASE_URL + "public/data/language/header_locale.json");
        if (!response.ok) {
            throw new Error("Network response was not ok " + response.statusText);
        }
        const data = await response.json();

        const elements = [
            "info_open1",
            "info_open2",
            "info_email1",
            "info_email2",
            "info_callus1",
            "info_callus2",
            "menu_home",
            "menu_about_us",
            "menu_service",
            "menu_review",
            "menu_contact",
            "dropdown_service1",
            "dropdown_service2",
            "dropdown_service3",
            "title_partner",
            "sub_title_animal_clinic",
            "sub_title_pet_friendly",
            "sub_title_pet_hotel"
        ];

        elements.forEach(id => {
            const element = document.getElementById(id);
            if (element) {
                element.textContent = data[lang][id];
            }
        });

        const homepageResponse = await fetch(BASE_URL + "public/data/language/homepage_locale.json");
        if (!homepageResponse.ok) {
            throw new Error("Network response was not ok " + homepageResponse.statusText);
        }
        const homepageData = await homepageResponse.json();

        const homepageElements = {
            title_about_us: "title_about_us",
            btn_view_more1: "btn_view_more1",
            btn_view_more2: "btn_view_more2",
            title_our_service_part1: "title_our_service_part1",
            title_our_service_part2: "title_our_service_part2",
            title_review: "title_review",
            title_partner: "title_partner",
            sub_title_animal_clinic: "sub_title_animal_clinic",
            sub_title_pet_friendly: "sub_title_pet_friendly",
            sub_title_pet_hotel: "sub_title_pet_hotel",
            title_quote_part1: "title_quote_part1",
            title_quote_part2: "title_quote_part2",
            title_quote_part3: "title_quote_part3",
            label_name: "label_name",
            ph_name: "ph_name",
            label_phone: "label_phone",
            ph_phone: "ph_phone",
            label_email: "label_email",
            ph_email: "ph_email",
            label_date: "label_date",
            ph_date: "ph_date",
            label_country: "label_country",
            ph_origin_country: "ph_origin_country",
            label_destination_country: "label_destination_country",
            ph_destination_country: "ph_destination_country",
            label_travel_type: "label_travel_type",
            ph_travel_type: "ph_travel_type",
            label_pet_transport: "label_pet_transport",
            ph_pet_transport: "ph_pet_transport",
            label_pet_type: "label_pet_type",
            ph_pet_type: "ph_pet_type",
            label_breed: "label_breed",
            ph_breed: "ph_breed",
            label_age: "label_age",
            ph_age: "ph_age",
            label_weight: "label_weight",
            ph_weight: "ph_weight",
            label_reason: "label_reason",
            ph_reason: "ph_reason",
            btn_submit_quote: "btn_submit_quote",
            label_origin_airport: "label_origin_airport",
            ph_origin_airport: "ph_origin_airport",
            label_destination_airport: "label_destination_airport",
            ph_destination_airport: "ph_destination_airport",
            label_services: "label_services",
            option_travel_type: "option_travel_type",
            option_pet_transport: "option_pet_transport",
            option_origin_airport: "option_origin_airport",
            option_destination_country: "option_destination_country",
            option_destination_airport: "option_destination_airport"
        };

        for (const [id, key] of Object.entries(homepageElements)) {
            const element = document.getElementById(id);
            if (element) {
                if (id.startsWith("ph_")) {
                    element.placeholder = homepageData[lang][key];
                } else {
                    element.textContent = homepageData[lang][key];
                }
            }
        }

        const viewMoreButtons = document.querySelectorAll(".btn_view_more2");
        viewMoreButtons.forEach(button => {
            button.textContent = homepageData[lang]["btn_view_more2"];
        });

    } catch (error) {
        console.error("Failed to fetch content: ", error);
    }
}

function setFlagImage(selectedLang) {
    const flagImg = document.querySelectorAll("#flag-img, #flag-img-bottom");
    flagImg.forEach(img => {
        if (selectedLang === "th") {
            img.src = BASE_URL + "dist/img/flagth.png";
        } else {
            img.src = BASE_URL + "dist/img/flagen.png";
        }
    });
}

document.addEventListener("DOMContentLoaded", function() {
    var defaultLang = "en";
    updateLanguage(defaultLang);

    const selectors = [
        "language-select",
        "language-select-bottom",
        "language-select-mobile"
    ];

    selectors.forEach(selectorId => {
        const selector = document.getElementById(selectorId);
        if (selector) {
            selector.addEventListener("change", function() {
                var selectedLang = this.value;
                updateLanguage(selectedLang);
                setFlagImage(selectedLang);
            });
        }
    });

    window.addEventListener("scroll", function() {
        const headerTop = document.querySelector(".header-top");
        const headerBottom = document.querySelector(".header-bottom");

        if (window.scrollY > 100) {
            headerTop.classList.add("hide");
            headerBottom.classList.add("scrolled");
        } else {
            headerTop.classList.remove("hide");
            headerBottom.classList.remove("scrolled");
        }
    });
});
