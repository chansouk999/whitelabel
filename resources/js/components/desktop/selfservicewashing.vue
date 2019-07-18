<template>
  <div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>{{availablerolling}}</th>
                <th>{{totalbets}}</th>
                <th>{{totalrolling}}</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(data,index) in userRolling" :key="index">
                <td>{{formatToPrice(data.available_rolling)}}</td>
                <td>{{formatToPrice(data.totalbet)}}</td>
                <td>{{formatToPrice(data.total_rolling)}}</td>
              </tr>
            </tbody>
          </table>
          <button
            type="button"
            class="btn btn-warning bg-custome btn-lg"
            @click.prevent="submitRolling()"
          >Submit</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["availablerolling", "totalbets", "totalrolling"],
  data() {
    return {
      userRolling: [],
      Userdetail: [],
      availabel: null,
      oldrolling: null
    };
  },
  mounted() {
    this.getUserDetail();
  },
  methods: {
    formatToPrice(value) {
      return `$ ${Number(value)
        .toFixed(2)
        .replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")}`;
    },
    submitRolling() {
      // let vm = this;
      // let data = {
      //   userid: vm.availabel,
      //   availabel: vm.oldrolling
      // };
      axios
        .get("/Savveselfservice")
        .then(res => {
          console.log(res.data);
          let msg = res.data.msg;
          let code = res.data.code;
          if (code == 200) {
          }
          if (code == 99) {
            this.$swal({
              type: "warning",
              title: msg,
              buttonsStyling: false,
              confirmButtonClass: "btn btn-success",
              html: "Please check the box that you fill in",
              timer: 3000
            });
          }
          console.log(res.data);
        })
        .catch(e => {
          console.log(e.response);
        });
      this.getUserDetail();
    },
    getUserDetail() {
      axios.get("/getRolling").then(res => {
        this.userRolling = res.data;
        // this.Userdetail = res.data[1];
        // this.availabel = res.data[1][0].user_id;
        // this.oldrolling = res.data[1][0].AvailableRolling;
      });
    }
  }
};
</script>
<style scoped>
</style>

