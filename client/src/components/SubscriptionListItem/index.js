import React from 'react';

const SubscriptionListItem = ({service}) => {
  return (
    <li>
      <a href={service.link} title={service.title} target="_blank">
        <img src={service.image} alt={service.alt} />
      </a>
    </li>
  );
}

export default SubscriptionListItem;
