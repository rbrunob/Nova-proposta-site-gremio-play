//ABRIR CARDS DO FAQ

const faqItem = document.querySelectorAll("[data-faq]");

faqItem.forEach(item => {
    item.addEventListener("click", (e) => {
        item.classList.toggle("open")
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
    if (window.scrollY >= 50) {
        header.setAttribute('style', 'position: fixed')
        main.setAttribute('style', 'top: 70px;')
        footer.setAttribute('style', 'top: 70px;')
    } else {
        header.setAttribute('style', 'position: relative')
        main.setAttribute('style', 'top: 0px;')
        footer.setAttribute('style', 'top: 0px;')
    }
})

// MENU MOBILE

const menu = document.querySelector('.menu_container');
const navMenu = document.querySelector('.menu_nav_mobile');

menu.addEventListener('click', () => {
    navMenu.classList.toggle('active');
})

