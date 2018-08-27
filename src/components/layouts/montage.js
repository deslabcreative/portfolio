import React, { Component, Fragment } from "react";
import styled from "styled-components";

export default class extends Component {
  render() {
    const style = {
      backgroundImage: "url(" + this.props.image + ")",
      backgroundSize: "cover",
      backgroundPosition: "center"
    };
    return (
      <Fragment>
        <section className="banner" followButton={true}>
          <div className="montageDull">
            <span className="montageDesc">
              <h3>View all our projects</h3>
            </span>
          </div>
          <div className="montage">
              <div>
                <img src={this.props.imageOne} alt="" />
                <img src={this.props.imageNine} alt="" />
                <img src={this.props.imageTwo} alt="" />
                <img src={this.props.imageTen} alt="" />
                <img src={this.props.imageThree} alt="" />
                <img src={this.props.imageEleven} alt="" />
                <img src={this.props.imageFour} alt="" />
              </div>

              <div>
                <img src={this.props.imageTwo} alt="" />
                <img src={this.props.imageTen} alt="" />
                <img src={this.props.imageThree} alt="" />
                <img src={this.props.imageEleven} alt="" />
                <img src={this.props.imageFour} alt="" />
                <img src={this.props.imageTwelve} alt="" />
                <img src={this.props.imageFive} alt="" />
              </div>

              <div>
                <img src={this.props.imageThree} alt="" />
                <img src={this.props.imageEleven} alt="" />
                <img src={this.props.imageFour} alt="" />
                <img src={this.props.imageTwelve} alt="" />
                <img src={this.props.imageFive} alt="" />
                <img src={this.props.imageThirteen} alt="" />
                <img src={this.props.imageSix} alt="" />
              </div>

              <div>
                <img src={this.props.imageFour} alt="" />
                <img src={this.props.imageTwelve} alt="" />
                <img src={this.props.imageFive} alt="" />
                <img src={this.props.imageThirteen} alt="" />
                <img src={this.props.imageSix} alt="" />
                <img src={this.props.imageFourteen} alt="" />
                <img src={this.props.imageSeven} alt="" />
              </div>

              <div>
                <img src={this.props.imageFive} alt="" />
                <img src={this.props.imageThirteen} alt="" />
                <img src={this.props.imageSix} alt="" />
                <img src={this.props.imageFourteen} alt="" />
                <img src={this.props.imageSeven} alt="" />
                <img src={this.props.imageFifteen} alt="" />
                <img src={this.props.imageEight} alt="" />
              </div>

              <div>
                <img src={this.props.imageSix} alt="" />
                <img src={this.props.imageFourteen} alt="" />
                <img src={this.props.imageSeven} alt="" />
                <img src={this.props.imageFifteen} alt="" />
                <img src={this.props.imageEight} alt="" />
                <img src={this.props.imageOne} alt="" />
                <img src={this.props.imageNine} alt="" />
              </div>

              <div>
                <img src={this.props.imageSeven} alt="" />
                <img src={this.props.imageFifteen} alt="" />
                <img src={this.props.imageEight} alt="" />
                <img src={this.props.imageOne} alt="" />
                <img src={this.props.imageNine} alt="" />
                <img src={this.props.imageTwo} alt="" />
                <img src={this.props.imageTen} alt="" />
              </div>

              <div>
                <img src={this.props.imageEight} alt="" />
                <img src={this.props.imageOne} alt="" />
                <img src={this.props.imageNine} alt="" />
                <img src={this.props.imageTwo} alt="" />
                <img src={this.props.imageTen} alt="" />
                <img src={this.props.imageThree} alt="" />
                <img src={this.props.imageEleven} alt="" />

              </div>


          </div>
        </section>

      </Fragment>
    );
  }
}
