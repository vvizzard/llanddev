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
import { Header, Home, Detail, Carte, EnCours, Sujets, About } from './components'

ReactDOM.render (
    <Router>
        <Header />
        <div className="">
            <Switch>
                <Route path="/" exact component={() => <Home />} />
                <Route path="/tableauDeBord" exact component={() => <EnCours />} />
                <Route path="/sujets" exact component={() => <Sujets />} />
                <Route path="/detail" exact component={() => <Detail />} />
                <Route path="/map" exact component={() => <Carte />} />
                <Route path="/about" exact component={() => <About />} />
            </Switch>
        </div>
    </Router>
    , document.getElementById('root')
);