const pvid =document.querySelectorAll('.pvid');
const pvideo=document.querySelector('.pvideo');
const playbtn = document.getElementById('playbtn');
flag=0;


playbtn.addEventListener('mouseover' , () => {
    if(pvideo.paused)
    {
        flag=1;
    }
 });
 playbtn.addEventListener('mouseout' , () => {
    flag=0;
 });

pvideo.addEventListener('mouseover',()=>{
    pvideo.play();
})
pvideo.addEventListener('mouseout',()=>{
    pvideo.pause();
    if(flag=1){
        pvideo.play();
    }
    else if(flag=0){
        pvideo.pause();
        pvideo.currentTime=0;
    }


})



// pvideo.addEventListener('mouseenter',function(e){ pvideo.play()});

// pvideo.addEventListener('mouseleave',()=>{
//     pvideo.pause();
//     pvideo.currentTime=0;

// });
 



playbtn.addEventListener('click' , () => { pvideo.play();
    if(pvideo.requestFullscreen)
    {
        pvideo.requestFullscreen();
    }

});
const cshapes= document.querySelector('.cshapes');
const ccircle = document.querySelector('.ccircle');
const csquare = document.querySelector('.csquare');
const crhombus = document.querySelector('.crhombus')

cshapes.addEventListener('mouseout' , () => {
    ccircle.classList.add('rotatecircle1')
});
cshapes.addEventListener('mouseleave' , () => {
    csquare.classList.add('rotatesquare')
});
cshapes.addEventListener('mouseleave' , () => {
    crhombus.classList.add('rotaterhombus')
});
$(document).ready(function(){
    $(".about").load("about.html");
});
$(document).ready(function(){
    $(".con").load("connection.html");
});

$(document).ready(function(){
    $(".dis").load("discover.html");
});


