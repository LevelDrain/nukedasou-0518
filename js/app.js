//note用csv取得
function csv2Array(filePath) {
  var csvData = new Array();
  var data = new XMLHttpRequest();
  data.open("GET", filePath, false);
  data.send(null);

  var LF = String.fromCharCode(10);
  var lines = data.responseText.split(LF);
  for (var i = 0; i < lines.length; ++i) {
    var cells = lines[i].split(",");
    if (cells.length != 1) {
      csvData.push(cells);
    }
  }
  return csvData;
}
var result = csv2Array('https://nukedasou.maeda-design-room.net/csv/kairanban.csv');

$(function () {
  //アコーディオン
  var W = $(window).width();
  var X = 300;
  var Y = 768;
  if (X < W <= Y) {
    //住人名簿
    $('.js-button_1').click(function () {
      $(this).next('.js-content_1').slideToggle();
      $(this).prev('.c-toggleButton').toggleClass("open");
      $('.js-button_1').not($(this)).next('.js-content_1').slideUp();
      $('.js-button_1').not($(this)).prev('.c-toggleButton').removeClass("open");
      $('.js-button_1.stay').not($(this)).prev('.c-toggleButton').toggleClass("open");
      $('.p-list--inner').scrollTop(0);
    });

    //活動報告
    $('.js-button_2').click(function () {
      $(this).next('.js-content_2').slideToggle();
      $(this).prev('.c-toggleButton').toggleClass("open");
      $('.js-button_2').not($(this)).next('.js-content_2').slideUp();
      $('.js-button_2').not($(this)).prev('.c-toggleButton').removeClass("open");
      $('.js-button_2.stay').not($(this)).prev('.c-toggleButton').toggleClass("open");
      $('.p-list--inner').scrollTop(0);
    });
  }

  //リサイズしたらリロード
  var timer = false;
  var prewidth = $(window).width()
  $(window).resize(function () {
    if (timer !== false) {
      clearTimeout(timer);
    };
    timer = setTimeout(function () {
      var nowWidth = $(window).width()
      if (prewidth !== nowWidth) {
        location.reload();
      };
      prewidth = nowWidth;
    }, 200);
  });

  //窓枠アニメーション
  $('#slide-open-switch').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
    if (isInView) {
      $('.window-slide').stop().addClass('window-open');
    } else {
      $('.window-slide').stop().removeClass('window-open');
    }
  });

  //note
  var randNam = Math.floor(Math.random() * 45);
  var nyuukyo = result[0][1];
  var tsushin = result[0][3];
  var kairan = result[randNam][5];

  $('#nyuukyoNote').attr('src', nyuukyo);
  $('#tsushinNote').attr('src', tsushin);
  $('#kairanNote').attr('src', kairan);

});
