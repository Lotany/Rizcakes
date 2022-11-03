
    <footer>
        <ul class="footer-main-links">
            <li><a href="cases.html">Home</a></li>
            <li><a href="cases.html">Projects</a></li>

            <li><a href="cases.html">Portfolio</a></li>

            <li><a href="cases.html">About</a></li>

            <li><a href="cases.html">Contact</a></li>
        </ul>

        <ul class="footer-links-cases">
            <li><p>Latest Projects</p></li>
            <li><a href="#">LOTAN - WEB DEVELOPMENT</a></li>

            <li><a href="#">MNAZI - WEB WEB-DEVELOPMENT</a></li>

            <li><a href="#">ABLE - PORTFOLIO</a></li>

            <li><a href="#">LEARN - YOUTUBE CHANNEL</a></li>
        </ul>
        <div class="footer-sm">
            <a href="#">
                <img src="icons/github.gif" alt="github icon">
            </a>
            <a href="#">
                <img src="icons/twitt.gif" alt="github icon">
            </a>
            <a href="#">
                <img src="icons/insta.gif" alt="github icon">
            </a>
            
        </div>
        </footer>
        <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    <script src="script.js"></script>
    </body>
</html>