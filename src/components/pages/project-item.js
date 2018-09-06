import promise from 'redux-promise';
const createStoreWithMiddleware = applyMiddleware(promise)(createStore);