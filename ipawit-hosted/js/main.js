const showMenu = (toggleId,navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show-menu')
        })
    }
}
showMenu('nav-toggle','nav-menu')

const navLink = document.querySelectorAll('.nav_link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')
}

navLink.forEach(n => n.addEventListener('click', linkAction))

const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

function scrollHeader(){
    const header  = document.getElementById('header')
    if(this.scrollY >= 200) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

function scrollTop(){
    const scrollTop  = document.getElementById('scroll-top')
    if(this.scrollY >= 560) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop )


function details(){
    const details  = document.getElementById('details')
    if(this.scrollY >= 560) details.classList.add('show-details'); else details.classList.remove('show-details')
}
window.addEventListener('scroll', details )

function detailsToggle(){
    var details = document.querySelector('.details');
    details.classList.toggle('active')
}

function toggleMenu(){
    let navigation = document.querySelector('.navigation');
    navigation.classList.toggle('active');
}

const mySwiper = new Swiper('.partners_container', {
    spaceBetween: 16,
    loop: true,
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints:{
        640:{
            slidesPerView: 2,
        },
        1024:{
            slidesPerView: 3,
        },
    }
  })

  var typed = new Typed('#animate', {
    stringsElement: '#typed-strings',
    typeSpeed: 50,
    backSpeed: 50,
    loop: true,
    showCursor: false
});

function toggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
}

function secondToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup1 = document.getElementById('popup1');
    popup1.classList.toggle('active');
}

function thirdToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup2 = document.getElementById('popup2');
    popup2.classList.toggle('active');
}

function fourthToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup3 = document.getElementById('popup3');
    popup3.classList.toggle('active');
}

function fifthToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup4 = document.getElementById('popup4');
    popup4.classList.toggle('active');
}

function sixthToggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  var popup5 = document.getElementById('popup5');
  popup5.classList.toggle('active');
}

function seventhToggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  var popup6 = document.getElementById('popup6');
  popup6.classList.toggle('active');
}



  function disableTxt() {
    document.getElementById("brand").disabled = true;
  }

  function undisableTxt() {
    document.getElementById("brand").disabled = false;
  }

  function disableTxtfull() {
    document.getElementById("brandfull").disabled = true;
  }

  function undisableTxtfull() {
    document.getElementById("brandfull").disabled = false;
  }

  function editToggle() {
    var x = document.getElementById("edit");
    var y = document.getElementById("option");
    if (x.style.display === "none" && y.style.display === "none") {
      x.style.display = "block";
      x.style.display = "none";
    } else {
      x.style.display = "none";
      y.style.display = "block";
    }
  }

  function closeToggle() {
    var x = document.getElementById("edit");
    var y = document.getElementById("option");
    if (x.style.display === "none" && y.style.display === "none") {
      x.style.display = "none";
      x.style.display = "block";
    } else {
      x.style.display = "block";
      y.style.display = "none";
    }
  }

  function fulleditToggle() {
    var x = document.getElementById("editfull");
    var y = document.getElementById("optionfull");
    if (x.style.display === "none" && y.style.display === "none") {
      x.style.display = "block";
      x.style.display = "none";
    } else {
      x.style.display = "none";
      y.style.display = "block";
    }
  }

  function fullcloseToggle() {
    var x = document.getElementById("editfull");
    var y = document.getElementById("optionfull");
    if (x.style.display === "none" && y.style.display === "none") {
      x.style.display = "none";
      x.style.display = "block";
    } else {
      x.style.display = "block";
      y.style.display = "none";
    }
  }



function ahomeToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var ahome = document.getElementById('ahome');
    ahome.classList.toggle('active');
}

function chomeToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var chome = document.getElementById('chome');
    chome.classList.toggle('active');
}

function dhomeToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var dhome = document.getElementById('dhome');
    dhome.classList.toggle('active');
}

function bhomeToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var bhome = document.getElementById('bhome');
    bhome.classList.toggle('active');
}

function aboutToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var about = document.getElementById('about');
    about.classList.toggle('active');
}

function aboutbToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var aboutb = document.getElementById('aboutb');
    aboutb.classList.toggle('active');
}

function aboutcToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var aboutc = document.getElementById('aboutc');
    aboutc.classList.toggle('active');
}

function boxAToggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var boxA = document.getElementById('boxA');
    boxA.classList.toggle('active');
}

function boxBToggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  var boxB = document.getElementById('boxB');
  boxB.classList.toggle('active');
}

function boxCToggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  var boxC = document.getElementById('boxC');
  boxC.classList.toggle('active');
}

function contactAToggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  var contactA = document.getElementById('contactA');
  contactA.classList.toggle('active');
}

function contactBToggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  var contactB = document.getElementById('contactB');
  contactB.classList.toggle('active');
}

function contactCToggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  var contactC = document.getElementById('contactC');
  contactC.classList.toggle('active');
}

function addpartnerBoxToggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  var addpartnerBox = document.getElementById('addpartnerBox');
  addpartnerBox.classList.toggle('active');
}




const cr = ScrollReveal({
    origin: 'right',
    distance: '80px',
    duration: '2000',
    reset: true
})

cr.reveal('.home_img',{opacity: 0, delay: 1, x:60, ease:'expo.out', stagger: .2})

  const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: '2000',
    reset: true
})

sr.reveal('.home_data', {opacity: 0, delay: .8, y:25, ease:'expo.out', stagger: .2})
sr.reveal('.home_greeting, .home_name, .home_button',{opacity: 0, delay: 1, y:25, ease:'expo.out', stagger: .2})
sr.reveal('.home_social-icon', {opacity: 0, delay: 2.3, y:25, ease:'expo.out', stagger: .2})
sr.reveal('.section-subtitle, .section-title', {opacity: 0, delay: .8, y:25, ease:'expo.out', stagger: .2})
sr.reveal('.qualification_container',{opacity: 0, delay: 3.5, x:60, ease:'expo.out', stagger: .2})
sr.reveal('.services_data',{opacity: 0, delay: 4, x:60, ease:'expo.out', stagger: .2, interval:300})
sr.reveal('.emailUs_container',{opacity: 0, delay: 3.5, x:60, ease:'expo.out', stagger: .2})
sr.reveal('.swiper-wrapper',{opacity: 0, delay: 4, x:60, ease:'expo.out', stagger: .2,})
sr.reveal('.contact_box',{opacity: 0, delay: 4, x:60, ease:'expo.out', stagger: .2, interval:200})
sr.reveal('.contact_inputs, .contact_input, .contact_button',{opacity: 0, delay: 4, x:60, ease:'expo.out', stagger: .2, interval:100})
sr.reveal('.about_description, .about_number, .about_achievement',{opacity: 0, delay: 1, x:60, ease:'expo.out', stagger: .2})
sr.reveal('.about_img',{opacity: 0, delay: 5, x:60, ease:'expo.out', stagger: .2})