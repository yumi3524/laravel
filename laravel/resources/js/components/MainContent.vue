<template>
  <div class="card-body">
    <div class="top-content">
      <div class="main-title">
        <ul v-for="title of titles" v-bind:key="title.name">
          <a href="/home" class="content-title">
            <li>{{ title.name }}</li>
          </a>
        </ul>
      </div>
      <div class="main-image">
        <img class="main-image-top" :src="mainImage" alt="logo">
      </div>
    </div>

    <div class="movie-list">
      <div class="movie-list-wrap" v-for="title of titles" v-bind:key="title.id">
        <a href="/home">
          <img
            class="movie-list-img"
            @mouseover="mouseOverImage"
            @mouseout="mouseOutImage"
            :src="title.img_1"
            width
            alt="logo"
          >
        </a>
        <div class="movie-list-Heading-wrap">
          <div id="movie-list-title" class="movie-list-title">{{title.name}}</div>
          <div class="movie-list-sub-title">『{{title.subTitle}}』</div>
          <div class="movie-list-director">{{title.director}}</div>
          <div class="movie-list-actors">{{title.actors}}</div>
        </div>
        <!-- <div class="undrline"></div> -->
      </div>
    </div>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
    <div id="page_top">
      <a href="#"></a>
    </div>
  </div>
</template>
<style scoped>
ul {
  list-style-type: none;
  text-align: center;
}
.card-body {
  margin-top: 90px;
}
.main-title {
  font-size: 30px;
  float: left;
  margin-left: 8%;
}
.main-image {
  background-color: #707070;
  opacity: 0.5;
  width: 698px;
  height: 442px;
  border-radius: 35px;
  float: right;
  margin-right: 8%;
  box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.4);
}
.main-image-top {
  width: 698px;
  height: 442px;
  border-radius: 35px;
}
.content-title {
  color: #ccc;
}
a:hover {
  color: #000000;
}
a:checked {
  color: #ccc;
}
.top-content {
  margin-bottom: 50px;
  height: 500px;
  width: 1440px;
}

.movie-list-wrap {
  width: 1440px;
  height: 401px;
  margin-top: 50px;
  margin-left: 50px;
}
.undrline {
  border-bottom: dotted 5px #ccc;
  width: 80%;
  margin: 40px;
}
.movie-list-img {
  opacity: 0.8;
  width: 215px;
  height: 302px;
  margin-left: 160px;
  box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.4);
}

.movie-list-Heading-wrap {
  float: right;
  margin-top: 40px;
  margin-right: 430px;
}
.movie-list-title {
  font-size: 48px;
}
.movie-list-sub-title {
  font-size: 36px;
}
#page_top {
  width: 60px;
  height: 60px;
  position: fixed;
  right: 0;
  bottom: 0;
  opacity: 0.6;
  margin: 10px;
}
#page_top a {
  width: 60px;
  height: 60px;
  text-decoration: none;
}
#page_top a::before {
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  content: "\f139";
  font-size: 50px;
  color: #707070;
}
</style>
<script>
export default {
  data: function() {
    return {
      titles: [
        {
          id: 1,
          name: "Amanda",
          subTitle: "Elvis has left the Building",
          director: "ミカエル・アース",
          actors:
            "ヴァンサン・ラコスト,イゾール・ミュルトリエ,ステイシー・マーティン",
          img_1: require("../../assets/img/Amanda-1.jpg"),
          img_2: require("../../assets/img/Amanda-2.jpg")
        },
        {
          id: 2,
          name: "The Devil Wears Prada",
          subTitle: "Elvis has left the Building",
          director: "ミカエル・アース",
          actors:
            "ヴァンサン・ラコスト,イゾール・ミュルトリエ,ステイシー・マーティン",
          img_1: require("../../assets/img/devilwearsprada-1.jpg"),
          img_2: require("../../assets/img/devilwearsprada-2.jpg")
        },
        {
          id: 3,
          name: "Lady Bird",
          subTitle: "Elvis has left the Building",
          director: "ミカエル・アース",
          actors:
            "ヴァンサン・ラコスト,イゾール・ミュルトリエ,ステイシー・マーティン",
          img_1: require("../../assets/img/LadyBird-1.jpg"),
          img_2: require("../../assets/img/LadyBird-2.jpg")
        },
        {
          id: 4,
          name: "Mammy",
          subTitle: "Elvis has left the Building",
          director: "ミカエル・アース",
          actors:
            "ヴァンサン・ラコスト,イゾール・ミュルトリエ,ステイシー・マーティン",
          img_1: require("../../assets/img/mammy-1.jpg"),
          img_2: require("../../assets/img/mammy-2.jpg")
        },
        {
          id: 5,
          name: "Call me  by your name",
          subTitle: "Elvis has left the Building",
          director: "ミカエル・アース",
          actors:
            "ヴァンサン・ラコスト,イゾール・ミュルトリエ,ステイシー・マーティン",
          img_1: require("../../assets/img/callmebyyourname-1.jpg"),
          img_2: require("../../assets/img/callmebyyourname-2.jpg")
        },
        {
          id: 6,
          name: "Pay It Forward",
          subTitle: "Elvis has left the Building",
          director: "ミカエル・アース",
          actors:
            "ヴァンサン・ラコスト,イゾール・ミュルトリエ,ステイシー・マーティン",
          img_1: require("../../assets/img/payitforward-1.jpg"),
          img_2: require("../../assets/img/payitforward-2.jpg")
        },
        {
          id: 7,
          name: "Little MIss Sunshine",
          subTitle: "Elvis has left the Building",
          director: "ミカエル・アース",
          actors:
            "ヴァンサン・ラコスト,イゾール・ミュルトリエ,ステイシー・マーティン",
          img_1: require("../../assets/img/littleMiss-1.jpg"),
          img_2: require("../../assets/img/littleMiss-2.jpg")
        }
      ],
      mainImage: require("../../assets/img/Amanda-2.jpg")
    };
  },
  methods: {
    cutActors: function() {
      return (this.titles.actors = this.titles.actors.split(","));
    },
    mouseOverImage: function() {
      console.log("over!!");
      //titleにアンダーラインを引く処理
    },
    mouseOutImage: function() {
      console.log("out!!");
      //titleのアンダーラインを外す処理
    },
    cangeMainImage: function() {
      console.log("change!");
    }
  },

  mounted() {
    console.log("test.");
    // console.log(actors);
  }
};
</script>