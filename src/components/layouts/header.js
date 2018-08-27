import React, { Component, Fragment } from "react";

export default class extends Component {
  render() {
    return (
      <Fragment>
        <section className="header">
          <a href="../../"><img className="siteName" src={this.props.headerTitle} /></a>
          <h1 className="navRight"> <a>Work</a><a>Clients</a><a>Contact</a></h1>
        </section>
      </Fragment>
    );
  }
}
