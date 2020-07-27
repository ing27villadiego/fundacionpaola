<template>
<section>
    <div class="wave-footer">
          <img src="imagenes/wave-footer.svg" alt="">
      </div>
      
    <footer>
        
        <div class="container">
        <div class="row">
            <div class="col-md-4">
            <div class="pregunta-footer">
                <h4>¿Tiene alguna pregunta?</h4>
                <div class="contendor-contacto">
                <ul>
                    <li>
                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Cra 49c Nº 80 - 175 Barranquilla
                    </p>
                    </li>
                    <li>
                    <p>
                        <i class="fa fa-phone" aria-hidden="true"></i> 3583434 - 3584032
                    </p>
                    </li>
                    <li>
                    <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i> fpaolaandrea@gmail.com
                    </p>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="mapa-sitio">
                <h4>Mapa de Sitio</h4>
                <ul>
                <li>
                    <a data-scroll href="#inicio">
                    <i class="fa fa-cube" aria-hidden="true"></i>Inicio
                    </a>
                </li>
                <li>
                    <a data-scroll href="#asesoria">
                    <i class="fa fa-cube" aria-hidden="true"></i>Asesoria
                    </a>
                </li>
                <li>
                    <a data-scroll href="#acerca">
                    <i class="fa fa-cube" aria-hidden="true"></i>Acerca de
                    </a>
                </li>
                <li>
                    <a data-scroll href="#equipo">
                    <i class="fa fa-cube" aria-hidden="true"></i>Equipo
                    </a>
                </li>
                <li>
                    <a data-scroll href="#testimoniales">
                    <i class="fa fa-cube" aria-hidden="true"></i>Testimoniales
                    </a>
                </li>
                <li>
                    <a data-scroll href="#contacto">
                    <i class="fa fa-cube" aria-hidden="true"></i>Contactanos
                    </a>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-md-4">
            <div class="redes-sociales">
                <div class="footer-img">
                <img :src="'/imagenes/logo.jpg'" alt class="imagen-responsive" />
                </div>
                <h4>Nuestras Redes Sociaes</h4>
                <ul class="enlaces-redes-social">
                <li>
                    <a
                    href="https://www.facebook.com/FundacionPaolaAndreaVelasquezVivas"
                    target="_black"
                    >
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_black">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href target="_black">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                </ul>
                <p>
                &copy; 2020 Fundación Paola Andrea
                <br />Todos los derechos reservados.
                </p>
            </div>
            </div>
        </div>
        </div>
    </footer>

</section>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style lang="scss" scoped>
footer {
  background-color: var(--color-fundacion-principal-dark);
  padding-top: 20px;
  color: #a1aebb;
  .mapa-sitio ul li a {
    color: var(--font-secondary);
    &:hover {
      color: #fff;
    }
    i {
      vertical-align: middle;
      margin-right: 5px;
    }
  }
  h4 {
    text-shadow: 1px 2px 3px rgba(59, 57, 80, 0.2);
    margin-bottom: 20px;
  }
  p {
    line-height: 1;
  }
  i {
    width: 25px;
    text-align: center;
    font-size: 25px;
    margin-right: 5px;
  }
  .redes-sociales {
    border-left: 1px solid hsla(0, 0%, 100%, 0.3);
    text-align: center;
    .footer-img {
      width: 40%;
      margin: auto;
      margin-bottom: 20px;
      border-radius: 50%;
      border: 2px solid #fff;
      overflow: hidden;
    }
    ul.enlaces-redes-social {
      padding: 0;
      margin: 20px 0;
      display: flex;
      justify-content: space-evenly;
      li a {
        display: block;
        background-color: #fff;
        padding: 5px;
        border-radius: 8px;
        line-height: 5px;
        box-shadow: var(--box-shadow-element);
        position: relative;
        &:hover {
          background-color: var(--color-fundacion-principal-dark);
          transform: translateY(-10px);
          i {
            color: #fff;
          }
        }
        i {
          margin-right: 0;
          color: var(--color-fundacion-principal-dark);
        }
      }
      li:nth-of-type(1) a {
        color: #3b5998;
        &:hover {
          background: #3b5998;
          color: #fff;
        }
      }
      li:nth-of-type(2) a {
        color: #125688;
        &:hover {
          background: #125688;
          color: #fff;
        }
      }
      li:nth-of-type(3) a {
        color: #55acee;
        &:hover {
          background: #55acee;
          color: #fff;
        }
      }
    }
  }
  @media (max-width: 768px) {
    .redes-sociales,
    .mapa-sitio,
    .pregunta-footer {
      margin-bottom: 30px;
      border-left: none;
    }
  }
}
</style>
