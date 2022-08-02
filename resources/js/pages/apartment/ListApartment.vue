<template>
  <div>
    <h1>List Apartment</h1>
    
    <!-- Search -->
    <div class="block-search">
      <form action="" method="">
        <label>Name: </label><input name="name" type="text" v-model="searchValue.name">
        <label>Address: </label><input name="address" type="text" v-model="searchValue.address">
        <input type="submit" value="search" @click="search()">
      </form>
    </div>

    <!-- List -->
    <div>
      <table id="apartment">
        <tr>
          <th>index</th>
          <th>Name</th>
          <th>Address</th>
          <th>image</th>
          <th>Action</th>
        </tr>
        <tr v-for="(apartment, index) in listApartment" :key="index">
          <td>{{apartment.id}}</td>
          <td>{{apartment.name}}</td>
          <td>{{apartment.address}}</td>
          <td>
            <div class="content-img">
              <img width="50px;" height="50px;" :src="'/img/apartment/' + apartment.image">
            </div>
          </td>
          <td>
            <div class="container-btn">
              <a class="btn-form" @click="addApartment">Add</a>
              <a class="btn-form" @click="editApartment(apartment.id)">Edit</a>
              <a class="btn-form delete" @click="deleteApartment(apartment.id)">Delete</a>
            </div>
          </td>
        </tr>
    
    </table>
    </div>
    
    <!-- Pagination not work now -->
    <!-- <div class="block-pagination" style="width: 21%;float: right;padding-top: 20px;">
      {{ $listApartment->links() }}
    </div> -->
  </div>
</template>

<script>
import { axios } from "vue/types/umd";

export default {
  mounted() {
    this.getApartementList()
  },
  data() {
    return {
      listApartment: [],
      searchStatus: false,
      searchValue: {
        name: '',
        address: '',
      }
    };
  },
  methods: {
    async getApartementList() {
      const url = "/api/apartments";
      const data = await axios
        .get(url)
        .then((res) => {
          this.listApartment = res.data;
        })
        .catch((err) => {
          return err;
        });
      return data;
    },
    addApartment() {},
    editApartment(apartmentId) {},
    deleteApartment(apartmentId) { // bo sung them sử kiện confirm},
    },
    search(){},
  },
}
</script>

<style>
@import "../../css/extend.css";
@import "../../css/custom2.css";
@import "../../css/custom.css";
</style>