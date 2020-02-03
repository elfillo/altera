var map;
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
    DG.marker([52.282839, 104.254349]).addTo(map);
});