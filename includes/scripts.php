<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/waypoints.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/meanmenu.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/backToTop.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.odometer.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/js_circle-progress.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
  integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
  integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  var popup = document.getElementById("sale-popup");
  var span = document.getElementsByClassName("popup-close")[0];

  // Display popup after 2 to 3 seconds
  window.onload = function() {
    setTimeout(function() {
      popup.style.display = "flex";
    }, 2000); // 2000 milliseconds = 2 seconds (adjust to 3000 for 3 seconds)
  };

  // Close popup when close button (span) is clicked
  span.onclick = function() {
    popup.style.display = "none";
  };

  // Close popup when clicking outside of it
  window.onclick = function(event) {
    if (event.target == popup) {
      popup.style.display = "none";
    }
  };
</script>


<script>
  gsap.registerPlugin(ScrollTrigger);

  const screenHeight = window.innerHeight;
  const screenWidth = window.innerWidth;

  // Use gsap.to for smooth dynamic X and Y movement
  gsap.to(".plane-modal > img", {
    y: (index, target) => screenHeight * 2, // Move the plane vertically across the entire scrollable height
    x: (index, target) => {
      const scrollY = window.scrollY;
      const maxScroll = document.body.scrollHeight - screenHeight;
      return Math.sin((scrollY / maxScroll) * Math.PI * 2) * (screenWidth / 4); // Sinusoidal X movement
    },
    duration: 3,
    scrollTrigger: {
      trigger: "body",
      start: "top top",
      end: "bottom bottom",
      scrub: true,
      onUpdate: (self) => {
        // We dynamically update the X movement based on the current scroll
        const scrollY = window.scrollY;
        const maxScroll = document.body.scrollHeight - screenHeight;
        const xMovement = Math.sin((scrollY / maxScroll) * Math.PI * 2) * (screenWidth / 4);
        gsap.to(".plane-modal > img", {
          x: xMovement,
          overwrite: "auto"
        });
      }
    }
  });

  // Zoom effect when the ".about-area" is in view
  gsap.timeline({
      scrollTrigger: {
        trigger: ".about-area",
        start: "top top", // When .about-area reaches the center of the viewport
        end: "bottom bottom", // Until the bottom of the .about-area reaches the center
        scrub: true,
      }
    })
    .to(".plane-modal > img", {
      scale: 1,
      duration: 1
    }) // Zoom in
    .to(".plane-modal > img", {
      scale: 1,
      duration: 1
    }); // Zoom back to original size
</script>

</body>

</html>
