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
    <section id="hero" class="hero section">

        <img src="assets/img/hero-bg-abstract.jpg" alt="">
  
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
              <h1>One Page Bootstrap Website Template</h1>
              <p>We are team of talented designers making websites with Bootstrap</p>
            </div>
          </div>
          <div class="text-center">
            <a href="#about" class="btn-get-started">Get Started</a>
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
