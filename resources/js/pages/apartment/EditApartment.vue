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
        <input
          v-model="editForm.name"
          class="input-custom"
          type="text"
          id="fname"
          name="name"
          placeholder="Nhập tên"
        />

        <label for="lname">Địa chỉ tòa nhà</label>
        <!-- <ul>
                <li style="color:red;">{{$message}}</li>
            </ul> -->

        <input
          v-model="editForm.address"
          class="input-custom"
          type="text"
          id="lname"
          name="address"
          placeholder="Nhập đỉa chỉ"
        />

        <label>Image</label><br />
        <input
          class="input-custom"
          :value="editForm.image"
          name="image"
          type="file"
          @change="changeImage()"
        />
        <br />
        <img
          id="frame"
          :src="'/img/apartment/' + editForm.image"
          width="100px"
          height="100px"
        /><br />
        <input
          class="input-custom"
          type="submit"
          value="Submit"
          @click="sumitForm()"
        />
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
      editForm: {
        name: "",
        address: "",
        image: "",
      },
      apartmentId: this.$route.params,
    };
  },
  methods: {
    validateForm() {},
    submitForm() {
      //use validate form},
    },
    async fethApartment(apartmentId) {
      const data = await axios
        .get("/find/" + apartmentId)
        .then((res) => {
          const apartment = res.data.data;
          this.editForm.name = apartment.name;
          this.editForm.address = apartment.address;
          this.editForm.image = apartment.address;
        })
        .catch((err) => {
          console.log(err);
        });
      return data;
      //call api find apartment with id...
      // this.editForm.name = data.name ...
    },
    changeImage() {},
  },
};
</script>

<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>