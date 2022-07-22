
let songindex = 0;
let audioEle = new Audio('Let Me.mp3');
let masterplay = document.getElementById('masterplay');
let myprgbar = document.getElementById('progbar');
let smallplay = document.getElementById('timest');
let songItems = Array.from(document.getElementsByClassName('songItem'));
let prev = document.getElementById('previoussong');
let forw = document.getElementById('nextsong');
let songplay=Array.from(document.getElementsByClassName("fa-solid fa fa-play-circle"));
let preclick=0;

let songs = [
    { songName: "Let Me", filePath: "Let Me.mp3", coverPath: "cover.jpg" },
    { songName: "Satisfaction", filePath: "Satisfaction.mp3", coverPath: "cover.jpg" },
    { songName: "Tonight", filePath: "Tonight.mp3", coverPath: "cover.jpg" },
    { songName: "Rainberry", filePath: "Rainberry.mp3", coverPath: "cover.jpg" }
]

document.getElementById("coverimg").src = "cover.jpg";
let a = document.getElementsByClassName("songName");
for (i = 0; i < songs.length; i++) {
    a[i].innerHTML = songs[i].songName;
}


function playspec(clicked_id){
    songindex=clicked_id-1;
    audioEle.pause();
    audioEle.src=songs[clicked_id-1].filePath;
    update();
    audioEle.play();
    if(masterplay.classList.contains("fa-play-circle"))
        masterplay.classList.replace("fa-play-circle", "fa-pause-circle");
    document.getElementById("gif").style.opacity = 1;
    document.getElementById(clicked_id).classList.replace("fa-play-circle", "fa-pause-circle");
    if(preclick!=0&&clicked_id!=preclick) {   
        document.getElementById(preclick).classList.replace("fa-pause-circle", "fa-play-circle");
        preclick=clicked_id;   
    }
    preclick=clicked_id;
}

masterplay.addEventListener('click', () => {
    if (audioEle.paused || audioEle.currentTime <= 0) {
        audioEle.play();
        masterplay.classList.remove("fa-play-circle")
        masterplay.classList.add("fa-pause-circle")
        document.getElementById("gif").style.opacity = 1;
    }
    else {
        audioEle.pause();
        masterplay.classList.replace("fa-pause-circle", "fa-play-circle")
        document.getElementById("gif").style.opacity = 0;
        document.getElementById(preclick).classList.replace("fa-pause-circle", "fa-play-circle");
    }
    //    alert('play');
    setInterval(function () {
        if (audioEle.duration == audioEle.currentTime) {
            if (songindex == songs.length - 1)
                songindex = 0;
            else
                songindex += 1;
            audioEle.pause();
            audioEle.src = songs[songindex].filePath;
            update();
            audioEle.play();
        }
    }, 1000)

})

audioEle.addEventListener('timeupdate', () => {
    // console.log('timeupdate');
    prog = parseInt((audioEle.currentTime / audioEle.duration) * 100);
    // console.log(prog);
    myprgbar.value = prog;
})

myprgbar.addEventListener('change', () => {
    audioEle.currentTime = (myprgbar.value * audioEle.duration / 100);
})

function update() {
    document.getElementById('detoo').innerHTML = songs[songindex].songName;
}

prev.addEventListener('click', () => {
    if (songindex == 0)
        songindex = songs.length - 1;
    else
        songindex -= 1;
    audioEle.pause();
    audioEle.src = songs[songindex].filePath;
    update();
    audioEle.play();
    if(masterplay.classList.contains("fa-play-circle"))
        masterplay.classList.replace("fa-play-circle", "fa-pause-circle");
        document.getElementById("gif").style.opacity = 1;
        document.getElementById(preclick).classList.replace("fa-pause-circle", "fa-play-circle");
})

forw.addEventListener('click', () => {
    if (songindex == songs.length - 1)
        songindex = 0;
    else
        songindex += 1;
    audioEle.pause();
    audioEle.src = songs[songindex].filePath;
    update();
    audioEle.play();
    if(masterplay.classList.contains("fa-play-circle"))
        masterplay.classList.replace("fa-play-circle", "fa-pause-circle");
        document.getElementById("gif").style.opacity = 1;
    document.getElementById(preclick).classList.replace("fa-pause-circle", "fa-play-circle");
})