<template>
    <nav class="navbar navbar-expand-lg shadow-sm bg-body-tertiary rounded sticky-top">
        <div class="container-fluid">
            <img src="/assets/img/logo SNS HD.png" alt="Bootstrap" width="200px" height="64px" class="my-2" style="margin-left: 56px;">
            <div class="collapse navbar-collapse d-flex justify-content-end mx-4" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link mx-4 text-info" aria-current="page" href="#">Home</a>
                    <a class="nav-link mx-4 text-info" href="#">About Us</a>
                    <a class="nav-link mx-4 text-info" href="#">Career</a>
                    <a class="nav-link mx-4 text-info" aria-disabled="true">Features</a>
                </div>
            </div>
        </div>
    </nav>
    <section id="hero" class="hero">

        <img src="assets/img/hero-bg-abstract1.png" class="color-section" alt="background">
  
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 text-center">
              <h1 style="font-size: 90px; color: navy;" class="mb-5"><b>One Step Closer To</b></h1>
              <h1 style="font-size: 90px;" class="gradient-text"><b>Your Dream Job</b></h1>
              <p style="margin-top: 80px;">Let’s Us Help You Find A Job That Suits You The Best</p>
            </div>
          </div>
          <div class="text-center">
            <a href="#about" class="btn-get-started" style="text-decoration:none;">Get Started</a>
            <a href="#" class="ms-5 btn-get-ourstory" style="text-decoration:none;">
              <i class="bi bi-play-fill" style="font-size: 16px;"></i> Our Story</a>
          </div>
          <div class="text-center">
            <div class="my-4"><h1>500</h1></div>
          </div>
  
          <div class="row gy-4 mt-5">
            <div class="col-md-6 col-lg-3">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div><!--End Icon Box -->
  
            <div class="col-md-6 col-lg-3">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              </div>
            </div><!--End Icon Box -->
  
            <div class="col-md-6 col-lg-3">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </div><!--End Icon Box -->
  
            <div class="col-md-6 col-lg-3">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div><!--End Icon Box -->
  
          </div>
        </div>
  
      </section>
</template>

<script>
export default {
    name: 'PortfolioComponent',
    data() {
        return {
        };
    },
};
</script>
