<x-ui-layout>
    <div id="home">
        <div class="relative w-full h-[320px]" id="home">
            <div class="absolute inset-0 opacity-70">
                <img src="/images/background.jpg" alt="Background Image" class="object-cover object-center w-full h-full" />

            </div>
            <div class="absolute inset-9 flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-4 md:mb-0">
                    <h1 class="text-grey-700 font-medium text-4xl md:text-5xl leading-tight mb-2">Đồ chơi xe máy</h1>
                    <p class="font-regular text-xl mb-8 mt-4">Cách làm đẹp cho xe của bạn</p>
                    <a href="#contactUs"
                        class="px-6 py-3 bg-[#c8a876] text-white font-medium rounded-full hover:bg-[#c09858]  transition duration-200">Liên hệ chúng tôi</a>
                </div>
            </div>
        </div>
          <!--HTML CODE-->
          <section class="py-4" id="services">
          <div class="md:container md:mx-auto ">
              <h2 class="text-3xl font-bold text-gray-800 mb-2 text-center">Một số hình ảnh decal xe đẹp</h2>
          <swiper-container class="mySwiper" init="false" >
    <swiper-slide><div class=" rounded-2xl h-84 flex justify-center items-center">
                  <span class="text-2xl font-semibold text-indigo-600">
                  <div class="bg-white  shadow-md overflow-hidden px-1">
                      <img src="/images/introduct1.jpeg" alt="wheat flour grinding"
                          class="w-full h-64 object-cover">
                      <div class="p-6 text-center">
                          <h3 class="text-xl font-medium text-gray-800 mb-2">Wheat Flour Grinding</h3>
                      </div>
                  </div>
                  </span>
                </div></swiper-slide>
    <swiper-slide><div class=" rounded-2xl h-84 flex justify-center items-center">
                  <span class="text-2xl font-semibold text-indigo-600">
                  <div class="bg-white  shadow-md overflow-hidden px-1">
                      <img src="/images/introduct1.jpeg" alt="wheat flour grinding"
                          class="w-full h-64 object-cover">
                      <div class="p-6 text-center">
                          <h3 class="text-xl font-medium text-gray-800 mb-2">Wheat Flour Grinding</h3>
                      </div>
                  </div>
                  </span>
                </div></swiper-slide>
    <swiper-slide><div class=" rounded-2xl h-84 flex justify-center items-center">
                  <span class="text-2xl font-semibold text-indigo-600">
                  <div class="bg-white  shadow-md overflow-hidden px-1">
                      <img src="/images/introduct1.jpeg" alt="wheat flour grinding"
                          class="w-full h-64 object-cover">
                      <div class="p-6 text-center">
                          <h3 class="text-xl font-medium text-gray-800 mb-2">Wheat Flour Grinding</h3>
                      </div>
                  </div>
                  </span>
                </div></swiper-slide>
    <swiper-slide>Slide 4</swiper-slide>
    <swiper-slide>Slide 5</swiper-slide>
    <swiper-slide>Slide 6</swiper-slide>
    <swiper-slide>Slide 7</swiper-slide>
    <swiper-slide>Slide 8</swiper-slide>
    <swiper-slide>Slide 9</swiper-slide>
  </swiper-container>
</div>
</section>
        <section>
        <div class="container mx-auto ">
        </div>
        </section>
    </div>
</x-ui-layout>
<style>
  swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    /* CSS Code */
    .swiper-wrapper {
      width: 100%;
      height: max-content !important;
      padding-bottom: 64px !important;
      -webkit-transition-timing-function: linear !important;
      transition-timing-function: linear !important;
      position: relative;
      }

</style>
<script>
  const swiperEl = document.querySelector('swiper-container')

    const params = {
      slidesPerView: 2,
      breakpoints: {
          992: {
              slidesPerView: 4,
              spaceBetween: 0
          },
          768: {
              slidesPerView: 3,
              spaceBetween: 0
          }
    },
      injectStyles: [`
      .swiper-pagination-bullet {
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        font-size: 12px;
        color: #000;
        opacity: 1;
        background: rgba(0, 0, 0, 0.2);
      }

      .swiper-pagination-bullet-active {
        color: #fff;
        background: #007aff;
      }
      `],
      pagination: {
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
    }

    Object.assign(swiperEl, params)

    swiperEl.initialize();
      </script>