<template>
  <div class="content-wrap">
    <div class="title-list">
      <div class="title-list-wrap">
        <ul v-for="title of titles" v-bind:key="title.name">
          <a href="/home" class="content-title">
            <li>{{ title.name }}</li>
          </a>
        </ul>
      </div>
    </div>
    <div class="header-img">
      <img class="header-img" :src="headerImage" alt="logo">
    </div>
    <div class="main-content">
      <!-- <div class="main-content-wrap" v-for="title of titles" v-bind:key="title.id"> -->
      <div class="main-img">
        <img class="main-img" :src="mainImage" alt="logo">
      </div>
      <div class="main-img-title">{{headerTitle}}</div>
      <div class="main-detail-img">
        <img class="main-detail-img" :src="detailImage" alt="logo">
      </div>
      <div class="main-detail">
        <h2>{{headDitail}}</h2>
        <span class="main-detail-text">{{detail}}</span>
      </div>

      <!-- </div> -->
    </div>
  </div>
</template>

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
          img_2: require("../../assets/img/Amanda-2.jpg"),
          detail:
            "夏の日差し溢れるパリ。便利屋業として働く青年ダヴィッドは、パリにやってきた美しい女性レナと出会い、恋に落ちる。 穏やかで幸せな生活を送っていたが―― 突然の悲劇で大切な姉が亡くなり、ダヴィッドは悲しみに暮れる。そして彼は、身寄りがなくひとりぼっちになってしまった姪アマンダの世話を引き受けることになる…。悲しみは消えないが、それでも必死に逞しく生きようとするアマンダと共に過ごすことで、ダヴィッドは次第に自分を取り戻していく――。愛する人を奪われ遺された人たちは、どのように折り合いをつけながらその先の人生を生きていくのか。その一つの答えを、本作は青年と少女にとことん寄り添い映し出す。そして、今もなお傷を抱えた、現在のパリの社会情勢が垣間見える。あの頃にはもう二度と戻れないが、この映画は誰かの存在によって、悲しみはきっと乗り越えられるということを教えてくれる。希望の光が差し込むラストは、観客を大きな感動に包み込む。",
          headDitail: "ふたりなら、きっと乗り越えられる＿＿＿＿"
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
      headerImage: require("../../assets/img/Amanda-2.jpg"),
      mainImage: require("../../assets/img/Amanda-1.jpg"),
      headerTitle: "AMANDA",
      detailImage: require("../../assets/img/Amanda-3.jpg"),
      detail:
        "夏の日差し溢れるパリ。便利屋業として働く青年ダヴィッドは、パリにやってきた美しい女性レナと出会い、恋に落ちる。 穏やかで幸せな生活を送っていたが―― 突然の悲劇で大切な姉が亡くなり、ダヴィッドは悲しみに暮れる。そして彼は、身寄りがなくひとりぼっちになってしまった姪アマンダの世話を引き受けることになる…。悲しみは消えないが、それでも必死に逞しく生きようとするアマンダと共に過ごすことで、ダヴィッドは次第に自分を取り戻していく――。愛する人を奪われ遺された人たちは、どのように折り合いをつけながらその先の人生を生きていくのか。その一つの答えを、本作は青年と少女にとことん寄り添い映し出す。そして、今もなお傷を抱えた、現在のパリの社会情勢が垣間見える。あの頃にはもう二度と戻れないが、この映画は誰かの存在によって、悲しみはきっと乗り越えられるということを教えてくれる。希望の光が差し込むラストは、観客を大きな感動に包み込む。",
      headDitail: "ふたりなら、きっと乗り越えられる＿＿＿＿"
    };
  },
  mounted() {
    console.log("MainContent-2");
    // console.log(actors);
  }
};
</script>

<style>
ul {
  list-style-type: none;
  text-align: center;
}
.title-list {
  font-size: 30px;
  float: left;
}
.title-list-wrap {
  margin-top: 100px;
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
.title-list {
  background-color: #000000;
  opacity: 0.8;
  width: 500px;
  height: 657px;
  float: left;
  margin-left: 51px;
}
.header-img {
  float: right;
  width: 786px;
  height: 600px;
  margin-right: 51px;
  margin-left: 51px;
  opacity: 0.9;
}
.main-img {
  width: 439px;
  height: 522px;
  margin-top: 120px;
  margin-left: 60px;
}
.main-img-title {
  color: #707070;
  font-size: 140px;
  margin-top: 380px;
  margin-right: 140px;
  float: right;
  text-align: center;
}
.main-detail {
  margin-top: 804px;
  margin-left: 120px;
  padding: 50px;
  height: auto;
  width: 1200px;
  background: #fff;
}
.main-detail-img {
  margin-top: 200px;
  margin-left: 35px;
  text-align: center;
  height: 700px;
  width: 1269px;
}
.main-detail-text {
  font-size: 25px;
  margin-top: 50px;
  display: block;
}
h2 {
  font-size: 39px;
}
</style>
