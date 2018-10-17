import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Header from './components/Header'
import registerServiceWorker from './registerServiceWorker';

class App extends Component {
  render() {
    return (
      <Header />
    );
  }
}

ReactDOM.render(<App />, document.getElementById('root'));
registerServiceWorker();
