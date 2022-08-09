<template>
  <Bar
    :chart-options="chartOptions"
    :chart-data="chartData"
    :chart-id="chartId"
    :dataset-id-key="datasetIdKey"
    :plugins="plugins"
    :css-classes="cssClasses"
    :styles="styles"
    :width="width"
    :height="height"
  />
</template>

<script>
import { Bar } from "vue-chartjs/legacy";
import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
} from "chart.js";

ChartJS.register(
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale
);

export default {
  name: "BarChart",
  components: { Bar },
  props: {
    chartId: {
      type: String,
      default: "bar-chart",
    },
    datasetIdKey: {
      type: String,
      default: "label",
    },
    width: {
      type: Number,
      default: 100,
    },
    height: {
      type: Number,
      default: 100,
    },
    cssClasses: {
      default: "",
      type: String,
    },
    styles: {
      type: Object,
      default: () => {},
    },
    plugins: {
      type: Array,
      default: () => [],
    },
  },
  data() {
    return {
      chartData: {
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ],
        // datasets: [{ data: [40, 20, 12] }],
        datasets: [
          // {
          //   label: "Total Dept",
          //   data: [10, 20, 90, 100, 50, 80, 20, 5, 10, 10, 20, 30],
          //   backgroundColor: ["rgba(255, 99, 132, 0.2)"],
          //   borderColor: ["rgb(255, 99, 132)"],
          //   borderWidth: 5,
          // },
          // {
          //   label: "Total Paid",
          //   data: [100, 200, 300, 400, 16, 505, 90, 10, 20, 30, 40, 50],
          //   backgroundColor: ["rgba(255, 159, 64, 0.2)"],
          //   borderColor: ["rgb(255, 159, 64)"],
          //   borderWidth: 5,
          // },
        ],
      },
      chartOptions: {
        responsive: true,
      },
    };
  },
  created() {
    this.setDataChart();
  },
  methods: {
    async setDataChart() {
      //const totalPaid =
      await axios
        .get("/api/statistic")
        .then((res) => {
          const setTotalPaid = {
            label: "Total Paid",
            data: res.data.total_price,
            backgroundColor: ["rgba(255, 99, 132, 0.2)"],
            borderColor: ["rgb(255, 99, 132)"],
            borderWidth: 5,
          };

          this.chartData.datasets.push(setTotalPaid);

          const setTotalDept = {
            label: "Total Dept",
            data: res.data.total_dept,
            backgroundColor: ["rgba(255, 99, 132, 0.2)"],
            borderColor: ["rgb(255, 99, 132)"],
            borderWidth: 5,
          };

          this.chartData.datasets.push(setTotalDept);
        })
        .catch((err) => console.log(err));

      //const totalDept =
      // await axios
      //   .get("")
      //   .then((res) => {
      //     const setTotalDept = {
      //       label: "Total Dept",
      //       data: res.data,
      //       backgroundColor: ["rgba(255, 99, 132, 0.2)"],
      //       borderColor: ["rgb(255, 99, 132)"],
      //       borderWidth: 5,
      //     };

      //     this.chartData.datasets.push(setTotalPaid);
      //   })
      //   .catch((err) => console.log(err));
    },
  },
};
</script>