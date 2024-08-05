<x-ui-layout>
    <div id="home">
      <!-- <div class="relative w-full h-[320px]" id="home">
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
      </div> -->
          <!--HTML CODE-->
      <section>
      @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
      @endif
      @if (session('error'))
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
      @endif
        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
          <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="img_url" id="img_url" type="file">
          <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
          upload
          </button>
        </form>
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
      padding: 0.5rem;
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
      spaceBetween: 10,
      breakpoints: {
          1200: {
              slidesPerView: 5,
              spaceBetween: 10,
          },
          992: {
              slidesPerView: 4,
              spaceBetween: 10,
          },
          768: {
              slidesPerView: 3,
              spaceBetween: 10
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
      .swiper-pagination{
      position:static;\
      margin-top: 4px;
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