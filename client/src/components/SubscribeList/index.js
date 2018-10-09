import React from 'react';
import subscriptions from './subscriptions';
import SubscriptionListItem from '../SubscriptionListItem';

const SubscribeList = () => {
  const subscribeItems = subscriptions.map((item, i) => {
    return (
      <SubscriptionListItem
        key={i}
        service={item} />
    );
  });

  return (
    <div className="subscribe-list icon-list-container">
      <ul>
        {subscribeItems}
      </ul>
    </div>
  );
}

export default SubscribeList;
