<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        //direction: getDirection(),
        // navigation: {
        //   nextEl: '.swiper-button-next',
        //   prevEl: '.swiper-button-prev',
        // },
        // on: {
        //   resize: function () {
            //swiper.changeDirection(getDirection());
        //   },
        // },
        breakpoints: {
    0: {
      navigation: {
        enabled: false,
      },
    },

    1400: {
      slidesPerView: '4'
    },

    800: {
      slidesPerView: '3'
    },
  },


      });
  
      function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';
  
        return direction;
      }
    </script>