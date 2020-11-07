import React, { Component } from 'react'
import { Link, withRouter } from "react-router-dom"

function Footer(props) {
    return (
        <footer className="footer">
            <div className="container disposition shadow">
                <div className="row">
                    <div className="col-md-4">
                        <div>
                            <span>Copyright © - llanddev 2020</span>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <span>Liens</span>
                        <a>Nous contacter</a>
                        <a>A propos</a>
                    </div>
                    <div className="col-md-4">
                        <span>Langues</span>
                        <br/>
                        <a className="lang-a">Malagasy</a>
                        <a className="lang-a">Français</a>
                        <a className="lang-a">English</a>
                    </div>
                </div>
            </div>
        </footer>
    )
}

export default withRouter(Footer);
