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
        <ul>
          <li style="color: red">{{ msg[0] }}</li>
        </ul>
        <input
          class="input-custom"
          type="text"
          id="fname"
          name="name"
          placeholder="Nhập tên"
          v-model="addFormData.name"
        />

        <label for="lname">Apartment Address</label>
        <ul>
          <li style="color: red">{{ msg[1] }}</li>
        </ul>
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
import axios from "axios";
export default {
  mounted() {},
  data() {
    return {
      addFormData: {
        name: "",
        address: "",
        image: "",
      },
      msg: [],
    };
  },
  methods: {
    back() {
      this.$router.push("/home/apartment");
    },
    validateForm() {
      if (this.addFormData.name.trim() == "") {
        this.msg[0] = "Apartment Name is required";
        return false;
      }
      if (this.addFormData.adress.trim() == "") {
        this.msg[1] = "address is required";
        return false;
      }

      return true;
    },
    async submitForm() {
      const validate = this.validateForm();
      if (validate) {
        await axios
          .post("/apartment/add", this.addFormData)
          .then((res) => {
            const data = res.data;
            this.$router.push("/home/apartment-list");
            return data;
          })
          .catch((err) => console.log(err));
      }
    },
  },
};
</script>

<style>
@import "../../../css/extend.css";
@import "../../../css/custom2.css";
@import "../../../css/custom.css";
</style>