import React from 'react';
import ListenButton from '../ListenButton';
import EpisodeSearch from '../EpisodeSearch';
import SubscribeList from '../SubscribeList';
import AboutButton from '../AboutButton';
import Tagline from '../Tagline';
import SocialList from '../SocialList';

const Navbar = () => {
  return (
    <nav className="nav-primary-container">
      <div className="nav-listen nav-item-container" id="nav-listen">
        <ListenButton />
        <div className="submenu">
          <EpisodeSearch />
          <SubscribeList />
        </div>
      </div>
      <div className="nav-about nav-item-container" id="nav-about">
        <AboutButton />
        <div className="submenu">
          <Tagline />
          <SocialList />
        </div>
      </div>
    </nav>
  );
}

export default Navbar;
