<template>
  <div>
    <div>
        <h1>Edit Apartment</h1>
    </div>
    <div class="container">
        <form action="">
            <label for="fname">Name Apartment</label>
            <!-- <ul>
                <li style="color:red;">{{$message}}</li>
            </ul> -->
            <input v-model="editForm.name" class="input-custom" type="text" id="fname" name="name" placeholder="Nhập tên">

            <label for="lname">Địa chỉ tòa nhà</label>
            <!-- <ul>
                <li style="color:red;">{{$message}}</li>
            </ul> -->
    
            <input v-model="editForm.address" class="input-custom" type="text" id="lname" name="address" placeholder="Nhập đỉa chỉ">

            <label>Image</label><br>
            <input class="input-custom" :value="editForm.image" name="image" type="file" @change="changeImage()">
            <br>
            <img id="frame" :src="'/img/apartment/' + editForm.image" width="100px" height="100px" /><br>
            <input class="input-custom" type="submit" value="Submit" @click="sumitForm()">
        </form>
    </div>
  </div>
</template>

<script>
import { axios } from "vue/types/umd";

export default {
  mounted() {
    this.fetchApartment()
  },
  data() {
    return {
      editForm: {
        name: '',
        adress: '',
        image: '',
      },
    };
  },
  methods: {
    validateForm() {},
    submitForm() {//use validate form},
    },
    async fethApartment(apartmentId) {
      //call api find apartment with id...
      // this.editForm.name = data.name ...
    },
  },
}
</script>

<style>
@import "../../css/extend.css";
@import "../../css/custom2.css";
@import "../../css/custom.css";
</style>

