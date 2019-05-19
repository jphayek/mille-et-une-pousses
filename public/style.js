document.addEventListener("DOMContentLoaded", () => {

    document.addEventListener('scroll', () => {

        let navbar = document.querySelector('#navbar'),
            logo = document.querySelector('#logo'),
            scroll = document.documentElement

        if (scroll.scrollTop >= 50) {
            navbar.classList.add('navbar-scroll')
            logo.classList.add('logoExit')
        } else {
            navbar.classList.remove('navbar-scroll')
            logo.classList.remove('logoExit')
        }
    })

})