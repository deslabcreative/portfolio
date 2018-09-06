import React, { Component, Fragment } from "react";

export default class extends Component {
  render() {
    return (
      <Fragment>
        <section className="header">
          <a href="../../"><img className="siteName" src={this.props.headerTitle} /></a>
          <nav className="navRight"> <a href="/work">Work</a><a href="/clients">Clients</a><a href="/contact">Contact</a></nav>
        </section>
      </Fragment>
    );
  }
}
