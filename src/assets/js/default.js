//ABRIR CARDS DO FAQ

const faqItem = document.querySelectorAll("[data-faq]");

faqItem.forEach(item => {
    item.addEventListener("click", () => {
        const faqs = document.getElementsByClassName('faq_container')[0].children;
        for (i = 0; i < faqs.length; i++) {
            if (faqs[i].classList.contains('open')) {
                faqs[i].classList.remove('open');
            }
        }
        item.classList.add("open");
    })
});





// PEGA ANO ATUAL

const copyright = document.querySelector("[data-copyright]");

let today = new Date();
let currentYear = today.getFullYear();

copyright.innerHTML = `© Grêmio Play ${currentYear} - Todos os Direitos Reservados - Desenvolvido por <a rel="noopener" href="https://containermedia.com.br/" target="_blank">Container Media Tech</a>.`

// MENU FIXO COM SCROLL

const header = document.querySelectorAll('header')[0];
const main = document.querySelectorAll('main')[0];
const footer = document.querySelectorAll('footer')[0];

window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;

    if (scrollY >= 50) {
        header.style.position = 'fixed';
        main.style.top = '70px';
        footer.style.top = '70px';
    } else {
        header.style.position = 'relative';
        main.style.top = '0px';
        footer.style.top = '0px';
    }
});

// MENU MOBILE

const menu = document.querySelector('.menu_container');
const navMenu = document.querySelector('.menu_nav_mobile');

menu.addEventListener('click', () => {
    navMenu.classList.toggle('active');
})