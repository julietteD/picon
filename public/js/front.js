const elem = document.querySelector('input[name="birthdate"]');
const datepicker = new Datepicker(elem, {
    format: 'yyyy-mm-dd',
});


const tl = gsap.timeline();
const tl2 = gsap.timeline();

tl2.to(".content-text h2", { opacity: 1 }).to(".content-text .programme", { opacity: 1 }).to(".content-text a", { opacity: 1 })
tl.to(".showcase-pict", { opacity: 1 }).to(".showcase-form", { opacity: 1 })


ScrollTrigger.create({
    animation: tl,
    start: "top center",
    trigger: "#section2",

})


function scrollToTargetAdjusted() {
    var element = document.getElementById('section2');
    var headerOffset = 45;
    var elementPosition = element.getBoundingClientRect().top;
    var offsetPosition = elementPosition + window.pageYOffset - headerOffset;

    window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
    });
}