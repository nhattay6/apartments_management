<template>
  <div>
    <div class="sidenav">
      <a href="" @click="doApartmentPage()">Quản lý tòa nhà</a>
      <a href="" @click="doRoomPage()">Quản lý phòng trọ</a>
      <a href="" @click="doRoomFeePage()">Quản lý tiền trọ hàng tháng</a>
      <a href="" @click="dostatistic()">Thống kê</a>
    </div>

    <div class="main">
      <div class="menu">
        <div class="menu-item first">
          <a class="btn-logout" href="" @click="logout()">Logout</a>
        </div>
        <div class="menu-item">
          <span class="infor-admin">Xin chào:</span>
        </div>
      </div>
      <div class="block-content">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {};
  },
  computed: {},
  methods: {
    doApartmentPage() {
      this.$router.push("/home/apartment");
    },
    doRoomPage() {
      // this.$router.push("/home/room");
    },
    doRoomFeePage() {
      // this.$router.push("/home/room-fee");
    },
    dostatistic() {
      // this.$router.push("/home/statistic");
    },
    logout() {
      axios
        .post("api/logout")
        .then((res) => {
          // localStorage.removeItem()
          this.$router.push("/login");
        })
        .catch((err) => {
          console.log("ERROR", err);
        });
    },
  },
};
</script>

<style>
@import "../../css/extend.css";
@import "../../css/custom2.css";
</style>