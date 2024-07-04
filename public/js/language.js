async function updateLanguage(lang) {
  try {
    // section header
    const response = await fetch(
      BASE_URL + "public/data/language/header_locale.json"
    );
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
      "sub_title_pet_hotel",
      "mb_menu_home",
      "mb_menu_about_us",
      "mb_menu_service",
      "mb_menu_review",
      "mb_menu_contact1",
      "mb_menu_contact2",
    ];

    elements.forEach((id) => {
      const element = document.getElementById(id);
      if (element) {
        element.textContent = data[lang][id];
      }
    });

    // section homepage
    const homepageResponse = await fetch(
      BASE_URL + "public/data/language/homepage_locale.json"
    );
    if (!homepageResponse.ok) {
      throw new Error(
        "Network response was not ok " + homepageResponse.statusText
      );
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
      option_destination_airport: "option_destination_airport",
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
    viewMoreButtons.forEach((button) => {
      button.textContent = homepageData[lang]["btn_view_more2"];
    });

    // section footer
    const footerResponse = await fetch(
      BASE_URL + "public/data/language/footer_local.json"
    );
    if (!footerResponse.ok) {
      throw new Error(
        "Network response was not ok " + footerResponse.statusText
      );
    }
    const footerData = await footerResponse.json();

    const footerElements = {
      ft_open1: "ft_open1",
      ft_open2: "ft_open2",
      ft_email1: "ft_email1",
      ft_email2: "ft_email2",
      ft_callus1: "ft_callus1",
      ft_callus2: "ft_callus2",
    };

    for (const [id, key] of Object.entries(footerElements)) {
      const element = document.getElementById(id);
      if (element) {
        element.textContent = footerData[lang][key];
      }
    }

    // section review
    const reviewResponse = await fetch(
      BASE_URL + "public/data/language/review_locale.json"
    );
    if (!reviewResponse.ok) {
      throw new Error(
        "Network response was not ok " + reviewResponse.statusText
      );
    }
    const reviewData = await reviewResponse.json();

    const reviewElements = {
      rv_title_review1: "rv_title_review1",
      rv_title_review2: "rv_title_review2",
      rv_btn_view_more_reviews: "rv_btn_view_more_reviews",
      rv_btn_view_more_on_facebook: "rv_btn_view_more_on_facebook",
      rv_team_work_results1: "rv_team_work_results1",
      rv_team_work_results2: "rv_team_work_results2",
    };

    for (const [id, key] of Object.entries(reviewElements)) {
      const element = document.getElementById(id);
      if (element) {
        element.textContent = reviewData[lang][key];
      }
    }

    // section contact
    const contactResponse = await fetch(
      BASE_URL + "public/data/language/contact_local.json"
    );
    if (!contactResponse.ok) {
      throw new Error(
        "Network response was not ok " + contactResponse.statusText
      );
    }
    const contactData = await contactResponse.json();

    const contactElements = {
      contact_us: "contact_us",
      contact_us_desc: "contact_us_desc",
      contact_greeting: "contact_greeting",
      contact_footer_desc: "contact_footer_desc",
      contact_opening_hours: "contact_opening_hours",
      contact_weekdays_hours: "contact_weekdays_hours",
      contact_closed_sundays: "contact_closed_sundays",
      contact_phone: "contact_phone",
      contact_email: "contact_email",
    };

    const contactPlaceholders = {
      ph_contact_name: "contact_name_placeholder",
      ph_contact_surname: "contact_surname_placeholder",
      ph_contact_email: "contact_email_placeholder",
      ph_contact_phone: "contact_phone_placeholder",
      ph_contact_message: "contact_message_placeholder",
    };

    for (const [id, key] of Object.entries(contactElements)) {
      const element = document.getElementById(id);
      if (element) {
        element.textContent = contactData[lang][key];
      }
    }

    for (const [id, key] of Object.entries(contactPlaceholders)) {
      const element = document.getElementById(id);
      if (element) {
        element.placeholder = contactData[lang][key];
      }
    }

    // section aboutus
    const aboutusResponse = await fetch(
      BASE_URL + "public/data/language/aboutus_local.json"
    );
    if (!aboutusResponse.ok) {
      throw new Error(
        "Network response was not ok " + aboutusResponse.statusText
      );
    }
    const aboutusData = await aboutusResponse.json();

    const aboutusElements = {
      ab_title1: "ab_title1",
      ab_title2: "ab_title2",
      ab_title_team1: "ab_title_team1",
      ab_title_team2: "ab_title_team2",
      ab_title_story1: "ab_title_story1",
      ab_title_story2: "ab_title_story2",
    };

    for (const [id, key] of Object.entries(aboutusElements)) {
      const element = document.getElementById(id);
      if (element) {
        element.textContent = aboutusData[lang][key];
      }
    }

    // section partner price request
    const partnerResponse = await fetch(
      BASE_URL + "public/data/language/service1_local.json"
    );
    if (!partnerResponse.ok) {
      throw new Error(
        "Network response was not ok " + partnerResponse.statusText
      );
    }
    const partnerData = await partnerResponse.json();

    const partnerElements = {
      title_partner1: "title_partner1",
      title_partner2: "title_partner2",
      title_price_request: "title_price_request",
      detail_price_request: "detail_price_request",
      btn_price_request: "btn_price_request",
      service_list_title: "service_list_title",
    };

    for (const [id, key] of Object.entries(partnerElements)) {
      const element = document.getElementById(id);
      if (element) {
        element.textContent = partnerData[lang][key];
      }
    }

    // section service2
    const service2Response = await fetch(
      BASE_URL + "public/data/language/service2_local.json"
    );
    if (!service2Response.ok) {
      throw new Error(
        "Network response was not ok " + service2Response.statusText
      );
    }
    const service2Data = await service2Response.json();

    // กำหนด element ที่ต้องการอัพเดตข้อความตามภาษา
    const service2Elements = {
      search_category: "search_category",
      select_category: "select_category",
      price_high_to_low: "price_high_to_low",
      price_low_to_high: "price_low_to_high",
      latest_date: "latest_date",
      new_date: "new_date",
      dog: "dog",
      cat: "cat",
      view_more: "view_more",
      breed: "breed",
      age: "age",
      price: "price",
      price_unit: "price_unit",
      pet_information: "pet_information",
      gender: "gender",
      color: "color",
      characteristic: "characteristic",
      vaccination_history: "vaccination_history",
      sell_date: "sell_date",
      contact_seller: "contact_seller",
      close: "close",
      pet_detail: "pet_detail",
    };

    // อัพเดตข้อความของตัวเลือกทั้งหมดใน select
    const selectElement = document.getElementById("service-search");
    Array.from(selectElement.options).forEach((option) => {
      if (service2Data[lang][option.value]) {
        option.textContent = service2Data[lang][option.value];
      } else {
        option.textContent = option.value;
      }
    });

    // อัพเดตข้อความของตัวเลือกแรกใน select
    if (selectElement.options.length > 0) {
      selectElement.options[0].textContent =
        service2Data[lang][selectElement.options[0].value];
    }

    // ลูปผ่าน element แต่ละตัวเพื่อตั้งค่า textContent ใหม่
    for (const [key, id] of Object.entries(service2Elements)) {
      if (
        [
          "select_category",
          "price_high_to_low",
          "price_low_to_high",
          "latest_date",
          "new_date",
          "dog",
          "cat",
        ].includes(key)
      ) {
        // เลือก element ของ option และอัพเดตข้อความ
        const optionElement = document.querySelector(
          `#service-search option[value='${id}']`
        );
        if (optionElement) {
          optionElement.textContent = service2Data[lang][key];
        }
      } else {
        // อัพเดตข้อความของ element อื่นๆ
        const element = document.getElementById(id);
        if (element) {
          element.textContent = service2Data[lang][key];
        }
      }
    }

    // อัพเดตข้อความใน pet cards (ถ้ามี)
    document.querySelectorAll(".pet-card").forEach((petCard) => {
      const petId = petCard
        .querySelector(".card-body .date-posted")
        .id.replace("sell_date", "");
      const elements = {
        [`sell_date${petId}`]: "sell_date",
        [`breed${petId}`]: "breed",
        [`age${petId}`]: "age",
        [`price${petId}`]: "price",
        [`price_unit_${petId}`]: "price_unit",
        [`btn_view_more${petId}`]: "view_more",
      };

      for (const [id, key] of Object.entries(elements)) {
        const element = document.getElementById(id);
        if (element) {
          element.textContent = service2Data[lang][key];
        }
      }
    });
  } catch (error) {
    console.error("Failed to fetch content: ", error);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  var defaultLang = "en";
  updateLanguage(defaultLang);

  const selectors = [
    "language-select",
    "language-select-bottom",
    "language-select-mobile",
  ];

  selectors.forEach((selectorId) => {
    const selector = document.getElementById(selectorId);
    if (selector) {
      selector.addEventListener("change", function () {
        var selectedLang = this.value;
        updateLanguage(selectedLang);
        setFlagImage(selectedLang);
      });
    }
  });

  window.addEventListener("scroll", function () {
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
