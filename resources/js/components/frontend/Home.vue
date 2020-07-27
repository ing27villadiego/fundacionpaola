<template>
  <div>
    <HeroComponent></HeroComponent>
    <AcercaComponent></AcercaComponent>
    <ServiciosComponent></ServiciosComponent>
    <BlogComponent></BlogComponent>
  </div>
</template>

<script>

import HeroComponent from './section/Hero';
import AcercaComponent from './section/Acerca';
import ServiciosComponent from './section/Servicios';
import BlogComponent from './section/Blog'

export default {
  name: "Home",
  components: {
    HeroComponent,
    AcercaComponent,
    ServiciosComponent,
    BlogComponent
  },
};
</script>

<style lang="scss" scoped>
</style>