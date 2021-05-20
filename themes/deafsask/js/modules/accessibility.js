import { gsap } from "gsap";


let accessButton = document.getElementById('universal-access-button')
let accessOverlay = document.getElementById('universal-access-overlay')
let state = false;
accessButton.addEventListener('click', function(){
    if(state == false){
        gsap.to(accessOverlay, 1, {scaleY: 1, scaleX: 1})
        state = true 
    }else if(state == true){
        gsap.to(accessOverlay, 1, {scaleY: 0, scaleX: 0})
        state = false
    }
})


let greyScaleUp = document.getElementById('greyScaleUp')
let greyScaleDown = document.getElementById('greyScaleDown')
let FontSizeUp = document.getElementById('fontSizeUp')
let FontSizeDown = document.getElementById('fontSizeDown')
let bannerOverlayRight = document.getElementById('banner_overlay_right')
let greyScaleCount = 0;
let elements = document.getElementsByTagName('*')
let body = document.body


let reset = document.getElementById('reset')

//greyScale Up
greyScaleUp.addEventListener('click', function(){
    bannerOverlayRight.style.display = 'none'
    greyScaleCount++
    let bgColor = greyScaleCount*111
    for(let i = 0; i < elements.length; i++){
        elements[i].style.backgroundColor = `#${bgColor}`
        elements[i].style.color = `#fff`
        if(greyScaleCount >= 10 && greyScaleCount < 19|| greyScaleCount >= 20){
            elements[i].style.color = '#000'
        }else{
            elements[i].style.color = '#FFF'
        }
        console.log(elements[i].style.color)
    }
    console.log(greyScaleCount)
})
//greyScale Down
greyScaleDown.addEventListener('click', function(){
    greyScaleCount--
    let bgColor = greyScaleCount*111
    for(let i = 0; i < elements.length; i++){
        elements[i].style.backgroundColor = `#${bgColor}`
        console.log(elements[i].style.backgroundColor)
        if(greyScaleCount >= 10 && greyScaleCount < 19 || greyScaleCount >= 20){
            elements[i].style.color = '#000'
        }else{
            elements[i].style.color = '#FFF'
        }
    }
    console.log(greyScaleCount)
})

//FontSize Up
let fontSizeCount = 12
FontSizeUp.addEventListener('click', function(){
    fontSizeCount++
    body.style.fontSize = `${fontSizeCount}px`
    console.log(body.style.fontSize)
})
//FontSize Up
FontSizeDown.addEventListener('click', function(){
    fontSizeCount--
    body.style.fontSize = `${fontSizeCount}px`
    console.log(body.style.fontSize)
})

//reset function
reset.addEventListener('click', function(){
    window.location.reload();
})

