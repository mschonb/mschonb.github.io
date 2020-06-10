
let player;
let panStarted = false;

function onYouTubeIframeAPIReady() {
    var w = $(window).width();
    var h = $(window).height();
    console.log(w);
    player = new YT.Player('player', {
        width: w,
        height: h,
        playerVars:{
            'onReady': onPlayerReady,
            'controls': 0,
            'modestbranding': 1,
            'playsinline': 0,
            'rel': 0,
            'start': 15,
            'iv_load_policy': 3,
            'disablekb': 1,
            'autoplay': 1
        },
        videoId: 'cPkj2C-rl24',
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
}

// Start animation when video starts playing.
function onPlayerStateChange(event) {
    player.mute();
}

function onPlayerReady(event){
    player.mute();
    player.playVideo();
}

function panVideo() {
}
