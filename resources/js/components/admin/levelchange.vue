<template>
  <div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 text-left">
            <p class="pl-5">Current Page : Page</p>
          </div>
          <div class="col-md-4">
            <button
              class="btn btn-primary  btn-round"
              data-toggle="modal"
              data-target="#editPrice"
              @click="medthod='insert'"
            >Create New Level</button>
          </div>
          <div class="col-md-4 text-right">
            
            <button
              class="btn btn-link"
              id="levelchange"
              data-toggle="modal"
              data-target=".levelchange"
            >
              <i class="tim-icons icon-zoom-split"></i>
              <span class="d-lg-none d-md-block">Search</span>
            </button>
            <div
              class="modal modal-search fade levelchange"
              tabindex="-1"
              role="dialog"
              aria-labelledby="levelchange"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <input
                      type="text"
                      class="form-control"
                      id="shinfo"
                      placeholder="userapiID/refernce/gameID"
                    >
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="tim-icons icon-simple-remove"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Title</th>
                  <th>Level</th>
                  <th>Amount</th>
                  <th>Percentage</th>
                  <th>Create at</th>
                  <th>Update_at</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="data in DATASelfservice">
                  <td class="text-center">{{data.id}}</td>
                  <td>{{data.title}}</td>
                  <td>{{data.level}}</td>
                  <td>{{data.Amount}}</td>
                  <td>{{data.percentage}}</td>
                  <td>{{data.created_at}}</td>
                  <td>{{data.updated_at}}</td>
                  <td class="td-actions text-right">
                    <span data-toggle="modal" data-target="#editPrice">
                      <button
                        type="button"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="Edit"
                        class="btn btn-primary  btn-sm btn-icon"
                        @click="edit(data.id)"
                      >
                        <i class="tim-icons icon-pencil"></i>
                      </button>
                    </span>
                    <span data-toggle="modal" data-target=".Update">
                      <button
                        @click="Delete(data.id)"
                        type="button"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="Delete"
                        class="btn btn-danger btn-sm btn-icon"
                      >
                        <i class="tim-icons icon-trash-simple"></i>
                      </button>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="editPrice"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form class="form-horizontal" method="post" action>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{level}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <label class="col-md-3 col-form-label">Title</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <!-- shareholdername
                          shareholderpermision-->
                          <input
                            type="text"
                            name="title"
                            class="form-control"
                            placeholder="Title..."
                            v-model="title"
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Level</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <!-- shareholdername
                          shareholderpermision-->
                          <input
                            type="text"
                            name="level"
                            class="form-control"
                            placeholder="Level..."
                            v-model="level"
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Amount</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <!-- shareholdername
                          shareholderpermision-->
                          <input
                            type="number"
                            name="amount"
                            class="form-control"
                            placeholder="Amount..."
                            v-model="amount"
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Percentage</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <!-- shareholdername
                          shareholderpermision-->
                          <input
                            type="text"
                            name="percentage"
                            class="form-control"
                            placeholder="Percentage..."
                            v-model="percentage"
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button
                type="submit"
                class="btn btn-primary"
                @click.prevent="saveLavel(getidlavel)"
              >Save & Continue</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal -->
  </div>
</template>
<script>
export default {
  data() {
    return {
      medthod: null,
      getidlavel: null,
      title: null,
      level: null,
      amount: null,
      percentage: null,
      DATASelfservice: [],
      editLevel: [],
      lavel: null
    };
  },
  mounted() {
    this.getdataSelfservice();
  },
  methods: {
    Delete(id) {
      this.$swal({
        title: "Deleted?",
        text: "Are you sure need to delete this card",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false,
        allowOutsideClick: false
      })
        .then(res => {
          console.log(res);
          // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
          if (res.dismiss === "cancel") {
            swal({
              title: "Cancelled",
              text: "Your card cancelled to delete)",
              type: "error",
              confirmButtonClass: "btn btn-primary ",
              timer: 1000,
              buttonsStyling: false
            }).catch(swal.noop);
          } else {
            axios
              .post("/deleteLevel/" + id)
              .then(res => {
                console.log(res);
              })
              .catch(e => {
                console.log(e.response);
              });
            // window.location.href = "/logout"; //Will logout
            swal({
              title: "Success!",
              text: "We hope to see you as soon.",
              type: "success",
              confirmButtonClass: "btn btn-success",
              timer: 1000,
              buttonsStyling: false
            }).catch(swal.noop);
             this.getdataSelfservice();
          }
        })
        .catch(swal.noop);
      // alert(id, index);
    },
    edit(id) {
      axios
        .post("/editlevel/" + id)
        .then(res => {
          this.editLevel = res.data;
          this.title = res.data[0].title;
          this.level = res.data[0].level;
          this.amount = res.data[0].Amount;
          this.percentage = res.data[0].percentage;
          this.getidlavel = res.data[0].id;
          this.getdataSelfservice();

          console.log(res.data);
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    getdataSelfservice() {
      axios
        .get("/Selfservice")
        .then(res => {
          console.log(res.data);
          this.DATASelfservice = res.data;
        })
        .catch(e => {
          console.log(e.response);
        });
    },
    saveLavel(getidlavel) {
      let vm = this;
      if (
        vm.title == null ||
        vm.level == null ||
        vm.amount == null ||
        vm.percentage == null
      ) {
        this.$swal({
          type: "warning",
          title: "Error",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success",
          text: "Please Complete the form!"
        });
        // alert("Please Complete the form")
      } else {
        let data = {
          id: getidlavel,
          title: this.title,
          level: this.level,
          amount: this.amount,
          percentage: this.percentage,
          medthod: this.medthod
        };
        axios
          .post("/saveLavel", data)
          .then(res => {
            console.log(res.data);
            let code = res.data.code;
            let msg = res.data.msg;
            let data = res.data.data;
            if (code == 200) {
              this.getshareholder();
              alert(msg);
            }
          })
          .catch(e => {
            console.log(e.response);
          });
      }
      $("#editPrice").modal("hide");
      swal({
        title: "Success!",
        text: "We hope to see you as soon.",
        type: "success",
        confirmButtonClass: "btn btn-success",
        timer: 2000,
        buttonsStyling: false
      }).catch(swal.noop);
      this.getdataSelfservice();
    }
  }
};
</script>
<style scoped>
</style>

