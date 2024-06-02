mapboxgl.accessToken = "pk.eyJ1IjoiZ2VvcmdlczAwNiIsImEiOiJjbHd3cmdpaXQxNndoMmpxem02ZXRweHpnIn0.kNmUEDhpZPCN5jIZeJBPvw";

// Fonction pour configurer la carte
function setupMap(center) {
  const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: center,
    zoom: 15
  });

  const nav = new mapboxgl.NavigationControl();
  map.addControl(nav);

  const directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
  });

  map.addControl(directions, "top-left");

  const marker = new mapboxgl.Marker({
    color: "#0080ff" // couleur bleue pour le marqueur
  })
    .setLngLat(center)
    .addTo(map);

  document.getElementById('current-location').addEventListener('click', () => {
    navigator.geolocation.getCurrentPosition((position) => {
      const userLocation = [position.coords.longitude, position.coords.latitude];
      map.flyTo({
        center: userLocation,
        essential: true // Cette animation est considérée comme essentielle
      });
      marker.setLngLat(userLocation);
    }, () => {
      alert('Impossible d\'obtenir votre position actuelle.');
    }, {
      enableHighAccuracy: true
    });
  });

  document.getElementById('settings').addEventListener('click', () => {
    window.location.href = '../parametres/parametres.html'; // Remplacez par le chemin de votre page locale
  });
}

// Obtenir la position actuelle et configurer la carte
navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
  enableHighAccuracy: true
});

function successLocation(position) {
  setupMap([position.coords.longitude, position.coords.latitude]);
}

function errorLocation() {
  setupMap([-2.24, 53.48]);
}
