<template>
  <div>
    <div class="row">
      <div class="col-md-6 text-left">
        <p class="pl-5">Current Page : Page {{ userdetailpg.currentpage }}</p>
      </div>
      <div class="col-md-6">
        <form class="navbar-form navbar-right m-0 pr-5" role="search">
          <div class="form-group form-search is-empty m-1">
            <input
              type="text"
              class="form-control"
              placeholder="Search"
              v-model="searchuserdetail"
              @keyup.enter="userdata(userdetailpg.path+'?search='+searchuserdetail,method='search')"
            >
            <span class="material-input"></span>
          </div>
          <button type="submit" class="btn btn-white btn-round btn-just-icon">
            <i class="material-icons">search</i>
            <div class="ripple-container"></div>
          </button>
        </form>
      </div>
    </div>
    <br>
    <!-- PLAYER INFO -->
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center"># TEEST</th>
              <th>PlayerID</th>
              <th>Name</th>
              <th>Balance</th>
              <th>online hour</th>
              <th>Currency</th>
              <th>Language</th>
              <th>Total rolling</th>
              <th>Available Rolling</th>
              <th>Online Status</th>
              <th>Register Time</th>
              <th>Register IP</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr class="tr-loader" v-if="loading == true">
              <td colspan="13">
                <div class="cover-load">
                  <div class="lds-ring">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="tr-loader" v-if="loading_text == true">
              <td colspan="13">
                <div class="cover-load">NO DATA IN THIS PAGE</div>
              </td>
            </tr>
            <tr v-for="(data,index) in userdetail" class="userdeteail" v-if="loading == false">
              <td class="text-center">{{ index+1 }}</td>
              <td>{{data.user_id}}</td>
              <td>{{data.name}}</td>
              <td>{{data.userBalance}}</td>
              
              <td>{{data.currency}}</td>
              <td>{{ Math.floor(data.totalOnlineHour / 3600)}}</td>
              <td>{{data.lang}}</td>
              <td>{{data.TotalRolling}}</td>
              <td>{{data.AvailableRolling}}</td>
              <td>{{data.userStatus}}</td>
              <td>{{data.created_at}}</td>
              <td>{{data.accessIP}}</td>
              <!-- <div class="col-md-5 col-lg-5"> -->
              <button @click.prevent="getID($event,(data.user_id))">
                <i class="fa fa-edit"></i>
                <span>Get Data</span>
              </button>

              <button
                type="button"
                rel="tooltip"
                class="btn btn-primary"
                @click="viewuserdata(method='game',data.user_id)"
              >Game History</button>
              <button
                type="button"
                rel="tooltip"
                class="btn btn-primary"
                @click="viewuserdata(method='topup',data.user_id)"
              >Top-up History</button>
              <button
                type="button"
                rel="tooltip"
                class="btn btn-primary"
                @click="viewuserdata(method='withdraw',data.user_id)"
              >Withdraw History</button>
              <button
                type="button"
                rel="tooltip"
                class="btn btn-primary"
                @click="viewuserdata(method='access',data.user_id)"
              >Access Record</button>
              <button
                type="button"
                rel="tooltip"
                class="btn btn-primary"
                @click="viewuserdata(method='action',data.user_id)"
              >Action Record</button>
              <!-- </div> -->
            </tr>
          </tbody>
        </table>
      </div>
      <!-- < -->
    </div>
    <!-- PLAYER INFO -->
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item">
          <select
            class="browser-default custom-select"
            v-model="userdetailselectpage"
            @change="userdata(userdetailselectpage,method='listpage')"
          >
            <option selected v-for="page in userdetailpg.last_page" :value="page">{{ page }}</option>
          </select>
        </li>
        <li class="page-item">
          <span
            class="page-link"
            @click="userdata(userdetailpg.prev_page_url,method='previous')"
          >Previous</span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">{{ userdetailpg.currentpage - 1 }}</a>
        </li>
        <li class="page-item active">
          <span class="page-link">
            {{userdetailpg.currentpage}}
            <span class="sr-only">{{userdetailpg.currentpage}}</span>
          </span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">{{ userdetailpg.currentpage + 1 }}</a>
        </li>
        <li class="page-item">
          <a
            class="page-link"
            href="#"
            @click="userdata(userdetailpg.next_page_url,method='next')"
          >Next</a>
        </li>
      </ul>
    </nav>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    getID(event, user_id) {
      console.log(user_id);
    },
    viewuserdata(method, id) {
      axios
        .get("getgamehistory", { reqmethod: method, user_id: id })
        .then(res => {
          console.log(res.data);
        })
        .catch(e => {
          console.log(e.response);
        });
    }
  },
  mounted() {}
};
</script>

<style scoped>
</style>

