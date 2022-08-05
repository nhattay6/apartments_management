<template>
  <div>
    <h1>List Room</h1>
    <div class="block-search">
      <form action="">
        <label>Apartment Name:</label><input name="apartment" type="text" />
        <label>Eoom Number: </label><input name="room_number" type="text" />
        <input type="submit" value="Tìm kiếm" @click="search()" />
      </form>
      <a class="btn-form" @click="addRoom()">Add</a>
    </div>
    <div>
      <table id="apartment">
        <tr>
          <th>Room Number</th>
          <th>Default price</th>
          <th>Tenant number</th>
          <th>Apartment</th>
          <th>Image</th>
          <th></th>
        </tr>

        <tr v-for="(room, index) in listRoom" :key="index">
          <td>{{ room.room_number }}</td>
          <td>{{ room.price }} .VND</td>
          <td>{{ room.max_number }}</td>
          <td>{{ room.apartment["name"] }}</td>
          <td>
            <div class="content-img">
              <img
                width="50px;"
                height="50px;"
                :src="'/img/apartment_room/' + room.image"
              />
            </div>
          </td>
          <td>
            <div class="container-btn">
              <a class="btn-form" @click="checkInfo">Check</a>
              <a class="btn-form" @click="editRoom">Edit</a>
              <!-- thêm confirm -->
              <a class="btn-form delete" @click="deleteRoom">Delete</a>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <!-- pagination -->
    <!-- <div class="block-pagination" style="width: 21%;float: right;padding-top: 20px;">
      {{ $listRoom->links() }}
    </div> -->
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
    checkInfo(roomId) {},
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