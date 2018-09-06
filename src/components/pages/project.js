import React, { Component, Fragment } from "react";
import { BrowserRouter, Route } from "react-router-dom";
import Banner from "../layouts/banner";
import ProjectImage from "../images/7.png";
import * as contentful from 'contentful'

var client = contentful.createClient({
  space: '1tqtqya8ol6q',
  accessToken: 'de8c7b87d35580d080643a3663694b44f60bc5f0298d5f1bd7ff1124f583bc8e'
})

const Project = () => {
  return (
    <Fragment>
      <Banner
        author="Bod Doe"
        authorImage={ProjectImage}
        bannerTitle="The Title of the banner"
        category="e-commerce . brand identity"
        image="https://images.unsplash.com/photo-1502810365585-56ffa361fdde?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fbcfd78af907820e7728624c407def4f&auto=format&fit=crop&w=934&q=80"
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

      <quote>
        "The Quote of awesomeness should go here but if not dont worry. The Quote of awesomeness should go here but if not dont worry. The Quote of awesomeness should go here but if not dont worryThe Quote of awesomeness should go here but if not dont worry"
      </quote>
    </Fragment>

  );
};

export default Project;
