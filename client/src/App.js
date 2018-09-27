import React, { Component } from 'react';
//import logo from './logo.svg';
import './App.css';
import RecentEpisodeContainer from "../src/components/recent_episode_container";


import data from "./dummy_data";

class App extends Component {
  constructor(props){
    super(props);

    this.state = {
      data
    }
  }
    render(){
      return (
        <div className="App">
              {console.log(data)}

          <RecentEpisodeContainer data={this.state.data}/>
        </div>
      );
    }
}

export default App;
