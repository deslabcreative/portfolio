import React, { Component, Fragment } from "react";
import styled from "styled-components";

export default class extends Component {
  render() {
    return (
      <Fragment>
        <section className="back">
          <a href={this.props.url}><h3>Back</h3></a>
        </section>
      </Fragment>
    );
  }
}
