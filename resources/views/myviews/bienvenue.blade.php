<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Example</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url('CSS/bienvenue.css')}}" />
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Brand</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header Section -->
    <header class="jumbotron jumbotron-fluid text-center" id="header">
      <div class="container">
        <h1 class="display-4">Welcome to Our Website</h1>
        <p class="lead">We provide excellent services to our clients.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>About Us</h2>
            <p class="lead">
              We are a company dedicated to providing the best service possible.
              Our team is made up of experienced professionals who are
              passionate about what they do.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Affichage des notes</h5>
                <p class="card-text">Description of service 1.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Demende de documents</h5>
                <p class="card-text">Description of service 2.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Service 3</h5>
                <p class="card-text">Description of service 3.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Contact Us</h2>
            <p class="lead">
              Feel free to reach out to us through the form below.
            </p>
            <form>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Your Name"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Your Email"
                />
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  id="message"
                  rows="4"
                  placeholder="Your Message"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">
                Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
