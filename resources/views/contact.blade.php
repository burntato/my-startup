<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | Play Tailwind</title>
    <link
      rel="shortcut icon"
      href="{{asset('/images/favicon.png')}}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/tailwind.css')}}" />

    <!-- ==== WOW JS ==== -->
    <script src="{{asset('/js/wow.min.js')}}"></script>
    <script>
      new WOW().init();
    </script>
  </head>
  <body>
    <!-- ====== Navbar Section Start -->
    <div
      class="
        ud-header
        bg-transparent
        absolute
        top-0
        left-0
        z-40
        w-full
        flex
        items-center
      "
    >
      <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
          <div class="px-4 w-60 max-w-full">
            <a href="/" class="navbar-logo w-full block py-5">
              <img
                src="{{asset('/images/logo/logo-white.svg')}}"
                alt="logo"
                class="w-full header-logo"
              />
            </a>
          </div>
          <div class="flex px-4 justify-between items-center w-full">
            <div>
              <button
                id="navbarToggler"
                class="
                  block
                  absolute
                  right-4
                  top-1/2
                  -translate-y-1/2
                  lg:hidden
                  focus:ring-2
                  ring-primary
                  px-3
                  py-[6px]
                  rounded-lg
                "
              >
                <span
                  class="relative w-[30px] h-[2px] my-[6px] block bg-white"
                ></span>
                <span
                  class="relative w-[30px] h-[2px] my-[6px] block bg-white"
                ></span>
                <span
                  class="relative w-[30px] h-[2px] my-[6px] block bg-white"
                ></span>
              </button>
              <nav
                id="navbarCollapse"
                class="
                  absolute
                  py-5
                  lg:py-0 lg:px-4
                  xl:px-6
                  bg-white
                  lg:bg-transparent
                  shadow-lg
                  rounded-lg
                  max-w-[250px]
                  w-full
                  lg:max-w-full lg:w-full
                  right-4
                  top-full
                  hidden
                  lg:block lg:static lg:shadow-none
                "
              >
                <ul class="blcok lg:flex">
                  <li class="relative group">
                    <a
                      href="/"
                      class="
                        ud-menu-scroll
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:px-0
                        flex
                        mx-8
                        lg:mr-0
                      "
                    >
                      Home
                    </a>
                  </li>
                  <li class="relative group">
                    <a
                      href="/#about"
                      class="
                        ud-menu-scroll
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:px-0
                        flex
                        mx-8
                        lg:mr-0 lg:ml-7
                        xl:ml-12
                      "
                    >
                      About
                    </a>
                  </li>
                  <li class="relative group">
                    <a
                      href="/#pricing"
                      class="
                        ud-menu-scroll
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:px-0
                        flex
                        mx-8
                        lg:mr-0 lg:ml-7
                        xl:ml-12
                      "
                    >
                      Pricing
                    </a>
                  </li>
                  <li class="relative group">
                    <a
                      href="/#team"
                      class="
                        ud-menu-scroll
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:px-0
                        flex
                        mx-8
                        lg:mr-0 lg:ml-7
                        xl:ml-12
                      "
                    >
                      Team
                    </a>
                  </li>
                  <li class="relative group">
                    <a
                      href="/#contact"
                      class="
                        ud-menu-scroll
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:px-0
                        flex
                        mx-8
                        lg:mr-0 lg:ml-7
                        xl:ml-12
                      "
                    >
                      Contact
                    </a>
                  </li>
                  <li class="relative group submenu-item">
                    <a
                      href="javascript:void(0)"
                      class="
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:pl-0 lg:pr-4
                        flex
                        mx-8
                        lg:mr-0 lg:ml-8
                        xl:ml-12
                        relative
                        after:absolute
                        after:w-2
                        after:h-2
                        after:border-b-2
                        after:border-r-2
                        after:border-current
                        after:rotate-45
                        lg:after:right-0
                        after:right-1
                        after:top-1/2
                        after:-translate-y-1/2
                        after:mt-[-2px]
                      "
                    >
                      Pages
                    </a>
                    <div
                      class="
                        submenu
                        hidden
                        relative
                        lg:absolute
                        w-[250px]
                        top-full
                        lg:top-[110%]
                        left-0
                        rounded-sm
                        lg:shadow-lg
                        p-4
                        lg:block lg:opacity-0 lg:invisible
                        group-hover:opacity-100
                        lg:group-hover:visible lg:group-hover:top-full
                        bg-white
                        transition-[top]
                        duration-300
                      "
                    >
                      <a
                        href="about.html"
                        class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        "
                      >
                        About Page
                      </a>
                      <a
                        href="/pricing"
                        class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        "
                      >
                        Pricing Page
                      </a>
                      <a
                        href="/contact"
                        class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        "
                      >
                        Contact Page
                      </a>
                      <a
                        href="blog-grids.html"
                        class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        "
                      >
                        Blog Grid Page
                      </a>
                      <a
                        href="blog-details.html"
                        class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        "
                      >
                        Blog Details Page
                      </a>
                      <a
                        href="signup.html"
                        class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        "
                      >
                        Sign Up Page
                      </a>
                      <a
                        href="signin.html"
                        class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        "
                      >
                        Sign In Page
                      </a>
                      <a
                        href="404.html"
                        class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        "
                      >
                        404 Page
                      </a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
              <a
                href="signin.html"
                class="
                  text-base
                  font-medium
                  text-white
                  hover:opacity-70
                  py-3
                  px-7
                  loginBtn
                "
              >
                Sign In
              </a>
              <a
                href="signup.html"
                class="
                  text-base
                  font-medium
                  text-white
                  bg-white bg-opacity-20
                  rounded-lg
                  py-3
                  px-6
                  hover:bg-opacity-100 hover:text-dark
                  signUpBtn
                  duration-300
                  ease-in-out
                "
              >
                Sign Up
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Navbar Section End -->

    <!-- ====== Banner Section Start -->
    <div
      class="
        relative
        z-10
        pt-[120px]
        md:pt-[130px]
        lg:pt-[160px]
        pb-[100px]
        bg-primary
        overflow-hidden
      "
    >
      <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div class="text-center">
              <h1 class="font-semibold text-white text-4xl">Contact Page</h1>
            </div>
          </div>
        </div>
      </div>
      <div>
        <span class="absolute top-0 left-0 z-[-1]">
          <svg
            width="495"
            height="470"
            viewBox="0 0 495 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="55"
              cy="442"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="446"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z"
              stroke="white"
              stroke-opacity="0.08"
              stroke-width="12"
            />
          </svg>
        </span>
        <span class="absolute top-0 right-0 z-[-1]">
          <svg
            width="493"
            height="470"
            viewBox="0 0 493 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="462"
              cy="5"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="49"
              cy="470"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z"
              stroke="white"
              stroke-opacity="0.06"
              stroke-width="13"
            />
          </svg>
        </span>
      </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact py-20 md:py-[120px] relative">
      <div
        class="
          absolute
          z-[-1]
          w-full
          h-1/2
          lg:h-[45%]
          xl:h-1/2
          bg-[#f3f4fe]
          top-0
          left-0
        "
      ></div>
      <div class="container px-4">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="px-4 w-full lg:w-7/12 xl:w-8/12">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title mb-12 lg:mb-[150px]">
                <span
                  class="
                    font-headingFont
                    text-dark
                    font-semibold
                    text-base
                    mb-5
                  "
                >
                  CONTACT US
                </span>
                <h2 class="text-[35px] font-semibold">
                  Let's talk about <br />
                  Love to hear from you!
                </h2>
              </div>
              <div class="flex flex-wrap justify-between mb-12 lg:mb-0">
                <div class="flex max-w-full w-[330px] mb-8">
                  <div class="text-[32px] text-primary mr-6">
                    <svg
                      width="29"
                      height="35"
                      viewBox="0 0 29 35"
                      class="fill-current"
                    >
                      <path
                        d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"
                      />
                      <path
                        d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5 class="text-lg font-semibold mb-6">Our Location</h5>
                    <p class="text-base text-body-color">
                      401 Broadway, 24th Floor, Orchard Cloud View, London
                    </p>
                  </div>
                </div>
                <div class="flex max-w-full w-[330px] mb-8">
                  <div class="text-[32px] text-primary mr-6">
                    <svg
                      width="34"
                      height="25"
                      viewBox="0 0 34 25"
                      class="fill-current"
                    >
                      <path
                        d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5 class="text-lg font-semibold mb-6">How Can We Help?</h5>
                    <p class="text-base text-body-color">info@yourdomain.com</p>
                    <p class="text-base text-body-color">
                      contact@yourdomain.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="px-4 w-full lg:w-5/12 xl:w-4/12">
            <div
              class="
                shadow-testimonial
                rounded-lg
                bg-white
                py-10
                px-8
                md:p-[60px]
                lg:p-10
                2xl:p-[60px]
                sm:py-12 sm:px-10
                lg:py-12 lg:px-10
                wow
                fadeInUp
              "
              data-wow-delay=".2s"
            >
              <h3 class="font-semibold mb-8 text-2xl md:text-[26px]">
                Send us a Message
              </h3>
              <form>
                <div class="mb-6">
                  <label for="fullName" class="block text-xs text-dark"
                    >Full Name*</label
                  >
                  <input
                    type="text"
                    name="fullName"
                    placeholder="Adam Gelius"
                    class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                    "
                  />
                </div>
                <div class="mb-6">
                  <label for="email" class="block text-xs text-dark"
                    >Email*</label
                  >
                  <input
                    type="email"
                    name="email"
                    placeholder="example@yourmail.com"
                    class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                    "
                  />
                </div>
                <div class="mb-6">
                  <label for="phone" class="block text-xs text-dark"
                    >Phone*</label
                  >
                  <input
                    type="text"
                    name="phone"
                    placeholder="+885 1254 5211 552"
                    class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                    "
                  />
                </div>
                <div class="mb-6">
                  <label for="message" class="block text-xs text-dark"
                    >Message*</label
                  >
                  <textarea
                    name="message"
                    rows="1"
                    placeholder="type your message here"
                    class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                      resize-none
                    "
                  ></textarea>
                </div>
                <div class="mb-0">
                  <button
                    type="submit"
                    class="
                      inline-flex
                      items-center
                      justify-center
                      py-4
                      px-6
                      rounded
                      text-white
                      bg-primary
                      text-base
                      font-medium
                      hover:bg-dark
                      transition
                      duration-300
                      ease-in-out
                    "
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Footer Section Start -->
    <footer
      class="bg-black pt-20 lg:pt-[120px] relative z-10 wow fadeInUp"
      data-wow-delay=".15s"
    >
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12 px-4">
            <div class="w-full mb-10">
              <a
                href="javascript:void(0)"
                class="inline-block max-w-[160px] mb-6"
              >
                <img
                  src="{{asset('/images/logo/logo-white.svg')}}"
                  alt="logo"
                  class="max-w-full"
                />
              </a>
              <p class="text-base text-[#f3f4fe] mb-7">
                We create digital experiences for brands and companies by using
                technology.
              </p>
              <div class="flex items-center -mx-3">
                <a
                  href="javascript:void(0)"
                  class="px-3 text-[#dddddd] hover:text-white"
                >
                  <svg
                    width="10"
                    height="18"
                    viewBox="0 0 10 18"
                    class="fill-current"
                  >
                    <path
                      d="M9.00007 6.82105H7.50006H6.96434V6.27097V4.56571V4.01562H7.50006H8.62507C8.91971 4.01562 9.16078 3.79559 9.16078 3.46554V0.550085C9.16078 0.247538 8.9465 0 8.62507 0H6.66969C4.55361 0 3.08038 1.54024 3.08038 3.82309V6.21596V6.76605H2.54466H0.72322C0.348217 6.76605 0 7.06859 0 7.50866V9.48897C0 9.87402 0.294645 10.2316 0.72322 10.2316H2.49109H3.02681V10.7817V16.31C3.02681 16.6951 3.32145 17.0526 3.75003 17.0526H6.26791C6.42862 17.0526 6.56255 16.9701 6.66969 16.8601C6.77684 16.7501 6.8572 16.5576 6.8572 16.3925V10.8092V10.2591H7.4197H8.62507C8.97328 10.2591 9.24114 10.0391 9.29471 9.709V9.6815V9.65399L9.66972 7.7562C9.6965 7.56367 9.66972 7.34363 9.509 7.1236C9.45543 6.98608 9.21436 6.84856 9.00007 6.82105Z"
                    />
                  </svg>
                </a>
                <a
                  href="javascript:void(0)"
                  class="px-3 text-[#dddddd] hover:text-white"
                >
                  <svg
                    width="19"
                    height="15"
                    viewBox="0 0 19 15"
                    class="fill-current"
                  >
                    <path
                      d="M16.2622 3.17878L17.33 1.93293C17.6391 1.59551 17.7234 1.33595 17.7515 1.20618C16.9085 1.67337 16.1217 1.82911 15.6159 1.82911H15.4192L15.3068 1.72528C14.6324 1.18022 13.7894 0.894714 12.8902 0.894714C10.9233 0.894714 9.37779 2.40012 9.37779 4.13913C9.37779 4.24295 9.37779 4.39868 9.40589 4.5025L9.49019 5.02161L8.90009 4.99565C5.30334 4.89183 2.35288 2.03675 1.87518 1.5436C1.08839 2.84136 1.53799 4.08722 2.01568 4.86587L2.97107 6.31937L1.45369 5.54071C1.48179 6.63084 1.93138 7.48736 2.80247 8.11029L3.56116 8.62939L2.80247 8.9149C3.28017 10.2386 4.34795 10.7837 5.13474 10.9913L6.17443 11.2509L5.19094 11.8738C3.61736 12.912 1.65039 12.8342 0.779297 12.7563C2.54957 13.8983 4.65705 14.1579 6.11823 14.1579C7.21412 14.1579 8.02901 14.0541 8.2257 13.9762C16.0936 12.2631 16.4589 5.77431 16.4589 4.47655V4.29486L16.6275 4.19104C17.5829 3.36047 17.9763 2.91923 18.2011 2.65967C18.1168 2.68563 18.0044 2.73754 17.892 2.7635L16.2622 3.17878Z"
                    />
                  </svg>
                </a>
                <a
                  href="javascript:void(0)"
                  class="px-3 text-[#dddddd] hover:text-white"
                >
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    class="fill-current"
                  >
                    <path
                      d="M8.91688 12.4995C10.6918 12.4995 12.1306 11.0911 12.1306 9.35385C12.1306 7.61655 10.6918 6.20819 8.91688 6.20819C7.14197 6.20819 5.70312 7.61655 5.70312 9.35385C5.70312 11.0911 7.14197 12.4995 8.91688 12.4995Z"
                    />
                    <path
                      d="M12.4078 0.947388H5.37075C2.57257 0.947388 0.300781 3.17104 0.300781 5.90993V12.7436C0.300781 15.5367 2.57257 17.7604 5.37075 17.7604H12.3524C15.2059 17.7604 17.4777 15.5367 17.4777 12.7978V5.90993C17.4777 3.17104 15.2059 0.947388 12.4078 0.947388ZM8.91696 13.4758C6.56206 13.4758 4.70584 11.6047 4.70584 9.35389C4.70584 7.10312 6.58976 5.23199 8.91696 5.23199C11.2165 5.23199 13.1004 7.10312 13.1004 9.35389C13.1004 11.6047 11.2442 13.4758 8.91696 13.4758ZM14.735 5.61164C14.4579 5.90993 14.0423 6.07264 13.5714 6.07264C13.1558 6.07264 12.7402 5.90993 12.4078 5.61164C12.103 5.31334 11.9368 4.9337 11.9368 4.47269C11.9368 4.01169 12.103 3.65916 12.4078 3.33375C12.7125 3.00834 13.1004 2.84563 13.5714 2.84563C13.9869 2.84563 14.4302 3.00834 14.735 3.30663C15.012 3.65916 15.2059 4.06593 15.2059 4.49981C15.1782 4.9337 15.012 5.31334 14.735 5.61164Z"
                    />
                    <path
                      d="M13.5985 3.82184C13.2383 3.82184 12.9336 4.12013 12.9336 4.47266C12.9336 4.82519 13.2383 5.12349 13.5985 5.12349C13.9587 5.12349 14.2634 4.82519 14.2634 4.47266C14.2634 4.12013 13.9864 3.82184 13.5985 3.82184Z"
                    />
                  </svg>
                </a>
                <a
                  href="javascript:void(0)"
                  class="px-3 text-[#dddddd] hover:text-white"
                >
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    class="fill-current"
                  >
                    <path
                      d="M16.7821 0.947388H1.84847C1.14272 0.947388 0.578125 1.49747 0.578125 2.18508V16.7623C0.578125 17.4224 1.14272 18 1.84847 18H16.7257C17.4314 18 17.996 17.4499 17.996 16.7623V2.15757C18.0525 1.49747 17.4879 0.947388 16.7821 0.947388ZM5.7442 15.4421H3.17528V7.32837H5.7442V15.4421ZM4.44563 6.2007C3.59873 6.2007 2.94944 5.5406 2.94944 4.74297C2.94944 3.94535 3.62696 3.28525 4.44563 3.28525C5.26429 3.28525 5.94181 3.94535 5.94181 4.74297C5.94181 5.5406 5.32075 6.2007 4.44563 6.2007ZM15.4835 15.4421H12.9146V11.509C12.9146 10.5739 12.8864 9.33618 11.5596 9.33618C10.2045 9.33618 10.0069 10.3813 10.0069 11.4265V15.4421H7.438V7.32837H9.95046V8.45605H9.9787C10.3457 7.79594 11.1644 7.13584 12.4347 7.13584C15.0601 7.13584 15.54 8.7861 15.54 11.0414V15.4421H15.4835Z"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-2/12 px-4">
            <div class="w-full mb-10">
              <h4 class="text-white text-lg font-semibold mb-9">About Us</h4>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Home
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Features
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    About
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Testimonial
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12 px-4">
            <div class="w-full mb-10">
              <h4 class="text-white text-lg font-semibold mb-9">Features</h4>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    How it works
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Privacy policy
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Terms of Service
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Refund policy
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12 px-4">
            <div class="w-full mb-10">
              <h4 class="text-white text-lg font-semibold mb-9">
                Our Products
              </h4>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    LineIcons
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Ecommerce HTML
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Ayro UI
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    PlainAdmin
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full md:w-2/3 lg:w-6/12 xl:w-3/12 px-4">
            <div class="w-full mb-10">
              <h4 class="text-white text-lg font-semibold mb-9">Partners</h4>
              <ul class="flex flex-wrap items-center">
                <li>
                  <a
                    href="https://tailgrids.com"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{asset('/images/footer/brands/tailgrids.svg')}}"
                      alt="tailgrids"
                    />
                  </a>
                </li>
                <li>
                  <a
                    href="https://ayroui.com"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{asset('/images/footer/brands/ayroui.svg')}}"
                      alt="ayroui"
                    />
                  </a>
                </li>
                <li>
                  <a
                    href="https://ecommercehtml.com"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{asset('/images/footer/brands/ecommerce-html.svg')}}"
                      alt="ecommerce-html"
                    />
                  </a>
                </li>
                <li>
                  <a
                    href="https://graygrids.com"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{asset('/images/footer/brands/graygrids.svg')}}"
                      alt="graygrids"
                    />
                  </a>
                </li>
                <li>
                  <a
                    href="https://lineicons.com"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{asset('/images/footer/brands/lineicons.svg')}}"
                      alt="lineicons"
                    />
                  </a>
                </li>
                <li>
                  <a
                    href="https://uideck.com"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{asset('/images/footer/brands/uideck.svg')}}"
                      alt="uideck"
                    />
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="border-t border-opacity-40 py-8 mt-12 lg:mt-[60px]">
        <div class="container">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-2/3 lg:w-1/2 px-4">
              <div class="my-1">
                <div
                  class="
                    flex
                    items-center
                    justify-center
                    md:justify-start
                    -mx-3
                  "
                >
                  <a
                    href="javascript:void(0)"
                    class="text-base text-[#f3f4fe] hover:text-primary px-3"
                  >
                    Privacy policy
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-base text-[#f3f4fe] hover:text-primary px-3"
                  >
                    Legal notice
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-base text-[#f3f4fe] hover:text-primary px-3"
                  >
                    Terms of service
                  </a>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/2 px-4">
              <div class="flex justify-center md:justify-end my-1">
                <p class="text-base text-[#f3f4fe]">
                  Designed and Developed by
                  <a
                    href="https://tailgrids.com"
                    rel="nofollow noopner"
                    target="_blank"
                    class="text-primary hover:underline"
                  >
                    TailGrids and UIdeck
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div>
        <span class="absolute left-0 top-0 z-[-1]">
          <img src="{{asset('/images/footer/shape-1.svg')}}" alt="" />
        </span>

        <span class="absolute bottom-0 right-0 z-[-1]">
          <img src="{{asset('/images/footer/shape-3.svg')}}" alt="" />
        </span>

        <span class="absolute top-0 right-0 z-[-1]">
          <svg
            width="102"
            height="102"
            viewBox="0 0 102 102"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M1.8667 33.1956C2.89765 33.1956 3.7334 34.0318 3.7334 35.0633C3.7334 36.0947 2.89765 36.9309 1.8667 36.9309C0.835744 36.9309 4.50645e-08 36.0947 0 35.0633C-4.50645e-08 34.0318 0.835744 33.1956 1.8667 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 33.1956C19.3249 33.1956 20.1606 34.0318 20.1606 35.0633C20.1606 36.0947 19.3249 36.9309 18.2939 36.9309C17.263 36.9309 16.4272 36.0947 16.4272 35.0633C16.4272 34.0318 17.263 33.1956 18.2939 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 33.195C35.7519 33.195 36.5876 34.0311 36.5876 35.0626C36.5876 36.0941 35.7519 36.9303 34.7209 36.9303C33.69 36.9303 32.8542 36.0941 32.8542 35.0626C32.8542 34.0311 33.69 33.195 34.7209 33.195Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 33.195C51.965 33.195 52.8008 34.0311 52.8008 35.0626C52.8008 36.0941 51.965 36.9303 50.9341 36.9303C49.9031 36.9303 49.0674 36.0941 49.0674 35.0626C49.0674 34.0311 49.9031 33.195 50.9341 33.195Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 16.7605C2.89765 16.7605 3.7334 17.5966 3.7334 18.6281C3.7334 19.6596 2.89765 20.4957 1.8667 20.4957C0.835744 20.4957 4.50645e-08 19.6596 0 18.6281C-4.50645e-08 17.5966 0.835744 16.7605 1.8667 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 16.7605C19.3249 16.7605 20.1606 17.5966 20.1606 18.6281C20.1606 19.6596 19.3249 20.4957 18.2939 20.4957C17.263 20.4957 16.4272 19.6596 16.4272 18.6281C16.4272 17.5966 17.263 16.7605 18.2939 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 16.7605C35.7519 16.7605 36.5876 17.5966 36.5876 18.6281C36.5876 19.6596 35.7519 20.4957 34.7209 20.4957C33.69 20.4957 32.8542 19.6596 32.8542 18.6281C32.8542 17.5966 33.69 16.7605 34.7209 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 16.7605C51.965 16.7605 52.8008 17.5966 52.8008 18.6281C52.8008 19.6596 51.965 20.4957 50.9341 20.4957C49.9031 20.4957 49.0674 19.6596 49.0674 18.6281C49.0674 17.5966 49.9031 16.7605 50.9341 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 0.324951C2.89765 0.324951 3.7334 1.16115 3.7334 2.19261C3.7334 3.22408 2.89765 4.06024 1.8667 4.06024C0.835744 4.06024 4.50645e-08 3.22408 0 2.19261C-4.50645e-08 1.16115 0.835744 0.324951 1.8667 0.324951Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 0.324951C19.3249 0.324951 20.1606 1.16115 20.1606 2.19261C20.1606 3.22408 19.3249 4.06024 18.2939 4.06024C17.263 4.06024 16.4272 3.22408 16.4272 2.19261C16.4272 1.16115 17.263 0.324951 18.2939 0.324951Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 0.325302C35.7519 0.325302 36.5876 1.16147 36.5876 2.19293C36.5876 3.2244 35.7519 4.06056 34.7209 4.06056C33.69 4.06056 32.8542 3.2244 32.8542 2.19293C32.8542 1.16147 33.69 0.325302 34.7209 0.325302Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 0.325302C51.965 0.325302 52.8008 1.16147 52.8008 2.19293C52.8008 3.2244 51.965 4.06056 50.9341 4.06056C49.9031 4.06056 49.0674 3.2244 49.0674 2.19293C49.0674 1.16147 49.9031 0.325302 50.9341 0.325302Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 33.1956C67.9346 33.1956 68.7704 34.0318 68.7704 35.0633C68.7704 36.0947 67.9346 36.9309 66.9037 36.9309C65.8727 36.9309 65.037 36.0947 65.037 35.0633C65.037 34.0318 65.8727 33.1956 66.9037 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 33.1956C84.3616 33.1956 85.1974 34.0318 85.1974 35.0633C85.1974 36.0947 84.3616 36.9309 83.3307 36.9309C82.2997 36.9309 81.464 36.0947 81.464 35.0633C81.464 34.0318 82.2997 33.1956 83.3307 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 33.1956C100.789 33.1956 101.624 34.0318 101.624 35.0633C101.624 36.0947 100.789 36.9309 99.7576 36.9309C98.7266 36.9309 97.8909 36.0947 97.8909 35.0633C97.8909 34.0318 98.7266 33.1956 99.7576 33.1956Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 16.7605C67.9346 16.7605 68.7704 17.5966 68.7704 18.6281C68.7704 19.6596 67.9346 20.4957 66.9037 20.4957C65.8727 20.4957 65.037 19.6596 65.037 18.6281C65.037 17.5966 65.8727 16.7605 66.9037 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 16.7605C84.3616 16.7605 85.1974 17.5966 85.1974 18.6281C85.1974 19.6596 84.3616 20.4957 83.3307 20.4957C82.2997 20.4957 81.464 19.6596 81.464 18.6281C81.464 17.5966 82.2997 16.7605 83.3307 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 16.7605C100.789 16.7605 101.624 17.5966 101.624 18.6281C101.624 19.6596 100.789 20.4957 99.7576 20.4957C98.7266 20.4957 97.8909 19.6596 97.8909 18.6281C97.8909 17.5966 98.7266 16.7605 99.7576 16.7605Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 0.324966C67.9346 0.324966 68.7704 1.16115 68.7704 2.19261C68.7704 3.22408 67.9346 4.06024 66.9037 4.06024C65.8727 4.06024 65.037 3.22408 65.037 2.19261C65.037 1.16115 65.8727 0.324966 66.9037 0.324966Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 0.324951C84.3616 0.324951 85.1974 1.16115 85.1974 2.19261C85.1974 3.22408 84.3616 4.06024 83.3307 4.06024C82.2997 4.06024 81.464 3.22408 81.464 2.19261C81.464 1.16115 82.2997 0.324951 83.3307 0.324951Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 0.324951C100.789 0.324951 101.624 1.16115 101.624 2.19261C101.624 3.22408 100.789 4.06024 99.7576 4.06024C98.7266 4.06024 97.8909 3.22408 97.8909 2.19261C97.8909 1.16115 98.7266 0.324951 99.7576 0.324951Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 82.2029C2.89765 82.2029 3.7334 83.039 3.7334 84.0705C3.7334 85.102 2.89765 85.9382 1.8667 85.9382C0.835744 85.9382 4.50645e-08 85.102 0 84.0705C-4.50645e-08 83.039 0.835744 82.2029 1.8667 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 82.2029C19.3249 82.2029 20.1606 83.039 20.1606 84.0705C20.1606 85.102 19.3249 85.9382 18.2939 85.9382C17.263 85.9382 16.4272 85.102 16.4272 84.0705C16.4272 83.039 17.263 82.2029 18.2939 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 82.2026C35.7519 82.2026 36.5876 83.0387 36.5876 84.0702C36.5876 85.1017 35.7519 85.9378 34.7209 85.9378C33.69 85.9378 32.8542 85.1017 32.8542 84.0702C32.8542 83.0387 33.69 82.2026 34.7209 82.2026Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 82.2026C51.965 82.2026 52.8008 83.0387 52.8008 84.0702C52.8008 85.1017 51.965 85.9378 50.9341 85.9378C49.9031 85.9378 49.0674 85.1017 49.0674 84.0702C49.0674 83.0387 49.9031 82.2026 50.9341 82.2026Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 65.7677C2.89765 65.7677 3.7334 66.6039 3.7334 67.6353C3.7334 68.6668 2.89765 69.503 1.8667 69.503C0.835744 69.503 4.50645e-08 68.6668 0 67.6353C-4.50645e-08 66.6039 0.835744 65.7677 1.8667 65.7677Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 65.7677C19.3249 65.7677 20.1606 66.6039 20.1606 67.6353C20.1606 68.6668 19.3249 69.503 18.2939 69.503C17.263 69.503 16.4272 68.6668 16.4272 67.6353C16.4272 66.6039 17.263 65.7677 18.2939 65.7677Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 65.7674C35.7519 65.7674 36.5876 66.6036 36.5876 67.635C36.5876 68.6665 35.7519 69.5027 34.7209 69.5027C33.69 69.5027 32.8542 68.6665 32.8542 67.635C32.8542 66.6036 33.69 65.7674 34.7209 65.7674Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 65.7674C51.965 65.7674 52.8008 66.6036 52.8008 67.635C52.8008 68.6665 51.965 69.5027 50.9341 69.5027C49.9031 69.5027 49.0674 68.6665 49.0674 67.635C49.0674 66.6036 49.9031 65.7674 50.9341 65.7674Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 98.2644C2.89765 98.2644 3.7334 99.1005 3.7334 100.132C3.7334 101.163 2.89765 102 1.8667 102C0.835744 102 4.50645e-08 101.163 0 100.132C-4.50645e-08 99.1005 0.835744 98.2644 1.8667 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M1.8667 49.3322C2.89765 49.3322 3.7334 50.1684 3.7334 51.1998C3.7334 52.2313 2.89765 53.0675 1.8667 53.0675C0.835744 53.0675 4.50645e-08 52.2313 0 51.1998C-4.50645e-08 50.1684 0.835744 49.3322 1.8667 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 98.2644C19.3249 98.2644 20.1606 99.1005 20.1606 100.132C20.1606 101.163 19.3249 102 18.2939 102C17.263 102 16.4272 101.163 16.4272 100.132C16.4272 99.1005 17.263 98.2644 18.2939 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M18.2939 49.3322C19.3249 49.3322 20.1606 50.1684 20.1606 51.1998C20.1606 52.2313 19.3249 53.0675 18.2939 53.0675C17.263 53.0675 16.4272 52.2313 16.4272 51.1998C16.4272 50.1684 17.263 49.3322 18.2939 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 98.2647C35.7519 98.2647 36.5876 99.1008 36.5876 100.132C36.5876 101.164 35.7519 102 34.7209 102C33.69 102 32.8542 101.164 32.8542 100.132C32.8542 99.1008 33.69 98.2647 34.7209 98.2647Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 98.2647C51.965 98.2647 52.8008 99.1008 52.8008 100.132C52.8008 101.164 51.965 102 50.9341 102C49.9031 102 49.0674 101.164 49.0674 100.132C49.0674 99.1008 49.9031 98.2647 50.9341 98.2647Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M34.7209 49.3326C35.7519 49.3326 36.5876 50.1687 36.5876 51.2002C36.5876 52.2317 35.7519 53.0678 34.7209 53.0678C33.69 53.0678 32.8542 52.2317 32.8542 51.2002C32.8542 50.1687 33.69 49.3326 34.7209 49.3326Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M50.9341 49.3326C51.965 49.3326 52.8008 50.1687 52.8008 51.2002C52.8008 52.2317 51.965 53.0678 50.9341 53.0678C49.9031 53.0678 49.0674 52.2317 49.0674 51.2002C49.0674 50.1687 49.9031 49.3326 50.9341 49.3326Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 82.2029C67.9346 82.2029 68.7704 83.0391 68.7704 84.0705C68.7704 85.102 67.9346 85.9382 66.9037 85.9382C65.8727 85.9382 65.037 85.102 65.037 84.0705C65.037 83.0391 65.8727 82.2029 66.9037 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 82.2029C84.3616 82.2029 85.1974 83.0391 85.1974 84.0705C85.1974 85.102 84.3616 85.9382 83.3307 85.9382C82.2997 85.9382 81.464 85.102 81.464 84.0705C81.464 83.0391 82.2997 82.2029 83.3307 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 82.2029C100.789 82.2029 101.624 83.039 101.624 84.0705C101.624 85.102 100.789 85.9382 99.7576 85.9382C98.7266 85.9382 97.8909 85.102 97.8909 84.0705C97.8909 83.039 98.7266 82.2029 99.7576 82.2029Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 65.7674C67.9346 65.7674 68.7704 66.6036 68.7704 67.635C68.7704 68.6665 67.9346 69.5027 66.9037 69.5027C65.8727 69.5027 65.037 68.6665 65.037 67.635C65.037 66.6036 65.8727 65.7674 66.9037 65.7674Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 65.7677C84.3616 65.7677 85.1974 66.6039 85.1974 67.6353C85.1974 68.6668 84.3616 69.503 83.3307 69.503C82.2997 69.503 81.464 68.6668 81.464 67.6353C81.464 66.6039 82.2997 65.7677 83.3307 65.7677Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 65.7677C100.789 65.7677 101.624 66.6039 101.624 67.6353C101.624 68.6668 100.789 69.503 99.7576 69.503C98.7266 69.503 97.8909 68.6668 97.8909 67.6353C97.8909 66.6039 98.7266 65.7677 99.7576 65.7677Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 98.2644C67.9346 98.2644 68.7704 99.1005 68.7704 100.132C68.7704 101.163 67.9346 102 66.9037 102C65.8727 102 65.037 101.163 65.037 100.132C65.037 99.1005 65.8727 98.2644 66.9037 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M66.9037 49.3322C67.9346 49.3322 68.7704 50.1684 68.7704 51.1998C68.7704 52.2313 67.9346 53.0675 66.9037 53.0675C65.8727 53.0675 65.037 52.2313 65.037 51.1998C65.037 50.1684 65.8727 49.3322 66.9037 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 98.2644C84.3616 98.2644 85.1974 99.1005 85.1974 100.132C85.1974 101.163 84.3616 102 83.3307 102C82.2997 102 81.464 101.163 81.464 100.132C81.464 99.1005 82.2997 98.2644 83.3307 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M83.3307 49.3322C84.3616 49.3322 85.1974 50.1684 85.1974 51.1998C85.1974 52.2313 84.3616 53.0675 83.3307 53.0675C82.2997 53.0675 81.464 52.2313 81.464 51.1998C81.464 50.1684 82.2997 49.3322 83.3307 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 98.2644C100.789 98.2644 101.624 99.1005 101.624 100.132C101.624 101.163 100.789 102 99.7576 102C98.7266 102 97.8909 101.163 97.8909 100.132C97.8909 99.1005 98.7266 98.2644 99.7576 98.2644Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
            <path
              d="M99.7576 49.3322C100.789 49.3322 101.624 50.1684 101.624 51.1998C101.624 52.2313 100.789 53.0675 99.7576 53.0675C98.7266 53.0675 97.8909 52.2313 97.8909 51.1998C97.8909 50.1684 98.7266 49.3322 99.7576 49.3322Z"
              fill="white"
              fill-opacity="0.08"
            ></path>
          </svg>
        </span>
      </div>
    </footer>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="
        hidden
        items-center
        justify-center
        bg-primary
        text-white
        w-10
        h-10
        rounded-md
        fixed
        bottom-8
        right-8
        left-auto
        z-[999]
        hover:bg-dark
        back-to-top
        shadow-md
        transition
        duration-300
        ease-in-out
      "
    >
      <span
        class="w-3 h-3 border-t border-l border-white rotate-45 mt-[6px]"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->
    <script src="{{asset('/js/main.js')}}"></script>
  </body>
</html>
