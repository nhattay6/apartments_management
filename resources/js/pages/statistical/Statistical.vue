<template>
  <div>
    <h1>List Room Debt</h1>
    <div class="block-search"></div>
    <div>
      <table id="apartment">
        <tr>
          <th>Room Number</th>
          <th>Total Debt</th>
          <th>Tenant Name</th>
          <th>Month</th>
        </tr>
        <tr v-for="item in listRoomDebt" :key="item.id">
          <td>{{ item.Apartmentroom["room_number"] }}</td>
          <td>{{ item.total_price - item.total_paid }}</td>
          <td>{{ item.Tenant["name"] }}</td>
          <td>{{ $item.charge_date }}</td>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.getListRoomDebt();
  },
  data() {
    return {
      listRoomDebt: [],
    };
  },
  methods: {
    async getListRoomDebt() {
      const url = "/api/apartments";
      const data = await axios
        .get(url)
        .then((res) => {
          this.listRoomDebt = res.data;
        })
        .catch((err) => {
          return err;
        });
      return data;
    },
  },
};
</script>

<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>