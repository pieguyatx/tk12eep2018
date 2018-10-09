import React from 'react';
import ListenButton from '../ListenButton';
import EpisodeSearch from '../EpisodeSearch';
import SubscribeList from '../SubscribeList';

const Navbar = () => {
  return (
    <nav className="nav-primary-container">
      <div className="nav-listen nav-item-container" id="nav-listen">
        <ListenButton />
        <div className="submenu">
          <EpisodeSearch />
          <SubscribeList />
        </div>
        <div className="nav-about nav-item-container" id="nav-about">
          
        </div>
      </div>
    </nav>
  );
}

export default Navbar;
