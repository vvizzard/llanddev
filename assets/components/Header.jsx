import React, { Component } from 'react'
import { Link, withRouter } from "react-router-dom"
import logo from '../img/llanddev.png'

function Header(props) {
    return (
        <div className="navigation">
            <nav className="navbar navbar-expand-lg nav-llanddev bg-llanddev">
                <div className="container">
                    <Link className="navbar-brand" to="/">
                        <img src={logo} alt="llanddev"/>
                    </Link>
                    <button 
                        className="navbar-toggler" 
                        type="button" data-toggle="collapse" 
                        data-target="#navbarColor03" 
                        aria-controls="navbarColor03" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation"
                    >
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse">
                        <ul className="navbar-nav nav-right">
                            <li className="nav-item active">
                                <Link className="nav-link" to="/">Accueil
                                    <span className="sr-only">(current)</span>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to="/map">Carte</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to="/tableauDeBord">Tableau de bord</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to="/sujets">Sujet</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to="/about">A propos</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to="/detail">Nous contacter</Link>
                            </li>
                        </ul>
                        <select className="llanddev-header-right">
                            <option value="FR">FR</option>
                            <option value="FR">EN</option>
                            <option value="FR">MG</option>
                        </select>
                    </div>
                </div>
            </nav>
        </div>
    )
}

export default withRouter(Header);
