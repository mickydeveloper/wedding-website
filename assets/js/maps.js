/* The variables for the map init the styling of the map and the icon definition*/
var mapStyles = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}];
var zoom = 14;
var scrollwheel = false;

/* We take all the init maps functions and pass them to the function which will be used as callback for the google maps api link */
function initMaps() {
    initMapChurch();
    initMapVilla();
}

function initMapChurch() {
    var mapDiv = document.getElementById('mapChurch');
    var mapChurch = new google.maps.Map(mapDiv, {
        center: {lat: 45.39828, lng: 11.94314},
        zoom: zoom,
        scrollwheel: scrollwheel,
        styles: mapStyles
    });
    var marker = new google.maps.Marker({
        position: {lat: 45.39828, lng: 11.94314},
        icon: 'https://wp-blog-dir.s3.amazonaws.com/uploads/sites/31/2017/06/church.png',
        map: mapChurch
    });
}

function initMapVilla() {
    var mapDiv = document.getElementById('mapVilla');
    var mapVilla = new google.maps.Map(mapDiv, {
        center: {lat: 45.1532333, lng: 11.7193155},
        zoom: zoom,
        scrollwheel: scrollwheel,
        styles: mapStyles
    });
    var marker = new google.maps.Marker({
        position: {lat: 45.1532333, lng: 11.7193155},
        icon: 'https://wp-blog-dir.s3.amazonaws.com/uploads/sites/31/2017/06/disneyland-castle.png',
        map: mapVilla
    });

}