import React from 'react';
import ListenButton from '../ListenButton';
import EpisodeSearch from '../EpisodeSearch';

const Navbar = () => {
  return (
    <nav className="nav-primary-container">
      <div className="nav-main-item" id="btn-nav-listen">
        <ListenButton />
        <div className="submenu">
          <EpisodeSearch />
        </div>
      </div>
    </nav>
  );
}

export default Navbar;
