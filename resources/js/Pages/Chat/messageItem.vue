<template>
  <div>
    <h1>{{ message.user.name }}: {{ message.message }}</h1>
  </div>
</template>

<script>
export default {
  props: ["message"]
  // created() {
  //   console.log(this.message);
  // }
};
</script>

<style></style>
