<template>
  <div class="app">
    <div class="contenedor">
      <div class="sidebar">
          <p>componente sidebar</p>
      </div>
      <div class="rutas">
        <p>componente header</p>
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>
<script>
//import sidebarComponent from "./shared/Sidebar"
//import headerComponent from "./shared/Header"
export default {
  components: {
    //sidebarComponent,
    //headerComponent
  }
}
</script>

<style lang="scss">

.app {
    height: 100vh;
    overflow: hidden;
}
.contenedor{
  height: 100%;
  display: flex;
  .sidebar{
    flex-basis: 20%;
  }
  .rutas{
    flex-basis:80%;
    height: inherit;
    overflow-y: scroll;
    background: #fff;
  }
}
</style>
