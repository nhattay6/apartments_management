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
          name="image"
          type="file"
          @change="changeImage"
        />
        <br />
        <img
          id="frame"
          :src="editForm.image"
          width="100px"
          height="100px"
        /><br />
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
    // this.fethApartment(this.apartmentId);
  },
  created() {
    this.fethApartment(this.apartmentId);
  },
  data() {
    return {
      editForm: {
        name: "",
        address: "",
        image: "",
      },
      apartmentId: this.$route.params.id,
    };
  },
  methods: {
    validateForm() {},
    async submitForm() {
      if (!editform.name || !editForm.address || !editForm.image) {
        const data = await axios
          .post("api/apartment/edit/" + this.apartmentId, this.editForm)
          .then((res) => {
            console.log("res", res);
            this.$router.push("/home/apartment");
          })
          .catch();
        return data;
      }
    },
    async fethApartment(apartmentId) {
      const data = await axios
        .get("/api/apartment/find/" + apartmentId)
        .then((res) => {
          const apartment = res.data.data;
          this.editForm.name = apartment.name;
          this.editForm.address = apartment.address;
          this.editForm.image = apartment.address;
          // console.log("wwww", this.editForm);
        })
        .catch((err) => {
          console.log(err);
        });
      return data;
    },
    changeImage(e) {
      const file = e.target.files || e.dataTransfer.files;
      if (!file.length) return;
      this.createImage(file[0]);
    },
    createImage(file) {
      let reader = new FileReader();
      let vm = this;
      reader.onload = (e) => {
        vm.editForm.image = e.target.result;
      };
      // console.log("wwww", this.editForm.image);
      reader.readAsDataURL(file);
    },
  },
};
</script>

<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>