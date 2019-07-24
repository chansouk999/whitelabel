<template>
  <div>
    <div class="main-cover container">
      <div class="center-chat">
        <div class="user-one" v-for="(data,index) in chat" :key="index" v-if="index %2 ==0">

          <div class="content-one">{{data.msg}}</div>
        </div>
        <div class="user-two" v-else>
          <div class="content-one">{{data.msg}}</div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      hello: "HELLO CAHT",
      chat: [
        {
          user: "001",
          msg: "helloloasddddddddddddddddddddddddddddddddddlolooll",
          img: "assets/img/5U7IJvy.png",
          owner: 0
        },
        {
          user: "002",
          msg: "hellolololerrrrrrrrrrrrrrooll",
          img: "assets/img/5U7IJvy.png",
          owner: 0
        },
        {
          user: "003",
          msg: "hellololoerrrrrrrrrrrrrrrrrrtlooll",
          img: "assets/img/5U7IJvy.png",
          owner: 1
        },
        {
          user: "004",
          msg: "hellolololooll",
          img: "assets/img/5U7IJvy.png",
          owner: 1
        },
        {
          user: "005",
          msg: "hellolololooll",
          img: "assets/img/5U7IJvy.png",
          owner: 0
        },
        {
          user: "006",
          msg: "hellolololooll",
          img: "assets/img/5U7IJvy.png",
          owner: 1
        },
        {
          user: "007",
          msg: "hellolololooll",
          img: "assets/img/5U7IJvy.png",
          owner: 0
        },
        {
          user: "008",
          msg: "hellolololooll",
          img: "assets/img/5U7IJvy.png",
          owner: 1
        },
        {
          user: "009",
          msg: "hellolololooll",
          img: "assets/img/5U7IJvy.png",
          owner: 0
        },
        {
          user: "010",
          msg: "hellolololooll",
          img: "assets/img/5U7IJvy.png",
          owner: 0
        },
        {
          user: "010",
          msg: "hellolololooll",
          img: "assets/img/5U7IJvy.png",
          owner: 0
        },

      ]
    };
  }
};
</script>
<style scoped>
.main-cover {
  background: #272727;
  height: 100%;
  width: 100%;
  position: fixed;
}
.center-chat {
  margin: 0 auto;
  position: relative;
  top: 10%;
  width: 1200px;
  border: 1px solid #ffffff3b;
  height: 1000px;
  overflow: scroll;
  background: #272727;
}
.user-one {
  width: 50%;
  height: 0 auto;
  /* float: right; */
  /* padding: 20px; */
  background: #9c9797;
}
.content-one {
  padding: 20px;
}
.user-two {
  width: 50%;
  height: 0 auto;
  float: right;
  /* padding: 20px; */
  background: #9c9797;
}
.content-one {
}
.user-pic {
  width: 50px;
  height: 50px;
  left: 10px;
  top: 10px;
  position: relative;
  padding: 10px;
}
</style>
