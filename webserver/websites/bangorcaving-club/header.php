<div class="topbar">
        <a href="./"><header>
                <img src="sources/icon256.png">
               <h1>
                    Bangor<br>Student<br>Caving<br>Club
                </h1>
        </header></a>

        <nav>
            <a href="./" id="home">
                Home
            </a>

            <div class="dropdown" id="club">
                The Club
                <div class="dropdown-content">
                <a href="committee"    class="club" id="committee">Committee</a>
                <a href="construction" class="club"               >More to</a>  <!--gallery-->
                <a href="construction" class="club"               >come soon</a> <!--history-->
                </div>
            </div>

            <div class="dropdown" id="resources">
                Resources
                <div class="dropdown-content">
                <a href="freshers"     class="resources" id="fresher">Freshers</a>  <!--Packing list etc-->
                <a href="articles"     class="resources" id="article">Articles</a> <!--Articles!-->
                <a href="construction" class="resources" id="welfare">Welfare</a> <!--Welfare reporting-->
                </div>
            </div>

            <a href="join" id="join">
                Join Us
            </a>
        </nav>
        <script>
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('nav ul li a');
            navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.parentElement.classList.add('active');
            }
            });
        </script>
</div>