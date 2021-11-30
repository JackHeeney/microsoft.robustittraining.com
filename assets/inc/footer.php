<script type="text/javascript">
/*****************************
 *        live search        *
 *****************************/
function showResult(str) {
    if (window.XMLHttpRequest) {
        // Code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { //Code for IE6, IE5
        xmlhttp = new ActiveXobject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "<?php echo SITE_ADDR ?>/livesearch.php?q=" + str, true);
    xmlhttp.send();
}
</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="<? echo SITE_ADDR ?>/assets/js/main.js"></script>
</body>
<script src="<? echo SITE_ADDR ?>/assets/js/vendor/aos.js"></script>
</body>

</html>