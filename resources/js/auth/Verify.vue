<template>
  <div class="verify">
    <div class="alert alert-danger" role="alert" v-if="error">
      {{ error }}
    </div>
    <h1 v-show="!error">Please wait..</h1>
  </div>
</template>

<script>
export default {
  props: ["hash"],

  data() {
    return {
      error: null,
      userData: null,
    };
  },
  mounted() {
    this.sendVerifyRequest(this.hash)
      .then(() => {
        this.$router.push("/home");
      })
      .catch((error) => {
        console.log(error.response);
        this.error = "Error verifying email";
      });
  },
  methods: {
    getUserData() {
      axios
        .get("fetch-user")
        .then((res) => {
          this.userData = res.data;
        })
        .cath(() => {
          localStorage.removeItem("token");
        });
    },
    sendVerifyRequest(hash) {
      return (
        axios
          // id ?
          .get("verify-email/{id}/" + hash)
          .then(() => {
            this.getUserData();
          })
      );
    },
  },
};
</script>
