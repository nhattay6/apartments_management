<template>
  <div>
    <!-- <div> Nen V-for o day</div> -->
    <div class="sidenav">
      <a href="" @click="doApartmentPage">Quản lý tòa nhà</a>
      <a href="" @click="doRoomPage">Quản lý phòng trọ</a>
      <a href="" @click="doRoomFeePage">Quản lý tiền trọ hàng tháng</a>
      <a href="" @click="dostatistic">Thống kê</a>
    </div>

    <div class="main">
      <div class="menu">
        <div class="menu-item first">
          <a class="btn-logout" href="" @click="logout()">Logout</a>
        </div>
        <div class="menu-item">
          <span class="infor-admin">Xin chào: {{ $user_name }}</span>
        </div>
      </div>
      <div class="block-content">
        <h1>aaa</h1>
      </div>
      <!-- <div class="block-content" v-if="numberPage == 0">
        <Apartment />
      </div>
      <div class="block-content" v-if="numberPage == 1">
        <ApartmentRoom />
      </div>
      <div class="block-content" v-if="numberPage == 2">
        <ApartmentRoom />
      </div>
      <div class="block-content" v-if="numberPage == 3">
        <Apartment />
      </div> -->
    </div>
  </div>
</template>

<script>
// import Apartment from "../pages/apartment/ApartmentList.vue"
// import ApartmentRoom from "../pages/room/RoomList.vue"

export default {
  name: "Home",
  // components: { Apartment, ApartmentRoom },
  data() {
    return {
      categoryList: [
        "Quản lý tòa nhà",
        "Quản lý phòng trọ",
        "Quản lý tiền trọ hàng tháng",
        "Thống kê",
      ],
      numberPage: null,
    };
  },
  computed: {},
  methods: {
    doApartmentPage() {
      this.numberPage = 0;
    },
    doRoomPage() {
      this.numberPage = 1;
    },
    doRoomFeePage() {
      this.numberPage = 2;
    },
    dostatistic() {
      this.numberPage = 3;
    },
    logout() {
      axios
        .post("api/logout")
        .then((res) => {
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