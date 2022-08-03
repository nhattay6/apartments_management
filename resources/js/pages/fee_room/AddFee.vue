<template>
  <div>
    <div>
      <h1>Add Receipt</h1>
    </div>
    <div class="container">
      <!-- <p style="color: red">{{$errors->first()}}</p> -->
      <form action="">
        <label for="fname">Room</label>
        <input
          class="input-custom"
          type="text"
          disabled
          value="{{$id}}"
          id="fname"
          name="apartment_room_id"
          placeholder="Nhập tên"
        />
        <label for="lname">Electricity Number</label>
        <!-- <ul>
          <li style="color: red">{{ $message }}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="electricity_number"
          placeholder="Nhập..."
        />
        <label for="lname">Water number</label>
        <!-- <ul>
          <li style="color: red">{{ $message }}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="water_number"
          placeholder="Nhập..."
        />
        <label for="lname">Total Price</label>
        <!-- <ul>
          <li style="color: red">{{ $message }}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="total"
          placeholder="Nhập..."
        />
        <label for="lname">Total Paid</label>
        <!-- <ul>
          <li style="color: red">{{ $message }}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="total_price"
          placeholder="Nhập..."
        />
        <label for="lname">Charge Date</label>
        <!-- <ul>
          <li style="color: red">{{ $message }}</li>
        </ul> -->
        <input
          class="input-custom"
          type="date"
          id="lname"
          name="charge_date"
          placeholder="Nhập..."
        />
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