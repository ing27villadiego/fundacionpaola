<template>
  <div>
    <section class="seccion bg-servicios">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 como-funcionamos">
            <h2 class="text-center">Como Funcionamos</h2>
            <p>
              La Fundación Paola Andrea Velásquez Vivas realiza su trabajo en un esfuerzo familiar de la
              familia Velásquez Vivas acompañado por un staff de personas que en calidad de voluntarios
              brindan todo su saber profesional en diferente áreas:
            </p>
            <ul class="list-unstyled">
              <li class="media my-4">
                <i class="fa fa-medkit" aria-hidden="true"></i>
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Medicina</h5>
                </div>
              </li>
              <li class="media my-4">
                <i class="fa fa-users" aria-hidden="true"></i>
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Psicología</h5>
                </div>
              </li>
              <li class="media my-4">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Pedagogía</h5>
                </div>
              </li>
              <li class="media my-4">
                <i class="fa fa-cutlery" aria-hidden="true"></i>
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Nutrición</h5>
                </div>
              </li>
              <li class="media my-4">
                <i class="fa fa-gavel" aria-hidden="true"></i>
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Apoyo Jurídico</h5>
                </div>
              </li>
              <li class="media my-4">
                <i class="fa fa-futbol-o" aria-hidden="true"></i>
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Recreación y Manualidades</h5>
                </div>
              </li>
            </ul>
            <p>
              logrando así que los programas ofrecidos
              tanto a los niños como a su familia llenen las expectativas propuestas desde su creación.
            </p>
            <a class="button" href="#">
              nuestros servicios
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6">
                <div class="servicio">
                  <div class="img-servicio">
                    <img src="imagenes/apoyo-psicologico.svg" alt class="imagen-responsive" />
                  </div>
                  <h3>Apoyo Psicológico</h3>
                  <p>
                    El objetivo primario de este programa es conformar estructuras de apoyo, comprensión y
                    pertenencia que faciliten el transito por la difícil etapa de la enfermedad.
                  </p>
                </div>
                <div class="servicio">
                  <div class="img-servicio">
                    <img src="imagenes/asistencia-social.svg" alt class="imagen-responsive" />
                  </div>
                  <h3>Programa de Asistencia Social</h3>
                  <p>
                    El objetivo de este programa es cubrir las necesidades puntuales
                    de los niños a lo largo del tratamiento, evitando demoras innecesarias y
                    buscando que el tratamiento resulte lo más eficaz posible.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 margen-arriba">
                <div class="servicio">
                  <div class="img-servicio">
                    <img src="imagenes/recreacion.svg" alt class="imagen-responsive" />
                  </div>
                  <h3>Recreación Hospitalaria</h3>
                  <p>
                    Actividades desarrolladas para que los niños hospitalizados puedan tener espacios para distraerse y
                    hacer posible que se olviden por un rato de todos los procedimientos que les realizan.
                  </p>
                </div>
                <div class="servicio">
                  <div class="img-servicio">
                    <img src="imagenes/educacion-informativa.svg" alt class="imagen-responsive" />
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
ul.list-unstyled .media {
  align-items: baseline;
  i {
    font-size: 26px;
    margin-right: 10px;
    color: var(--color-fundacion-principal);
  }
}
.bg-servicios {
  background: url("../../../../../public/imagenes/bg-servicios.svg") no-repeat;
  background-size: 80%;
  background-position: center right;
}
.margen-arriba {
  margin-top: -50px;
}
.servicio {
  text-align: center;
  background: #fff;
  padding: 15px;
   margin-bottom: 20px;
  border-radius: 10px;
  box-shadow: var(--box-shadow-cards);
  .img-servicio {
    margin-bottom: 20px;
    img {
      width: 60%;
      margin: auto;
      object-fit: contain;
    }
  }
}
@media (max-width: 768px) {
  .como-funcionamos{
    margin-bottom: 50px;
  }
  .bg-servicios{
    padding-top: 20px;
    background: rgba(99, 184, 167, 0.5);
  }
  ul.list-unstyled .media i{
    color: var(--color-fundacion-principal-dark);
  }
  .margen-arriba {
    margin-top: 0;
  }
}
</style>