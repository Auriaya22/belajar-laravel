<script src=" {!! asset('blog-asset/assets/web/assets/jquery/jquery.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/bootstrap/js/bootstrap.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/popper/popper.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/smoothscroll/smooth-scroll.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/dropdown/js/nav-dropdown.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/dropdown/js/navbar-dropdown.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/touchswipe/jquery.touch-swipe.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/ytplayer/jquery.mb.ytplayer.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/tether/tether.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/masonry/masonry.pkgd.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/imagesloaded/imagesloaded.pkgd.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/viewportchecker/jquery.viewportchecker.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/parallax/jarallax.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/vimeoplayer/jquery.mb.vimeo_player.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/theme/js/script.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/slidervideo/script.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/gallery/player.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/assets/gallery/script.js') !!}"></script>
<script src=" {!! asset('blog-asset/js/canvasjs.min.js') !!}"></script>
<script src=" {!! asset('blog-asset/js/mousescroll.js') !!}"></script>
<script src=" {!! asset('blog-asset/js/smoothscroll.js') !!}"></script>

<script>
$("#tutupqr").click(function(){
  $("#qrinfaq").hide();
});
window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title: {
      text: "Data kelulusan PTN SMA Alfa Centauri"
    },
    axisY: {
      title: "Jumlah",
      includeZero: false
    },
    axisX: {
      title: "Tahun"
    },
    data: [{
      type: "column",
      yValueFormatString: "#,##0.0#\"\"",
      dataPoints: [
        { label: "2012", y: 108 },
        { label: "2013", y: 83 },
        { label: "2014", y: 145 },
        { label: "2015", y: 145 },
        { label: "2016", y: 128 },
        { label: "2017", y: 140 },
        { label: "2018", y: 192 },
        { label: "2019", y: 157 }

      ]
    }]
  });
  chart.render();
}
</script>
