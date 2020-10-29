/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import { Header, Home, Detail, Carte } from './components'

ReactDOM.render (
    <Router>
        <Header />
        <div className="container">
            <Switch>
                <Route path="/" exact component={() => <Home />} />
                <Route path="/detail" exact component={() => <Detail />} />
                <Route path="/map" exact component={() => <Carte />} />
            </Switch>
        </div>
    </Router>
    , document.getElementById('root')
);