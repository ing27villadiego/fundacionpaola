<template>
  <div style="min-height:100vh">

    <transition name="fade" mode="out-in">
      <router-view appear :key="path"></router-view>
    </transition>

  </div>
</template>
<script>
export default {};
</script>
<style lang="scss" scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
