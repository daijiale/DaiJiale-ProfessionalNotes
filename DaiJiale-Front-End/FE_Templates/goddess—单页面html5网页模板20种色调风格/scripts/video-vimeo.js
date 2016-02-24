/**
 * Called once a vimeo player is loaded and ready to receive
 * commands. You can add events and make api calls only after this
 * function has been called.
 *
 * @param String $player_id — id of the iframe element firing the event. This is
 * useful when listening to multiple videos so you can identify which one fired
 * the event.
 */
function ready(player_id) {
    // Keep a reference to Froogaloop for this player
    var player = $f(player_id),

        playButton = document.getElementById('playButton'),
        pauseButton = document.getElementById('pauseButton'),
        muteButton = document.getElementById('muteButton'),
        soundButton = document.getElementById('soundButton'),
        unloadButton = document.getElementById('unloadButton');

    /**
     * Attach event listeners.
     *
     * If you're using a javascript framework like jQuery or Mootools
     * you'll probably use their addEvent method to add the click events.
     * Here we're just using the standard W3C addEventListener method. If
     * you need IE8 support, you'll need to use attachEvent for IE8 and
     * addEventListener for everything else (or just use jQuery or MooTools).
     */

    playButton.addEventListener('click', function() {
        player.api('play');
    });

    pauseButton.addEventListener('click', function() {
        player.api('pause');
    });

    unloadButton.addEventListener('click', function() {
        player.api('unload');
    });

    muteButton.addEventListener('click', function() {
        player.api('setVolume', 0);
    });

    soundButton.addEventListener('click', function() {
        player.api('setVolume', 0.5);
    });
}

window.addEventListener('load', function() {
    //Attach the ready event to the iframe
    $f(document.getElementById('player')).addEvent('ready', ready);
});