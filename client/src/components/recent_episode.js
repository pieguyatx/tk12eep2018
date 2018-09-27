import React from 'react';


const RecentEpisode = ({data}) => {
 return (
  <div className="border">
    <ul>
      <li>{data.title}</li>
      <li>{data.guests}</li>
    </ul>
  </div>
 );
}

export default RecentEpisode;