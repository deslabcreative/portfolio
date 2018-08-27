import React, { Component, Fragment } from "react";
import styled from "styled-components";

export default class extends Component {
  render() {
    const style = {
      backgroundImage: "url(" + this.props.splashImage + ")",
      backgroundSize: "cover",
      backgroundPosition: "center"
    };
    return (
      <Fragment>
        <section className="splash" style={style} followButton={true}>
            <span className="bannerDesc">
              <h3 >{this.props.bannerTitle}</h3>
              <h6>{this.props.category}</h6>
            </span>
        </section>

      </Fragment>
    );
  }
}
