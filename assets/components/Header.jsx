import React, { Component } from 'react'
import { Link, withRouter } from "react-router-dom"

function Header(props) {
    return (
        <div className="navigation">
            <nav className="navbar navbar-expand-lg navbar-light bg-light">
                <div className="container">
                    <Link className="navbar-brand" to="/">
                        ILANDDEV
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
                                <Link className="navbar-brand" to="/">Accueil
                                    <span className="sr-only">(current)</span>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href="#">Services</a>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to="/map">Carte</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to="/detail">A propos</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    )
}

export default withRouter(Header);
