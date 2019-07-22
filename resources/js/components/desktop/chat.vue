<template>
  <div>
    <navbar></navbar>
    <div class="main-panel">
      <!-- <navbars></navbars> -->
      <div class="content px-0">
        <div class="home-wrap">
          <div class="content-wrapper container">
            <div class="row">
              <div class="col-4">
                <div class="card card-primary card-outline">
                  <div class="card m-0">
                    <div class="card-body pb-0">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tim-icons icon-zoom-split"></i>
                          </div>
                        </div>
                        <input
                          type="text"
                          v-model="search"
                          class="form-control"
                          placeholder="Search Mail"
                        />
                      </div>
                      <div class="table-full-width table-responsive ps ps--active-y">
                        <table class="table">
                          <tbody>
                            <tr class="pointer">
                              <td class="text-center">
                                <div class="photo">
                                  <img src="assets/img/tania.jpg" alt="Table image" />
                                </div>
                              </td>
                              <td>
                                <p class="title">TSETESTEST</p>
                                <p class="text-muted">TSETESTEST</p>
                              </td>
                              <td class="td-actions text-right">121654123</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-8">
                <div class="card-body"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footers></footers>
  </div>
</template>
<script>
import navbar from "./navbar";
import footers from "./footers";
export default {
  components: {
    navbar,
    footers
  },
  data() {
    return {
      search: ""
    };
  }
};
</script>
<style scoped>
.table > tbody > tr > td .photo {
  height: 80px;
  width: 80px;
}
tr.pointer {
  cursor: pointer;
}
</style>
