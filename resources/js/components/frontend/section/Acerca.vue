<template>
  <!--==========================
        ACERCA DE
  ============================-->
  <section class="seccion aniview" data-av-animation="fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="img-historia">
            <svg
              class="back-bg"
              width="100%"
              viewBox="0 0 900 700"
              style="position:absolute; z-index: -1"
            >
              <defs>
                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                  <stop offset="0%" stop-color="rgba(99, 184, 167)" stop-opacity="1" />
                  <stop offset="100%" stop-color="rgba(99, 184, 167)" stop-opacity="1" />
                </linearGradient>
              </defs>
              <path
                fill-rule="evenodd"
                opacity="0.5"
                fill="url(#PSgrad_01)"
                d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"
              />
            </svg>

            <svg width="100%" viewBox="0 0 700 500">
              <clipPath id="clip-path">
                <path
                  d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"
                />
              </clipPath>
              <!-- xlink:href for modern browsers, src for IE8- -->
              <image
                clip-path="url(#clip-path)"
                xlink:href="imagenes/paola-andrea-historia.jpg"
                width="100%"
                height="100%"
                class="svg__image"
              />
            </svg>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="acerca-de">
            <h2 class="text-center">Conoce Nuestra Historia</h2>
            <p>
              La historia de la Fundación Paola Andrea Velásquez Vivas se inicia el 6 de Septiembre de 1997,
              con el nacimiento de Paola Andrea, la cual cuatro años después es diagnosticada con un tumor cerebral
              generando un profundo dolor en sus padres quienes siempre lucharon por la vida de su hija sometiéndolas
              a los tratamientos que requería, aunque tiempo después estos resultaron fallidos.
            </p>
            <p>
              Desde el momento en el que ella viene al mundo trae consigo la
              semilla que cuatro años después siembra en nosotros, teniendo en cuenta
              que ella siempre fue sinónimo de alegría y felicidad el día 6 de Septiembre de 2002
              la Fundación Paola Andrea Velásquez Vivas abre sus puertas esperando que desde el lugar
              privilegiado donde ella se encuentre extienda una mano amiga para ayudar a otros niños que como ella ,
              sufran de enfermedades Hemato-oncológicas y los llene de fe y de esperanza, pero sobre todo, les permita
              obtener una mejor calidad de vida y mejor pronóstico en su tratamiento.
            </p>
            <a class="button" href="#">
              Sobre nosotros
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@media (max-width: 768px) {
  .img-historia {
    margin-bottom: 50px;
  }
  .acerca-de {
    a {
      margin: auto;
    }
  }
}
</style>