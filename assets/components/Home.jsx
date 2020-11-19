import React, { Component } from 'react'
import { Link, withRouter } from "react-router-dom"
import { FormattedMessage } from "react-intl"
import Service from './Service'
import Materials from './Materials'
import Partners from './Partners'
import Footer from './Footer'
import land from '../img/llanddev_land.jpg'
import landscape from '../img/llanddev_landscape.gif'
import dev from '../img/llanddev_developement.gif'
import fire from '../img/llanddev_fire.jpg'
// import banniere from '../img/banniere.jpg'

export default class Home extends Component {
    render() {
        const services = [];
        const en = {
            land: "Land",
            landscape: "Landscape",
            dev: "Development",
            fire: "Fire monitoring"
        }
        const fr = {
            land: "Terre",
            landscape: "Paysage",
            dev: "Développement",
            fire: "Suivie de feu"
        }

        const mg = {
            land: "Tany",
            landscape: "Paysage",
            dev: "Développement",
            fire: "Fanarahana ny afo"
        }

        const serviceName = {en, fr, mg};

        services.push(<Service key={1} link={'/land'} img={land} name={serviceName[this.props.lgSelected].land} />)
        services.push(<Service key={2} link={'/landscape'} img={landscape} name={serviceName[this.props.lgSelected].landscape} />)
        services.push(<Service key={3} link={'/dev'} img={dev} name={serviceName[this.props.lgSelected].dev} />)
        services.push(<Service key={4} link={'/detail'} img={fire} name={serviceName[this.props.lgSelected].fire} />)

        return (
            <div>
                <div className="home-banniere">
                    {/* <img className="banniere" src={banniere} alt="Banniere"/> */}
                    <div className="banniere">
                        <div className="brown"></div>
                    </div>
                </div>
                <div className="content">
                    <section>
                        <div className="container white-bg disposition shadow">
                            <h1>
                                <FormattedMessage
                                    id="home_subject"
                                    defaultMessage="Sujet"
                                />
                            </h1>
                            <div className="row">
                                {services}
                            </div>
                        </div>
                    </section>
                    <section className="section-bg">
                        <div className="section-bg-opacity">
                            <div className="container white-bg disposition shadow">
                                <Materials />
                            </div>
                        </div>
                    </section>
                    <section>
                        <div className="container white-bg disposition shadow">
                            <Partners />
                        </div>
                    </section>
                    <Footer onClick={this.props.onClick} />
                </div>
            </div>
        )
    }
}
