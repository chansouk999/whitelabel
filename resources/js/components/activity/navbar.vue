<template>
  <div>
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">
            <strong>Material Lanfdfdsfding</strong>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarContent"
            aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
            <a
              class="btn btn-primary btn-rounded my-0"
              href="https://templateflip.com/templates/material-landing"
              target="_blank"
            >Download</a>
          </div>
        </div>
      </nav>
      <!-- Intro Section-->
      <section class="view hm-gradient" id="intro">
        <div class="full-bg-img d-flex align-items-center">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-md-10 col-lg-6 text-center text-md-left margins">
                <div class="white-text">
                  <div class="wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-bold mt-sm-5">Your Success is Our Mission.</h1>
                    <div class="h6">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt
                      dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae
                      iste.
                    </div>
                  </div>
                  <br>
                  <div class="wow fadeInLeft" data-wow-delay="0.3s">
                    <a
                      class="btn btn-white dark-grey-text font-bold ml-0"
                      href="https://www.youtube.com/watch?v=60ItHLz5WEA"
                      target="_blank"
                    >
                      <i class="fa fa-play mr-1"></i> View Demo
                    </a>
                    <a class="btn btn-outline-white" href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
  </div>
</template>
<script>
export default {
  data() {
    return {
      welcome: "/"
    };
  },
  components: {}
};
</script>
<style scoped>
</style>

