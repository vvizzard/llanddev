import React, { Component } from 'react'
import { Map, TileLayer, Marker, Popup } from 'react-leaflet'
import { Icon } from "leaflet"

export default function Carte() {
  const markers = [];
  for(let i = 0; i < 2; i++) {
    let first = 46.7 + i;
    let second = -77.98 - i;
    markers.push(<Marker key={'marker_'+i} position={[first, second]}  />);
  }
  return (
    <Map center={[45.4, -75.7]} zoom={12}>
      <TileLayer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
        attribution='&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
      />
      {markers}
    </Map>
  );
}