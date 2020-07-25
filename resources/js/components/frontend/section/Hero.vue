<template>
  <!--==========================
        HERO
  ============================-->
  <div class="jumbotron jumbotron-fluid bg-hero">
    <div class="container">
      <div class="row pt-5">
        <div class="col-lg-6 col-md-12">
          <div class="contenido-hero">
            <h1>Fundación Paola Andrea Velasquez Viva</h1>
            <h3>
              Diagnosticar a tiempo y hacer un tratamiento integral aumenta
              la probabilidad de cura,
              Juntos podemos ganarle la batalla al cancer.
            </h3>
            <a class="button" href="#">
              Contactanos
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="imagenes/img-hero.svg" alt="img-hero.svg"/>
        </div>
      </div>
    </div>
    <div class="wave"></div>
  </div>
</template>

<style lang="scss" scoped>
.jumbotron.bg-hero {
  min-height: 100vh;
  background: #63b8a7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right,rgba(99, 184, 167, 0.9), rgba(38, 76, 93, 0.8));  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, hsla(168, 37%, 55%, 0.9), rgba(38, 76, 93, 0.8)), url("../../../../../public/imagenes/bg-hero.jpg") no-repeat fixed; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background-position: center;
  background-size: cover;
  position: relative;
  overflow: hidden;
  h1 {
    color:  #ffffff;
    margin-bottom: 0;
  }
  h3 {
    color: #ffffff;
    margin: 35px 0;
  }

  .wave {
    width: 100%;
    height: 200px;
    background: url("../../../../../public/imagenes/wave.svg") no-repeat;
    background-size: cover;
    position: absolute;
    bottom: 0;
  }
  @media (max-width: 768px) {
    .contenido-hero {
      text-align: center;
      a {
        margin: auto;
      }
    }
    .wave {
      background-position: center bottom;
      background-size: contain;
    }
  }
}
</style>