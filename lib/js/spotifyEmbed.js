window.onSpotifyIframeApiReady = (IFrameAPI) => {
    let element = document.getElementById("playlist-embed-spotify-1");
    let options = {
        uri: "spotify:playlist/6sXVIk2Lw3JMxpS9Xa4sMx",
    };
    let callback = (EmbedController) => {};
    IFrameAPI.createController(element, options, callback);
};

