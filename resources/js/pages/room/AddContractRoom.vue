<template>
  <div>
    <div>
      <h1>Add Tenant Contract</h1>
    </div>
    <div class="container">
      <form action="">
        <label for="fname">Room Number</label>
        <input
          disabled
          class="input-custom"
          type="text"
          id="fname"
          name="apartment_room_id"
          v-model="addTenantContract.roomNumber"
        />

        <label for="lname">Name Tenant</label>
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="name"
          placeholder="Nhập..."
          v-model="addTenantContract.name"
        />
        <label for="lname">Telephone Number</label>
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="phone"
          placeholder="Nhập..."
          v-model="addTenantContract.telephone"
        />
        <label for="lname">Email</label>
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="email"
          placeholder="Nhập..."
          v-model="addTenantContract.email"
        />
        <label for="lname">Identity Card</label>
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="email"
          placeholder="Nhập..."
          v-model="addTenantContract.identityNumber"
        />
        <!-- <label for="lname">Start Data</label>
        <input
          class="input-custom"
          type="date"
          id="lname"
          name="start"
          placeholder="Nhập..."
        />
        <label for="lname">End Date</label>
        <input
          class="input-custom"
          type="date"
          id="lname"
          name="end"
          placeholder="Nhập..."
        /> -->
        <input
          class="input-custom"
          type="submit"
          value="Xác nhận"
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
      // listApartment: [],
      addTenantContract: {
        roomNumber: "",
        name: "",
        telephone: "",
        identityNumber: "",
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