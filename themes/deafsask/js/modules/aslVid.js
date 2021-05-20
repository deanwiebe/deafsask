import { gsap } from "gsap";

let aslButton = document.getElementById('asl_tab')
let aslVideo = document.getElementById('asl-video')
let close = document.getElementById('close')
let iframe = document.getElementById('iframe')
let state = false;

aslButton.addEventListener('click', function(){
    console.log(aslVideo)
    if(state == false){
        gsap.to(aslButton, 1, {height: '400', width: '100%'})
        gsap.to(aslVideo, 1, {height: '400', width: '100%'})
        gsap.to(iframe, 1, {height: '315', width: '100%'})
        close.style.color = 'black'
        close.innerHTML = '<i class="far fa-window-close"></i>'
        state = true 
    }else if(state == true){
        gsap.to(aslButton, 1, {height: '50', width: '200'})
        gsap.to(iframe, 1, {height: '0', width: '0'})
        close.style.color = 'white'
        close.innerHTML = 'ASL'
        state = false
    }
})