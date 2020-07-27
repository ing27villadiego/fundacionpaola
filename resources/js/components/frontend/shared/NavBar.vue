<template>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a href="/" class="navbar-brand">
    FUND. PAOLA ANDREA
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a data-scroll href="#inicio" class="nav-link" >Inicio</a>
        </li>
        <li class="nav-item">
          <a data-scroll href="#asesoria"
            class="nav-link"
          >Asesoria</a>
        </li>
        <li class="nav-item">
          <a data-scroll href="#acerca"
            class="nav-link"
          >Acerca de</a>
        </li>
         <li class="nav-item">
          <a data-scroll href="#equipo" class="nav-link" >Equipo</a>
        </li>
        <li class="nav-item">
          <a data-scroll href="#testimoniales" class="nav-link" >Testimoniales</a>
        </li>
        <li class="nav-item">
          <a data-scroll href="#contacto" class="nav-link" >Contactanos</a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: "Header"
};
</script>

<style lang="scss">
nav.navbar{
    background: transparent;
    ul.navbar-nav li.nav-item {
        position: relative;

        &::after{
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: transparent;
            position: absolute;
            bottom: 0;
            left: 0;
            transition: all .4s;
        }
        &:hover a{ color: #fff; }
        &:hover::after{
            width: 100%;
            background: #fff;
        }
    }
} 
</style>
