import React, {Component } from 'react';

class Player extends React {


 render() {
  return (
   <div className="main-player">
     <div className="left">
      <ul>
        <li>About the Show</li>
        <li>Support</li>
        <li>News/Newsletter</li>
        <li>Connect</li>
      </ul>
     </div>
     <div className="right">
      <ul>
       <li>subscribe</li>
       <li>playlists</li>
       <li>episode search</li>
      </ul>
     </div>
   </div>
  );
 }
}