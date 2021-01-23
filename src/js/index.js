import "../scss/style.scss";

(function() {
    const html = document.querySelector("html");

    html.className = html.className.replace("no-js", "js");

    //
    document.addEventListener("DOMContentLoaded", function() {
        const targetVideo = document.querySelector(".video[autoplay]");

        if (targetVideo) {
            videoAutoplayInit(targetVideo);
        }
    });

    // Autoplaying video
    function videoAutoplayInit(targetVideo) {
        targetVideo.removeAttribute("controls");

        targetVideo.addEventListener("click", function(e) {
            targetVideo.muted = !targetVideo.muted;
            targetVideo.toggleAttribute("muted");
        });
    }
})();
