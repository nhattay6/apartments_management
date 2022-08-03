<template>
  <div>
    <h1>List Receipt</h1>
    <a class="btn-form" @click="add">Add </a>
    <div>
      <table id="apartment">
        <tr>
          <th>Room Number</th>
          <th>Tenant</th>
          <th>Water number</th>
          <th>Electricity number</th>
          <th>month</th>
          <th>total price</th>
          <th>total paid</th>
          <th></th>
        </tr>
        <tr v-for="receipt in listReceipt" :key="receipt.id">
          <td>{{ receipt.apartment_room_id }}</td>
          <td>{{ receipt.tenant["name"] }}</td>
          <td>{{ receipt.water_number }}</td>
          <td>{{ receipt.electricity_number }}</td>
          <td>{{ receipt.charge_date }}</td>
          <td>{{ receipt.total_price }}</td>
          <td>{{ receipt.total_paid }}</td>
          <td>
            <div class="container-btn">
              <a class="btn-form" @click="edit">Edit</a>
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
      listReceipt: [],
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
    search() {},
  },
};
</script>

<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>