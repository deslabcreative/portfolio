import React, { Component, Fragment } from "react";
import { BrowserRouter, Route } from "react-router-dom";
import Banner from "../layouts/banner";
import Footer from "../layouts/footer";
import Back from "../layouts/back";
import Splash from "../layouts/splash";
import Montage from "../layouts/montage";


const Project = () => {
  return (
    <Fragment>
      <Splash bannerTitle="Deslab Creative" category="Deslab Creative"

      />

      <div class="intro">
  			<p class="desc">
        We are revolutionising your identity.<br />
        From aspects such as web, graphic design, user interfaces, social media
        and more; we are able to create entire solutions to get you off the
        ground running or modernise an exisiting identity.
        blah
  			</p>
  		</div>
      <Banner
        url="/project"
        author="Bod Doe"
        authorImage="http://www.deslab.co.nz/images/katesmith.jpg"
        bannerTitle="Kate Smith"
        category="Brand Identity . Business Cards . Logo"
      />
      <Montage
        imageOne="https://images.unsplash.com/photo-1502810365585-56ffa361fdde?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fbcfd78af907820e7728624c407def4f&auto=format&fit=crop&w=934&q=80"
        imageTwo="http://www.deslab.co.nz/installit/featured.jpg"
        imageThree="http://www.deslab.co.nz/images/futurebridges.jpg"
        imageFour="http://www.deslab.co.nz/images/no6.jpg"
        imageFive="http://www.deslab.co.nz/images/katesmith.jpg"
        imageSix="http://www.deslab.co.nz/images/context.jpg"
        imageSeven="http://www.deslab.co.nz/images/mobile.jpg"
        imageEight="http://www.deslab.co.nz/images/CheckIn.jpg"
        imageNine="http://www.deslab.co.nz/images/suggestions-mockup.jpg"
        imageTen="http://www.deslab.co.nz/images/Mid.jpg"
        imageEleven="http://www.deslab.co.nz/images/iphonex.jpg"
        imageTwelve="http://www.deslab.co.nz/images/JS_portfolio.jpg"
        imageThirteen="http://www.deslab.co.nz/images/no6.jpg"
        imageFourteen="http://www.deslab.co.nz/images/Footer.jpg"
        imageFifteen="http://www.deslab.co.nz/images/Mockup-three.jpg"

      />



    </Fragment>

  );
};

export default Project;
