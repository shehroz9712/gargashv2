  <!-- jQuery (First) -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <!-- Other Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src="{{ asset('assets/user/slick/slick.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <!-- Main JS -->
  <script src="{{ asset('assets/user/js/main.js') }}"></script>
  <!-- Initialize Scripts -->
  <script>
      $(document).ready(function() {
          new WOW().init();
          AOS.init();
      });
      // RTL Support
      document.addEventListener("DOMContentLoaded", function() {
          const isRTL = document.documentElement.dir === "rtl";
          if (isRTL) {
              let rtlScript = document.createElement("script");
              rtlScript.src = "{{ asset('assets/user/js/rtl.js') }}";
              document.body.appendChild(rtlScript);
          }
      });
      let brand_section_open_El = document.querySelector(".brand-section-open");
      let open_brand_section_El = document.querySelector(".open-brand-section");
      brand_section_open_El.addEventListener("click", () => {
          open_brand_section_El.classList.toggle("show")
      })
  </script>
