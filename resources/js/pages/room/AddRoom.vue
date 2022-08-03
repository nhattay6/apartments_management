<template>
  <div>
    <div>
      <h1>Add Room</h1>
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
          name="room_number"
          placeholder="Nhập..."
          v-model="addForm.roomNumber"
        />

        <label for="lname">Price</label>
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="price"
          placeholder="Nhập..."
          v-model="addForm.price"
        />
        <label for="lname">Tenant Number</label>
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="number_tenant"
          placeholder="Nhập..."
          v-model="addForm.maxTenant"
        />
        <label for="lname">Apartment</label>
        <select
          class="input-custom"
          name="apartment"
          v-model="addForm.apartmentId"
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
          v-on:change="addForm.image"
        />
        <br />
        <img id="frame" src="" width="100px" height="100px" /><br />
        <input
          class="input-custom"
          type="submit"
          value="Submit"
          @click="submitForm()"
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
      addRoom: {
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
    submitForm() {},
  },
};
</script>
<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>