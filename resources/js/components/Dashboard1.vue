<template>
  <div>
    <h1>DashBoard</h1>
    <br />Name: {{ user.name }} <br />Email: {{ user.email }}

    <button @click="logout">Logout</button>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      user: null,
    };
  },
  mounted() {
    axios.get("api/user").then((res) => {
      this.user = res.data;
    });
  },
  methods: {
    logout() {
      axios.post("/api/logout").then(() => {
        this.$outer.push("/home");
      });
    },
  },
};
</script>