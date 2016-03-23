var cbp<a href="http://www.jqueryscript.net/tags.php?/Animated/">Animated</a>Header = (function() {
 
    var docElem = document.documentElement,
        header = document.querySelector( '.cbp-af-header' ),
        did<a href="http://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a> = false,
        changeHeaderOn = 300;
 
    function init() {
        window.addEventListener( 'scroll', function( event ) {
            if( !didScroll ) {
                didScroll = true;
                setTimeout( scrollPage, 250 );
            }
        }, false );
    }
 
    function scrollPage() {
        var sy = scrollY();
        if ( sy >= changeHeaderOn ) {
            classie.add( header, 'cbp-af-header-shrink' );
        }
        else {
            classie.remove( header, 'cbp-af-header-shrink' );
        }
        didScroll = false;
    }
 
    function scrollY() {
        return window.pageYOffset || docElem.scrollTop;
    }
 
    init();
 
})();