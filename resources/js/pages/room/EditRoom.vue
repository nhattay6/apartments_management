<template>
  <div>
    <div>
      <h1>Edit Room</h1>
    </div>
    <div class="container">
      <form action="">
        <label for="fname">Room Number</label>
        <!-- <ul>
          <li style="color: red">{{ $message }}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="fname"
          v-mode="editForm.roomNumber"
          name="room_number"
          placeholder="Nhập..."
        />

        <label for="lname">Price</label>
        <input
          class="input-custom"
          type="text"
          id="lname"
          v-mode="editForm.price"
          name="price"
          placeholder="Nhập..."
        />
        <label for="lname">Tenant Number</label>
        <input
          class="input-custom"
          type="text"
          id="lname"
          v-mode="editForm.maxTenant"
          name="number_tenant"
          placeholder="Nhập..."
        />
        <label for="lname">Apartment</label>
        <select
          class="input-custom"
          name="apartment"
          v-model="editForm.apartmentId"
        >
          <option v-for="apartment in listApartment" :key="apartment.id">
            {{ apartment.name }}
          </option></select
        ><br />
        <label>Image</label><br />
        <input
          class="input-custom"
          name="image"
          type="file"
          v-on:change="editForm.image"
        />
        <br />
        <img
          id="frame"
          :src="'/img/apartment_room/' + editForm.image"
          width="100px"
          height="100px"
        /><br />
        <input
          class="input-custom"
          type="submit"
          value="Submit"
          @click="submitForm"
        />
      </form>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.getListApartment();
  },
  data() {
    return {
      listApartment: [],
      editRoom: {
        roomNumber: "",
        price: "",
        maxTenant: "",
        image: "",
        apartmentId: "",
      },
    };
  },
  methods: {
    async getListApartment() {},
    async fetchRoomById() {},
    submitForm() {},
  },
};
</script>

<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>