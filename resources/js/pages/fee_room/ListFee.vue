<template>
  <div>
    <h1>{{ __("Danh sách phòng trọ") }}</h1>
    <div class="block-search">
      <form action="{{route('room.search')}}" method="post">
        <label>Apartment Name:</label><input name="apartment" type="text" />
        <label>Room Number: </label><input name="room_number" type="text" />
        <input type="submit" value="Tìm kiếm" @click="search" />
      </form>
    </div>
    <div>
      <table id="apartment">
        <tr>
          <th>Room Number</th>
          <th>Price</th>
          <th>Tenant Number</th>
          <th>Apartment</th>
          <th>image</th>
          <th></th>
        </tr>
        <tr v-for="room in listRoom" :key="room.id">
          <td>{{ room.roomNumber }}</td>
          <td>{{ room.price }} .VND</td>
          <td>{{ room.max_tenant }}</td>
          <td>{{ room.apartmentName }}</td>
          <td>
            <div class="content-img">
              <img
                width="50px;"
                height="50px;"
                :src="'/img/apartment_room/' + room.room_image"
              />
            </div>
          </td>
          <td>
            <div class="container-btn">
              <a class="btn-form" @click="show()"> Show </a>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.fetchApartment();
  },
  data() {
    return {
      listRoom: [],
      searchStatus: false,
      searchValue: {
        apartmentName: "",
        roomNumber: "",
      },
    };
  },
  methods: {
    async getApartementList() {
      const url = "/api/apartments";
      const data = await axios
        .get(url)
        .then((res) => {
          this.listRoom = res.data;
        })
        .catch((err) => {
          return err;
        });
      return data;
    },
    addRoom() {},
    showRoom(roomId) {},
    editRoom(roomId) {},
    deleteRoom(roomId) {
      // bo sung them sử kiện confirm},
    },
    search() {},
  },
};
</script>

<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>