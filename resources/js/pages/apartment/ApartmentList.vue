<template>
  <div>
    <div class="row">
      <div class="column">
        <div class="card">
          <h3>Card 1</h3>
          <p>Some text</p>
          <p>Some text</p>
          <div>
            <button>btn1</button>
            <button>btn2</button>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h3>Card 2</h3>
          <p>Some text</p>
          <p>Some text</p>
          <div>
            <button>btn1</button>
            <button>btn2</button>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h3>Card 3</h3>
          <p>Some text</p>
          <p>Some text</p>
          <div>
            <button>btn1</button>
            <button>btn2</button>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h3>Card 4</h3>
          <p>Some text</p>
          <p>Some text</p>
          <div>
            <button>btn1</button>
            <button>btn2</button>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h3>Card 1</h3>
          <p>Some text</p>
          <p>Some text</p>
          <div>
            <button>btn1</button>
            <button>btn2</button>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h3>Card 2</h3>
          <p>Some text</p>
          <p>Some text</p>
          <div>
            <button>edit</button>
            <button>delete</button>
          </div>
        </div>
      </div>
    </div>

    <div></div>

    <!-- Pagination page -->
    <div class="pagination">
      <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a class="active" href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">&raquo;</a>
    </div>
  </div>
</template>

<script>
import { axios } from 'vue/types/umd';

export default {
  mounted() {
    const url = '/api/apartments'
    axios.get(url,).then((res) => {
      
    })
  },
  data() {
    return {};
  },
  methods: {
    async getApartementList(){
      const url = '/api/apartments'
      const data = await axios.get(url).then((res) => {
        return res.data
      }).catch(err => {
        return err
        // console.log(err);
      })
      return data
    }
  },
};
</script>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {
  margin: 0 -5px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 13px;
  text-align: center;
  background-color: #f1f1f1;
  padding-bottom: 20px;
}

/* Pagination links */
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color 0.3s;
}

/* Style the active/current link */
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {
  background-color: #ddd;
}
</style>