import React, { Component, Fragment } from "react";
import { BrowserRouter, Route } from "react-router-dom";
import Project from "./project";

const Project = () => {
  return (
    <Fragment>
      <Banner
        author="Bod Doe"
        authorImage="https://images.unsplash.com/photo-1502810365585-56ffa361fdde?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fbcfd78af907820e7728624c407def4f&auto=format&fit=crop&w=934&q=80"
        bannerTitle="The Title of the banner"
        image="https://images.unsplash.com/photo-1502810365585-56ffa361fdde?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fbcfd78af907820e7728624c407def4f&auto=format&fit=crop&w=934&q=80"
      />
    </Fragment>

  );
};

export default Project;
