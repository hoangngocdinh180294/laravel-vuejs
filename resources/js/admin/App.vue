<template>
  <div class="container">
    <Nav></Nav>
    <router-view></router-view>
  </div>
</template>
<script>
import Nav from "./components/nav.vue";
export default {
  data() {
    return {};
  },
  components: { Nav }
};
</script>
