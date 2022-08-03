<template>
  <div>
    <div>
      <h1>Edit Receipt</h1>
    </div>
    <div class="container">
      <form
        action=""
      >
        <label for="fname">Room</label>
        <input
          class="input-custom"
          type="text"
          disabled
          id="fname"
          name="apartment_room_id"
          placeholder="Nhập tên"
        />
        <label for="lname">Electricity number/label>

        <!-- <ul>
            <li style="color:red;">{{$message}}</li>
        </ul>
   -->
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="electricity_number"
          placeholder="Nhập..."
        />
        <label for="lname">Water number</label>
        <!-- <ul>
            <li style="color:red;">{{$message}}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="water_number"
          placeholder="Nhập..."
        />
        <label for="lname">Total price</label>
        <!-- <ul>
            <li style="color:red;">{{$message}}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="total"
          placeholder="Nhập..."
        />
        <label for="lname">Total paid</label>
        <!-- <ul>
            <li style="color:red;">{{$message}}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="total_price"
          placeholder="Nhập..."
        />
        <label for="lname">Charge Date</label>
        <input
          class="input-custom"
          disabled
          type="text"
          id="lname"
          name="charge_date"
          placeholder="Nhập..."
        />
        <input class="input-custom" type="submit" value="Submit" @click="submitForm"/>
      </form>
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
    // addRoom() {},
    // showRoom(roomId) {},
    // editRoom(roomId) {},
    // deleteRoom(roomId) {
    //   // bo sung them sử kiện confirm},
    // },
    submitForm() {},
    search() {},
  },
};
</script>
<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>