<template>
  <div>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-4 text-left">
        <p class="pl-5">Current Page : {{Page}}</p>
      </div>
      <div class="col-md-4 text-center d-flex">
        <div class="form-check mr-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value />
            Top-Up
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value />
            Withdraw
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
      </div>
      <div class="col-md-4 text-right">
        <button class="btn btn-link" data-toggle="modal" data-target=".withdraw">
          <i class="tim-icons icon-zoom-split"></i>
          <span class="d-lg-none d-md-block">Search</span>
        </button>
        <div
          class="modal modal-search fade withdraw"
          tabindex="-1"
          role="dialog"
          aria-labelledby="withdraw"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input
                  type="text"
                  class="form-control"
                  placeholder="userid / topup / withdraw"
                  v-model="watchsearch"
                />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Time</th>
              <th>UserID</th>
              <th>Event</th>
              <th>Rederence</th>
              <th>Balance Before Event</th>
              <th>AMount</th>
              <th>Balance After Event</th>
              <th>Details</th>
              <th>Served by</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(data,index) in filterData" v-if="index >= A && index <= B">
              <td class="text-center">{{index+1}}</td>
              <td>{{data.Time}}</td>
              <td>{{data.user_id}}</td>
              <td>{{data.event}}</td>
              <td>{{data.reference}}</td>
              <td>{{data.balance_before_event}}</td>
              <td>{{data.amount}}</td>
              <td>{{data.balance_after_event}}</td>
              <td>method : {{ JSON.parse(data.deatil).method }} ,{{ JSON.parse(data.deatil).cardno }} ,registerCity : {{ JSON.parse(data.deatil).regcity }} ,RegisterProvince : {{ JSON.parse(data.deatil).regprovince }} ,Branch : {{ JSON.parse(data.deatil).branch }}</td>
              <td>{{data.served_by}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- PLAYER INFO -->
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item">
          <span class="page-link" @click="paginate(method='previous')">Previous</span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">{{Page-1}}</a>
        </li>
        <li class="page-item active">
          <span class="page-link">
            {{Page}}
            <span class="sr-only">(current)</span>
          </span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">{{Page+1}}</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" @click="paginate(method='next')">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</template>
<script>
export default {
  data() {
    return {
      watchsearch: null,
      A: 0,
      B: 19,
      Page: 1,
      getevnthistorydata: []
    };
  },

  mounted() {
    this.getevnthistory();
  },
  watch: {
    //   watchsearch
  },
  computed: {
    filterData() {
      if (this.watchsearch) {
        return this.getevnthistorydata.filter(res => {
          return (
            res.event.includes(this.watchsearch) ||
            res.user_id.includes(this.watchsearch)
          );
        });
      } else {
        return this.getevnthistorydata;
      }
    }
  },
  methods: {
    getevnthistory() {
      axios.get("/getevnthistory").then(res => {
        this.getevnthistorydata = res.data.data;
      });
    },
    paginate(method) {
      this.watchsearch = null;
      let vm = this;
      if (method == "previous") {
        if (vm.A > 0) {
          vm.A -= 20;
          vm.B -= 20;
          vm.Page -= 1;
        }
      } else {
        if (vm.B < vm.getevnthistorydata.length) {
          vm.A += 20;
          vm.B += 20;
          vm.Page += 1;
        }
      }
    }
  }
};
</script>

<style scoped>
</style>

