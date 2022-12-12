<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Retail Shop</title>
    <script>
      tailwind.config = {
        theme: {
          screens: {
            sm: "640px",
            // => @media (min-width: 640px) { ... }

            md: "768px",
            // => @media (min-width: 768px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1280px",
            // => @media (min-width: 1280px) { ... }

            "2xl": "1457px",
            // => @media (min-width: 1536px) { ... }
          },
          container: {
            center: true,
            padding: {
              DEFAULT: "1rem",
              sm: "2rem",
              lg: "4rem",
              xl: "5rem",
              "2xl": "6rem",
            },
          },
          fontFamily: {
            sans: ["Open Sans"],
            serif: ["Open Sans"],
            mono: ["Open Sans"],
            display: ["Open Sans"],
            body: ["Open Sans"],
          },
        },
      };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css"
    />
  </head>
  <body>
    <!-- navbar -->
    <nav id="navbar" class="w-full bg-white/90 backdrop:blur">
      <div
        class="container py-[23px] flex flex-wrap xl:flex-nowrap justify-between xl:gap-[58px] items-center"
      >
        <div class="logo">
          <img src="{{URL::asset('images/logo.png')}}" alt="" />
        </div>
        <button
          data-collapse-toggle="navbar-defaults"
          type="button"
          class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-defaults"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            class="w-6 h-6"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
        <div id="navbar-defaults" class="hidden xl:block w-full">
          <div
            class="menu-action flex flex-col lg:flex-row items-center justify-between"
          >
            <div class="menu lg:pt-[18px]">
              <ul class="lg:flex">
                <li
                  class="group px-5 rounded-[39px] hover:bg-slate-100 flex flex-col items-center gap-3"
                >
                  <a href="/" class="text-[#e91e63] font-[600] text-[18px]"
                    >Feature</a
                  >
                  <img
                    src="{{URL::asset('images/Ovalpink.png')}}"
                    alt=""
                    class="active:visible group-hover:visible"
                  />
                </li>
                <li
                  class="group px-5 rounded-[39px] hover:bg-slate-100 flex flex-col items-center gap-3"
                >
                  <a
                    href="/product/"
                    class="group-hover:text-[#e91e63] font-[600] text-[18px]"
                    >Product</a
                  >
                  <img
                    src="{{URL::asset('images/Ovalpink.png')}}"
                    alt=""
                    class="invisible group-hover:visible"
                  />
                </li>
                <li
                  class="group px-5 rounded-[39px] hover:bg-slate-100 flex flex-col items-center gap-3"
                >
                  <a
                    href=""
                    class="group-hover:text-[#e91e63] font-[600] text-[18px]"
                    >Business</a
                  >
                  <img
                    src="{{URL::asset('images/Ovalpink.png')}}"
                    alt=""
                    class="invisible group-hover:visible"
                  />
                </li>
                <li
                  class="group px-5 rounded-[39px] hover:bg-slate-100 flex flex-col items-center gap-3"
                >
                  <a
                    href=""
                    class="group-hover:text-[#e91e63] font-[600] text-[18px]"
                    >Testimonials</a
                  >
                  <img
                    src="{{URL::asset('images/Ovalpink.png')}}"
                    alt=""
                    class="invisible group-hover:visible"
                  />
                </li>
                <li
                  class="group px-5 rounded-[39px] hover:bg-slate-100 flex flex-col items-center gap-3"
                >
                  <a
                    href="/blog/"
                    class="group-hover:text-[#e91e63] font-[600] text-[18px]"
                    >Blog</a
                  >
                  <img
                    src="{{URL::asset('images/Ovalpink.png')}}"
                    alt=""
                    class="invisible group-hover:visible"
                  />
                </li>
              </ul>
            </div>
            <div class="action">
              <ul class="flex gap-9">
                <li>
                  @if(!session()->get("logged", false))
                    <a
                    href="/auth/login"
                    class="hover:bg-[#E91E63]/20 px-5 py-2 rounded-[39px] hover:text-[#E91E63] font-[600] text-[16px]"
                    >LOGIN</a
                  >
                @else
                <a
                    href="/auth/logout"
                    class="hover:bg-[#E91E63]/20 px-5 py-2 rounded-[39px] hover:text-[#E91E63] font-[600] text-[16px]"
                    >LOGOUT</a
                  >
                @endif
                </li>
                <li>
                  <a
                    href=""
                    class="bg-[#E91E63] px-5 py-2 rounded-[39px] text-white font-[600] text-[16px]"
                    >REGISTER</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    @yield("content")

    <!--footer-->
    <section id="footer">
      <div class="container mt-[160px] flex justify-between flex-wrap">
        <div class="logo">
          <img src="{{URL::asset('images/logo.png')}}" alt="" />
          <h6 class="w-[285px] mt-[23px] mb-[37px]">
            Nam posuere accumsan porta. Integer id orci sed ante tincidunt
            tincidunt sit amet sed libero.
          </h6>
          <h6>© Skyrev Theme 2021</h6>
        </div>
        <div class="company">
          <p class="text-[#E91E63] text-[18px] font-[700] mb-[22px]">COMPANY</p>
          <ul>
            <li class="font-[400] text-[16px] mb-[22px]">Donec dignissim</li>
            <li class="font-[400] text-[16px] mb-[22px]">Curabitur egestas</li>
            <li class="font-[400] text-[16px] mb-[22px]">Nam posuere</li>
            <li class="font-[400] text-[16px] mb-[22px]">Aenean Facilisis</li>
          </ul>
        </div>
        <div class="services">
          <p class="text-[#E91E63] text-[18px] font-[700] mb-[22px]">
            SERVICES
          </p>
          <ul>
            <li class="font-[400] text-[16px] mb-[22px]">Cras convallis</li>
            <li class="font-[400] text-[16px] mb-[22px]">
              Vestibulum faucibus
            </li>
            <li class="font-[400] text-[16px] mb-[22px]">
              Quisque lacinia purus
            </li>
            <li class="font-[400] text-[16px] mb-[22px]">Aliquam nec ex</li>
          </ul>
        </div>
        <div class="resources">
          <p class="text-[#E91E63] text-[18px] font-[700] mb-[22px]">
            RESOURCES
          </p>
          <ul>
            <li class="font-[400] text-[16px] mb-[22px]">
              Suspendisse porttitor
            </li>
            <li class="font-[400] text-[16px] mb-[22px]">Nam posuere</li>
            <li class="font-[400] text-[16px] mb-[22px]">Curabitur egestas</li>
          </ul>
        </div>
        <div class="sosial">
          <div class="flex mt-[30px] mb-[38.5px] gap-[18px]">
            <img src="{{URL::asset('images/Group 9.png')}}" alt="" />
            <img src="{{URL::asset('images/Group 9 Copy.png')}}" alt="" />
            <img src="{{URL::asset('images/Group 9 Copy 2.png')}}" alt="" />
            <img src="{{URL::asset('images/Group 9 Copy 3.png')}}" alt="" />
          </div>
          <div>
            <img src="{{URL::asset('images/Lang Select.png')}}" alt="" />
          </div>
        </div>
      </div>
    </section>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
  </body>
</html>
