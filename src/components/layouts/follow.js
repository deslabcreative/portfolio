import React, { Component, Fragment } from "react";
import styled from "styled-components";

export default class extends Component {
  render() {
    const style = {
      backgroundImage: "url(" + this.props.authorImage + ")",
      backgroundSize: "cover",
      backgroundPosition: "center"
    };
    return (
      <Fragment>
        <section className="authorInfo">
          <div className="authorImage" style={style} />
          <h3 class="authorName">{this.props.author}</h3>
        </section>
      </Fragment>
    );
  }
}
