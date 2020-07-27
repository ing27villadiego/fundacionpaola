<template>
  <section class="seccion bg-blog aniview" data-av-animation="fadeInUp">
    <div class="container">
      <div class="row seccion">
        <div class="col-lg-12">
          <div class="text-center text-white">
            <h2>Conoce Nuestros Eventos y Noticias</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, saepe.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <figure class="imghvr-hinge-down">
            <img src="imagenes/blog-1.jpg" alt="example-image" />
            <figcaption>
              <h3>Día mundial del cáncer infantil</h3>
              <p>Desde el año 2013 la Fundación se ha vinculado a esta conmemoración que se lleva a cabo a nivel mundial.</p>
              <a href="#" class="button">
                Leer más
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </a>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-4">
          <figure class="imghvr-hinge-down">
            <img src="imagenes/blog-2.jpg" alt="example-image" />
            <figcaption>
              <h3>Fiesta Roja</h3>
              <p>Septiembre es un mes lleno de Amor y Amistad, por eso en septiembre del 2013 se organizó la primera fiesta roja para recaudar fondos para la fundación.</p>
              <a href="#" class="button">
                Leer más
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </a>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-4">
          <figure class="imghvr-hinge-down">
            <img src="imagenes/blog-3.jpg" alt="example-image" />
            <figcaption>
              <h3>El Banquete</h3>
              <p>
                El 31 de octubre del 2005 se realizó el primer banquete NIÑOS UNIDOS POR LA VIDA; un evento en el que
                los niños Barranquilleros fueron los protagonistas y benefactores.
              </p>
              <a href="#" class="button">
                Leer más
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </a>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
.bg-blog {
    padding-top: 20px;;
min-height: 80vh;
  background: url("../../../../../public/imagenes/bg-blog.svg") no-repeat fixed;
  background-size: cover;
  background-position: center center;
}
figure{
    margin-bottom: 20px;
}
[class^="imghvr-"],
[class*=" imghvr-"] {
  background-color: var(--color-fundacion-principal-dark);
  figcaption {
    background-color: var(--color-fundacion-principal);
  }
  a {
    position: relative;
  }
}
</style>