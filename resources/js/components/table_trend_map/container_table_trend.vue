<template>
  <div>
    <span class="d-none d-xl-block">
      <hr v-if="countTable>1" class="style-add">
    </span>
    <div class="row">
      <div class="col-1 d-none d-xl-block">
        <div v-show="isShowTitle">
          <div class="d-flex">
            <button
              @click="setSwichShowTable('first')"
              class="btn text-uppercase button_type"
            >{{firstdigit}}</button>
            <div class="arrow-right1" v-show="swichShowTable=='first'"></div>
          </div>
          <div class="d-flex">
            <button
              @click="setSwichShowTable('last')"
              class="btn text-uppercase button_type"
            >{{lastdigit}}</button>
            <div class="arrow-right2" v-show="swichShowTable=='last'"></div>
          </div>
          <div class="d-flex">
            <button
              @click="setSwichShowTable('both')"
              class="btn text-uppercase button_type"
            >{{bothdigit}}</button>
            <div class="arrow-right3" v-show="swichShowTable=='both'"></div>
          </div>
          <div class="d-flex">
            <button
              @click="setSwichShowTable('two')"
              class="btn text-uppercase button_type"
            >{{twodigit}}</button>
            <div class="arrow-right4" v-show="swichShowTable=='two'"></div>
          </div>
        </div>
      </div>
      <div class="col-11 mobile-margin" >
        <div v-if="swichShowTable=='first'">
          <tableTrentChartFirst
            :lastGameID="lastGameID"
            :timeGame="timeGame"
            :rowTable="rowTable"
            :tbdatachart="tbdatachart"
            :isFirstTime="isFirstTime"
            :stockname="stockname"
            :loop="loop"
            name="first"
            :b="b"
            :s="s"
            :o="o"
            :e="e"
            :u="u"
            :m="m"
            :l="l"
          ></tableTrentChartFirst>
        </div>
        <div id="last" v-if="swichShowTable=='last'">
          <tableTrentChartLast
            :lastGameID="lastGameID"
            :timeGame="timeGame"
            :rowTable="rowTable"
            :tbdatachart="tbdatachart"
            :isFirstTime="isFirstTime"
            :stockname="stockname"
            :loop="loop"
            name="last"
            :b="b"
            :s="s"
            :o="o"
            :e="e"
            :u="u"
            :m="m"
            :l="l"
          ></tableTrentChartLast>
        </div>
        <div id="both" v-if="swichShowTable=='both'">
          <tableTrentChartBoth
            :lastGameID="lastGameID"
            :timeGame="timeGame"
            :rowTable="rowTable"
            :isFirstTime="isFirstTime"
            :stockname="stockname"
            :loop="loop"
            name="both"
            :tbdatachart="tbdatachart"
            :b="b"
            :s="s"
            :o="o"
            :e="e"
            :u="u"
            :m="m"
            :l="l"
          ></tableTrentChartBoth>
        </div>
        <div id="two" v-if="swichShowTable=='two'">
          <tableTrentChartTwo
            :lastGameID="lastGameID"
            :timeGame="timeGame"
            :rowTable="rowTable"
            :isFirstTime="isFirstTime"
            :stockname="stockname"
            :loop="loop"
            name="two"
            :tbdatachart="tbdatachart"
            :b="b"
            :s="s"
            :o="o"
            :e="e"
            :u="u"
            :m="m"
            :l="l"
          ></tableTrentChartTwo>
        </div>
      </div>
    </div>

    <div class="row"></div>
  </div>
</template>
<script>
import tableTrentChartFirst from "./tablechartfirst.vue";
import tableTrentChartLast from "./tablechartlast.vue";
import tableTrentChartBoth from "./tablechartboth";
import tableTrentChartTwo from "./tablecharttwo";
export default {
  props: {
    rowTable: {
      type: Number,
      default: 6
    },
    isShowTitle: {
      type: Boolean,
      default: true
    },
    countTable: Number,
    stockname: String,
    loop: String,
    name: String,
    tbdatachart: String,
    isFirstTime: Number,
    firstdigit: String,
    lastdigit: String,
    bothdigit: String,
    twodigit: String,
    b: String,
    s: String,
    o: String,
    e: String,
    u: String,
    m: {
      type: String,
      required: true
    },
    l: {
      type: String,
      required: true
    },
    lastGameID: {
      type: String,
      required: true
    },
    timeGame: {
      type: String,
      required: true
    }
    // showlast:Boolean
  },
  // data(){
  //   return{
  //     isLoaded:false
  //   }
  // },
  mounted() {
     console.log("tt"+ this.tbdatachart)
    if (this.countTable == 1) {
      this.swichShowTable = "first";
    } else if (this.countTable == 2) {
      this.swichShowTable = "last";
    } else if (this.countTable == 3) {
      this.swichShowTable = "both";
    } else if (this.countTable == 4) {
      this.swichShowTable = "two";
    }
  },
  components: {
    tableTrentChartFirst,
    tableTrentChartLast,
    tableTrentChartBoth,
    tableTrentChartTwo
  },
  data() {
    return {
      // isshowfirsttable: false,
      // isshowlasttable: false,
      // isshowbothtable: false,
      // isshowtwotable: false,
      swichShowTable: ""
    };
  },
  watch: {
    swichShowTable() {
      // alert("suss")
    }
  },
  methods: {
    setSwichShowTable(value) {
      this.swichShowTable = value;
    },
    //table trend chart for mobile
    // showfirsttable() {
    //   (this.isshowfirsttable = true),
    //     (this.isshowlasttable = false),
    //     (this.isshowbothtable = false),
    //     (this.isshowtwotable = false);
    //   // console.log(this.isshowfirsttable);
    // },
    // showlasttable() {
    //   (this.isshowfirsttable = false),
    //     (this.isshowlasttable = true),
    //     (this.isshowbothtable = false),
    //     (this.isshowtwotable = false);
    //   // console.log(this.isshowlasttable);
    // },
    // showbothtable() {
    //   (this.isshowfirsttable = false),
    //     (this.isshowlasttable = false),
    //     (this.isshowbothtable = true),
    //     (this.isshowtwotable = false);
    // },
    // showtwotable() {
    //   (this.isshowfirsttable = false),
    //     (this.isshowlasttable = false),
    //     (this.isshowbothtable = false),
    //     (this.isshowtwotable = true);
    // }
  }
};
</script>
