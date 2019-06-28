<template>
  <div>
    <div
      class="modal fade withdraw-history"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">PlayerID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-nav-tabs">
              <div class="card-header card-header-success">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Time</th>
                      <th>withdrawID</th>
                      <th>Amount</th>
                      <th class="text-right">Bank account</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>hh:mm dd/mm/yyy</td>
                      <td>withdrawID</td>
                      <td>$500</td>
                      <td class="text-right">e.g xxx xxx xxx</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!--/modal withdraw history -->

   
  </div>
</template>
<script>
import { adminmixin } from "./adminmixin.js";

export default {
  mixins: [adminmixin],
  data() {
    return {
  
    };
  },
  methods: {
  
  }
};
</script>
 <style scoped>
</style>
