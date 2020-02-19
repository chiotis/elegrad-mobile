function main() {
  if (!window.WPLeafletMapPlugin) {
    console.log('no plugin found!')
    return
  }

  // iterate any of these: <code>maps</code>, <code>markers</code>, <code>markergroups</code>, <code>lines</code>, <code>circles</code>, <code>geojsons</code>
  var maps = window.WPLeafletMapPlugin.maps

  for (var i = 0, len = maps.length; i < len; i++) {
    var map = maps[i]
    map.whenReady(function() {
      var self = this;
      var realtime = L.realtime({
          url: 'https://wanderdrone.appspot.com/',
          crossOrigin: true,
          type: 'json'
        }, {
          interval: 1 * 300
        }).addTo(self);

      realtime.on('update', function () {
        // self.fitBounds(realtime.getBounds(), {maxZoom: 3});
      })
    })
  }
}

window.addEventListener('load', main)