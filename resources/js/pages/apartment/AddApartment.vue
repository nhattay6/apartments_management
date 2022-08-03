<template>
  <div>
    <div>
      <h1>Add Apartment</h1>
    </div>
    <div>
      <button @click="back()">Back</button>
    </div>
    <div class="container">
      <form action="">
        <label for="fname">Apartment Name</label>
        <!-- <ul>
          <li style="color: red">{{ $message }}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="fname"
          name="name"
          placeholder="Nhập tên"
          v-model="addFormData.name"
        />

        <label for="lname">Apartment Address</label>
        <!-- <ul>
          <li style="color: red">{{ $message }}</li>
        </ul> -->
        <input
          class="input-custom"
          type="text"
          id="lname"
          name="address"
          placeholder="Nhập đỉa chỉ"
          v-model="addFormData.address"
        />
        <label>Ảnh</label><br />

        <!-- Back -->
        <input
          class="input-custom"
          name="image"
          type="file"
          onchange="preview()"
          v-on:change="addFormData.image"
        />
        <br />
        <img id="frame" src="" width="100px" height="100px" /><br />
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
  mounted() {},
  data() {
    return {
      addFormData: {
        name: "",
        adress: "",
        image: "",
      },
    };
  },
  methods: {
    back() {
      this.$router.push("/home/apartment");
    },
    validateForm() {},
    submitForm() {
      //use validate form},
    },
  },
};
</script>

<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>