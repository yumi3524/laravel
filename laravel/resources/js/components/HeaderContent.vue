<template>
  <div class="header"></div>
</template>

<style scoped>
.header {
  /* width: 1440px; */
  height: 134px;
  background-color: #000000;
  margin-right: 0;
  margin-left: 0;
}
</style>

    <script>
export default {
  props: {
    test: String
  },

  mounted() {
    console.log("ExampleComponent mounted.");
  }
};
</script>