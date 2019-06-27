<template>
  <div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Available Rolling</th>
                <th>Total Bets</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="data in Userdetail">
                <td class="td-number text-left">
                 {{data.AvailableRolling}}
                </td>
                <td class="td-number text-left">
                     <!-- {{data.AvailableRolling}} -->
                     1213435
                </td>
                <td class="td-number text-left">
                     {{data.TotalRolling}}
                </td>
              </tr>
            </tbody>
          </table>
          <button
            type="button"
            rel="tooltip"
            class="btn btn-warning bg-custome btn-lg"
            data-original-title
            title
          >Submit</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      Userdetail: []
    };
  },
  mounted() {
    this.getUserDetail();
  },
  methods: {
    getUserDetail() {
      axios.get("/getuserdetail").then(res => {
        // console.log(res.data);
        this.Userdetail = res.data;
      });
    }
  }
};
</script>
<style scoped>
</style>

