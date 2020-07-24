<template>
  <div>
    <HeroComponent></HeroComponent>
    <AcercaComponent></AcercaComponent>
    <ServiciosComponent></ServiciosComponent>
  </div>
</template>

<script>
import HeroComponent from "./section/Hero";
import AcercaComponent from './section/Acerca';
import ServiciosComponent from './section/Servicios'

export default {
  name: "Home",
  components: {
    HeroComponent,
    AcercaComponent,
    ServiciosComponent
  },
};
</script>

<style lang="scss" scoped>
</style>