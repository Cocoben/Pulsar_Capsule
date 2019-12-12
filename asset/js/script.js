// MENU BURGER

let buttonBurger = document.querySelector('#menuBurger')

let nav = document.querySelector('nav')
let statNav = 0

buttonBurger.addEventListener('click', () => {
    event.preventDefault();
    if (statNav == 0) {
        nav.style.visibility = 'visible'
        statNav++
        console.log('nav visible')
    } else {
        nav.style.visibility = 'hidden'
        statNav = 0
        console.log('nav caché')

    }
})




// LECTEUR VIDEO


// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '360',
        width: '640',
        videoId: '',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    })
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
        // setTimeout(stopVideo, 6000);
        done = true;
    }
}

function stopVideo() {
    player.stopVideo();
}


let blockVideo = document.querySelectorAll('.video')
let modalVideo = document.querySelector('#modalVideo')
let modalClose = document.querySelector('#modalVideo i')
let linkVideo

blockVideo.forEach((node) => {
    node.addEventListener('click', () => {
        linkVideo = node.dataset.video
        modalVideo.style.visibility = 'visible'
        console.log(linkVideo)
        player.loadVideoById({videoId:linkVideo,
            startSeconds:0,
            suggestedQuality:'large'})
    

    })
})


if(modalClose != null){
    modalClose.addEventListener('click', () => {
        modalVideo.style.visibility = 'hidden'
        stopVideo()
    })
}







// INPUT RANGE

let inputRangeUne = document.querySelector('#inputRangeUne')
let sectionBlockUne = document.querySelector('#sectionBlockUne')
let divSectionBlockUne = document.querySelector('#sectionBlockUne > div')
let tailleScrollUn

if(inputRangeUne != null){
    tailleScrollUn = divSectionBlockUne.offsetWidth - sectionBlockUne.offsetWidth
    inputRangeUne.addEventListener("input", function () {
        sectionBlockUne.scrollLeft = tailleScrollUn * inputRangeUne.value / 50
    })
    sectionBlockUne.addEventListener('scroll', () => {
        inputRangeUne.value = 50 * sectionBlockUne.scrollLeft / tailleScrollUn
    })
    if(divSectionBlockUne.offsetWidth < sectionBlockUne.offsetWidth){
        inputRangeUne.style.visibility ='hidden';
    }else{
        inputRangeUne.style.visibility ='visible';
    }
}

let inputRangeDeux = document.querySelector('#inputRangeDeux')
let sectionBlockDeux = document.querySelector('#sectionBlockDeux')
let divSectionBlockDeux = document.querySelector('#sectionBlockDeux > div')
let tailleScrollDeux


if(inputRangeDeux != null){
    tailleScrollDeux = divSectionBlockDeux.offsetWidth - sectionBlockDeux.offsetWidth
    inputRangeDeux.addEventListener("input", function () {
        sectionBlockDeux.scrollLeft = tailleScrollDeux * inputRangeDeux.value / 50
    })
    sectionBlockDeux.addEventListener('scroll', () => {
        inputRangeDeux.value = 50 * sectionBlockDeux.scrollLeft / tailleScrollDeux
    })
    if(divSectionBlockDeux.offsetWidth < sectionBlockDeux.offsetWidth){
        inputRangeDeux.style.visibility ='hidden';
    }else{
        inputRangeDeux.style.visibility ='visible';
    }
}




// sectionBlockUne.addEventListener('wheel', function(e) {

//     if (e.deltaY > 0) sectionBlockUne.scrollLeft += 100;
//     else sectionBlockUne.scrollLeft -= 100;
//   });
