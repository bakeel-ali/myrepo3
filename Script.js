const translations = {
    en: {
        txt1 : "create acount",
        txt2 : "first name",
        txt3 : "last name",
        txt4 : "Email",
        txt5 : "Password",
        txt6 : "Yemen",
        txt7 : "Egypt",
        txt8 : "Soudia",
        txt9 : "Emarat",
        txt10 : "phone number",
        txt11 : "Save",
        txt12 : "Click heare",
        txt13 : "if you have acount",
        txt14 : "English",
        txt15 : "Arabic",
        txt16 : "select language to translate",
        txt17 : "create",

    },
    ar: {
        txt1 : "انشاء حساب",
        txt2 : "اسم المستخدم",
        txt3 : "تاكيد كلمة السر",
        txt4 : "البريد الالكتروني",
        txt5 : "كلمة المرور",
        txt6 : "اليمن",
        txt7 : "مصر",
        txt8 : "السعودية",
        txt9 : "الامارات",
        txt10 : "رقم الهاتف",
        txt11 : "حفظ",
        txt12 : "اضغط هنا",
        txt13 : "لديك حساب بالفعل",
        txt14 : "انجليزية",
        txt15 : "عربية",
        txt16 : "اختر لغة للترجمة",
        txt17 : "انشاء",
    },
};




//export default translations;
//import translations from"./translationFile.js";




const languageSelector = document.querySelector("select");

languageSelector.addEventListener("change", (event) => {
    setLanguage(event.target.value);
    localStorage.setItem('lang', event.target.value);
});

document.addEventListener('DOMContentLoaded', () => {
    //const language = localStorage.getItem("lang");
    //setLanguage(language);
    setLanguage(localStorage.getItem("lang"));
});
const setLanguage = (language)=> {
    const elements = document.querySelectorAll("[data-i18n]");
    elements.forEach((element) => {
        const translationKey = element.getAttribute("data-i18n");
        element.textContent = translations[language][translationKey];
    });
    document.dir = language === "ar" ? "rtl" : "ltr";
};