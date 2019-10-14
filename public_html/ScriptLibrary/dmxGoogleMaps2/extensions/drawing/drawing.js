/*
 DMXzone Google Maps Drawing Add-on
 Version: 1.0.0
 (c) 2012 DMXzone.com
 @build 17-07-2012 23:41:28
*/
function dmxGoogleMaps_drawingLoad(f,g){if(g){var j=g.gmap;if(j&&(g.shapes=[],f||(f=tempSave),f))for(var i=0;i<f.length;i++){var d=f[i],a=d.options,b={fillColor:a.fillColor,fillOpacity:a.fillOpacity,strokeColor:a.strokeColor,strokeOpacity:a.strokeOpacity,strokeWeight:a.strokeWeight},c;switch(d.type){case "polyline":for(var d=[],a=a.path,e=0;e<a.length;e++)d.push(new google.maps.LatLng(a[e].lat,a[e].lng));b.path=d;c=new google.maps.Polyline(b);break;case "rectangle":b.bounds=new google.maps.LatLngBounds(new google.maps.LatLng(a.bounds.sw.lat,
a.bounds.sw.lng),new google.maps.LatLng(a.bounds.ne.lat,a.bounds.ne.lng));c=new google.maps.Rectangle(b);break;case "circle":b.center=new google.maps.LatLng(a.center.lat,a.center.lng);b.radius=a.radius;c=new google.maps.Circle(b);break;case "polygon":c=[];for(var k=a.paths,e=0;e<k.length;e++){for(var d=[],a=k[e],h=0;h<a.length;h++)d.push(new google.maps.LatLng(a[h].lat,a[h].lng));c.push(d)}b.paths=c;c=new google.maps.Polygon(b)}c.setMap(j);g.shapes.push(c)}}};
