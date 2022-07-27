<template>
  <div>
    <form @submit.prevent="login">
      <div class="containerform" >
          <!-- <div class="brand-logoform">
              <img src="" height="100" width="90">
          </div> -->
          <div class="brand-titleform">App Login</div>
          <div class="inputsform">
              <label class="labelform">EMAIL</label>
              <input class="inputform" type="email" placeholder="example@test.com"  v-model="formData.email"/>
              <label class="labelform">PASSWORD</label>
              <input class="inputform" type="password" placeholder="Min 8 charaters long" v-model="formData.password"/>
              <button class="buttonform" type="submit">LOGIN</button>
          </div>
      </div>
    </form>
    <div>
      <button class="buttonform" @click="doRegister()">Register</button>
    </div>
</div>
</template>

<script>
import axios from 'axios'

export default {
  name: "login",
  data() {
    return {
      formData: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    login() {
      const urf = '/api/auth/login'
      axios
        .post(urf, this.formData)
        .then((res) => {
          
        })
        .catch((err) => {
          console.log('ERR:', err)
        })
    },
    doRegister() {
      this.$router.push('/register')
    }
  }
}
</script>

<style lang="scss">
// Body
.containerform {
  position: relative;
  width: 350px;
  height: 500px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
  margin: auto;

}

.brand-logoform {
  height: 100px;
  width: 100px;
  text-align:center ;
  margin: auto;
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
}

.brand-titleform {
  margin-top: 10px;
  font-weight: 900;
  font-size: 1.8rem;
  color: #1DA1F2;
  letter-spacing: 1px;
}

.form {
  text-align: left;
  margin-top: 30px;
}

.labelform, .inputform, .buttonform {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

.labelform {
  margin-bottom: 4px;
}

.labelform:nth-of-type(2) {
  margin-top: 12px;
}

.inputform::placeholder {
  color: gray;
}

.inputform {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

.buttonform {
  color: white;
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

.buttonform:hover {
  box-shadow: none;
}

.aform {
  position: absolute;
  font-size: 8px;
  bottom: 4px;
  right: 4px;
  text-decoration: none;
  color: black;
  background: yellow;
  border-radius: 10px;
  padding: 2px;
}

.h1form {
  position: absolute;
  top: 0;
  left: 0;
}
.d-flex .btn {
  margin: 10px;
}

</style>
