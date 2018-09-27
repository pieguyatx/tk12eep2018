import React from 'react';
import RecentEpisode from "./recent_episode";
const RecentEpisodeContainer  = (props) => {
 const podcastInfo = props.data.map((data, index) => {
  return <RecentEpisode 
           key={index}
           data={data}
         />
 })

 return (
  <div>
   {podcastInfo}
  </div>
 )
}

export default RecentEpisodeContainer;