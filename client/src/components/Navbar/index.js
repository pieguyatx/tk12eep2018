import React from 'react';
import ListenButton from '../ListenButton';

const Navbar = () => {
  return (
    <nav className='nav-primary-container'>
      <div className="nav-main-item" id="btn-nav-listen">
        <ListenButton />
      </div>
    </nav>
  );
}

export default Navbar;
