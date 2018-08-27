import React, { Component, Fragment } from "react";
import { BrowserRouter, Route } from "react-router-dom";

import Banner from "./layouts/banner";
import Footer from "./layouts/footer";
import Topper from "./layouts/header";
import Article from "./pages/project";
import Home from "./pages/home";
import Logo from "./images/logo-white.png";




export default class extends Component {
  render() {
    return (
      <Fragment>
        <Topper headerTitle={Logo}/>
        <BrowserRouter>
        <div>
          <Route exact path="/" component={Home}/>
          <Route path={"/project"} component={Article} />
          <Route path={"/home"} component={Home} />
          </div>
        </BrowserRouter>
        <Footer />
      </Fragment>
    );
  }
}
