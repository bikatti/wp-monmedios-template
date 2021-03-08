window.onscroll = () => stickyMenu()



let header = document.getElementById("header")
let https = ['http://', 'https://']
let addressLogo = '/wp-content/themes/monmedios-landing/assets/img/';

function stickyMenu() {
  let insertInput = document.getElementById('branding')

  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    header.classList.add("-headerFixed")
    insertInput.innerHTML = `
          <img src="${https[0]}${window.location.hostname}${addressLogo}logo/imagotipo_rgb.png" alt="logotipo de Monmedios">
        `
  } else {
    header.classList.remove("-headerFixed")
    insertInput.innerHTML = `
          <img src="${https[0]}${window.location.hostname}${addressLogo}logo/imagotipo_white.png" alt="logotipo de Monmedios">
        `
  }
}

let ipad = window.matchMedia('screen and (min-width: 200px)')

let contact = document.getElementById('contactForm')
let contactButton = document.getElementById('contactButton')
let contactFooter = document.getElementById('contactFooter')
let contactOut = document.getElementById('contactOut')
let theBody = document.getElementById('theBody')
let modalBlur = document.getElementById('modalBlur')

ipad.addListener(validation)

function validation(event) {
    if (event.matches) {
        contactButton.addEventListener('click', hideShow)
        contactFooter.addEventListener('click', hideShow)
        contactOut.addEventListener('click', hideShow)
    }
    else {
        contactButton.removeEventListener('click', hideShow)
        contactFooter.addEventListener('click', hideShow)
        contactOut.addEventListener('click', hideShow)
    }
}

validation(ipad)

function hideShow() {
    if (contact.classList.contains('-show')) {
        contact.classList.remove('-show')
        modalBlur.classList.remove('-show')
        theBody.style.cssText = ''
    } else {
        contact.classList.add('-show')
        modalBlur.classList.add('-show')
        theBody.style.overflow = 'hidden'
    }
}