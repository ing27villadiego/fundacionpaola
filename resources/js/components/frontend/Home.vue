<template>
  <div>
    <HeroComponent></HeroComponent>
    <AcercaComponent></AcercaComponent>
    <ServiciosComponent></ServiciosComponent>
    <BlogComponent></BlogComponent>
    <FooterComponent></FooterComponent>
  </div>
</template>

<script>

import HeroComponent from './section/Hero';
import AcercaComponent from './section/Acerca';
import ServiciosComponent from './section/Servicios';
import BlogComponent from './section/Blog';
import FooterComponent from './shared/Footer'

export default {
  name: "Home",
  components: {
    HeroComponent,
    AcercaComponent,
    ServiciosComponent,
    BlogComponent,
    FooterComponent
  },
};
</script>

<style lang="scss" scoped>
</style>