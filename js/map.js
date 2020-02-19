var map;
var map_big;
DG.then(function () {
    map = DG.map('map', {
        center: [52.282839, 104.254349],
        zoom: 16,
        dragging : false,
        touchZoom: false,
        scrollWheelZoom: false,
        doubleClickZoom: false,
        boxZoom: false,
        geoclicker: false,
        zoomControl: false,
        fullscreenControl: false
    });
    map_big = DG.map('map_big', {
        center: [52.282839, 104.254349],
        zoom: 16,
        //dragging : false,
        touchZoom: false,
        scrollWheelZoom: false,
        //doubleClickZoom: false,
        //boxZoom: false,
        //geoclicker: false,
        //zoomControl: false,
        fullscreenControl: false
    });
    DG.marker([52.282839, 104.254349]).addTo(map);
    DG.marker([52.282839, 104.254349]).addTo(map_big);
});