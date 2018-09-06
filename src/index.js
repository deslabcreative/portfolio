import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from "./components/App";
import registerServiceWorker from './registerServiceWorker';
import * as contentful from 'contentful'

var client = contentful.createClient({
    space: '1tqtqya8ol6q',
    accessToken: 'de8c7b87d35580d080643a3663694b44f60bc5f0298d5f1bd7ff1124f583bc8e'
})

client.getEntries().then(entries => {
    entries.items.forEach(entry => {
      if(entry.fields) {
        console.log(entry.fields)
      }
    })
  })

ReactDOM.render(<App />, document.getElementById('root'));
registerServiceWorker();
