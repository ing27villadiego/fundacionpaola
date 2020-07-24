<template>
  <div>
    <section class="seccion">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="text-center">Como Funcionamos</h2>
            <p>
              La Fundación Paola Andrea Velásquez Vivas realiza su trabajo en un esfuerzo familiar de la
              familia Velásquez Vivas acompañado por un staff de personas que en calidad de voluntarios
              brindan todo su saber profesional en diferente áreas: 
            </p>
           
            <ul class="items">
                <li>
                    <span>Medicina</span>
                </li>
                <li>
                    <span>Psicología</span>
                </li>
                <li>
                    <span>Pedagogía</span>
                </li>
                <li>
                    <span>Nutrición</span>
                </li>
                <li>
                    <span>Apoyo Jurídico</span>
                </li>
                <li>
                    <span>recreación y manualidades</span>
                </li>
            </ul>
            
            <p>
                logrando así que los programas ofrecidos
                tanto a los niños como a su familia llenen las expectativas propuestas desde su creación.
            </p>

          </div>
          <div class="col-lg-8">
            <svg
              class="back-bg"
              width="100%"
              viewBox="0 0 900 700"
              style="position:absolute; z-index: -1"
            >
              <defs>
                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                  <stop offset="0%" stop-color="#63b8a7" stop-opacity="1" />
                  <stop offset="100%" stop-color="#63b8a7" stop-opacity="1" />
                </linearGradient>
              </defs>
              <path
                fill-rule="evenodd"
                opacity="0.102"
                fill="url(#PSgrad_01)"
                d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"
              />
            </svg>
            <div class="row">
              <div class="col-lg-6">
                <div class="servicio">
                  <div class="img-servicio">
                    <img src="imagenes/paola-andrea-historia.jpg" alt class="imagen-responsive" />
                  </div>
                  <h3>Apoyo Psicológico</h3>
                  <p>
                    El objetivo primario de este programa es conformar estructuras de apoyo, comprensión y
                    pertenencia que faciliten el transito por la difícil etapa de la enfermedad.
                  </p>
                </div>
                <div class="servicio">
                  <div class="img-servicio">
                    <img src="imagenes/paola-andrea-historia.jpg" alt class="imagen-responsive" />
                  </div>
                  <h3>Programa de Asistencia Social</h3>
                  <p>
                    El objetivo de este programa es cubrir las necesidades puntuales
                    de los niños a lo largo del tratamiento, evitando demoras innecesarias y
                    buscando que el tratamiento resulte lo más eficaz posible.
                  </p>
                </div>
              </div>
              <div class="col-lg-6" style="margin-top:-50px">
                <div class="servicio">
                  <div class="img-servicio">
                    <img src="imagenes/paola-andrea-historia.jpg" alt class="imagen-responsive" />
                  </div>
                  <h3>Recreación Hospitalaria</h3>
                  <p>
                    Actividades desarrolladas para que los niños hospitalizados puedan tener espacios para distraerse y
                    hacer posible que se olviden por un rato de todos los procedimientos que les realizan.
                  </p>
                </div>
                <div class="servicio">
                  <div class="img-servicio">
                    <img src="imagenes/paola-andrea-historia.jpg" alt class="imagen-responsive" />
                  </div>
                  <h3>Programa Informativo Educativo</h3>
                  <p>
                    La información y educación de la familia sobre temas relativos al cáncer
                    puede ayudar a un mejor acompañamiento y contención del niño enfermo y disminuir
                    considerablemente los riesgos del paciente a lo largo del tratamiento.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" >
ul.items{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    background: url("../../../../../public/imagenes/items.svg") no-repeat;
    background-size: cover;
    background-position: center center;
    li {
        padding: 20px 10px;
        span{
            font-size: 20px;
        }
    }
}
.servicio {
  text-align: center;
  background: #fff;
  margin: 30px 5px;
  padding: 15px;
  border-radius: 10px;
  box-shadow: var(--box-shadow-cards);
}
</style>