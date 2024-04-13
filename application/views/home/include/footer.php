<script src="<?php  echo base_url() ?>assets/js/index.js"></script>

<script src="<?php  echo base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>


<footer class="footer">
    <div class="container">
        <div class="row" id="footer-row">
            <div class="col-12 col-lg-6">
                <img class="footer-logo" src="<?php  echo base_url() ?>assets/media/logo_acikbeyaz.png"
                    alt="footer-logo">
                <p class="footer-text">Umuttepe Turizm, doğanın huzur verici kollarında keşif ve maceraya adım
                    atanların rotasıdır. Yemyeşil ormanlarla çevrili, tarih ve kültür mirasını bünyesinde barındıran
                    bu benzersiz bölge, ziyaretçilerine unutulmaz bir deneyim sunar. Umuttepe Turizm, konforlu
                    konaklama seçenekleri, lezzetli yerel yemekler ve etkileyici doğal güzellikleriyle her
                    ziyaretçisine kendini özel hissettirir. Burada, ruhunuzu dinlendirirken aynı zamanda maceraya
                    atılma fırsatını bulacaksınız. Umuttepe Turizm Sitesi, hayallerinizi gerçeğe dönüştürmek için
                    sizleri bekliyor.
                </p>
            </div>

            <div class="col-12 col-lg-6 ">
                <center>
                    <h6 class="footer-header">
                        Hızlı Linkler
                    </h6>

                    <ul class="footer-links">
                        <li class="list-items"><a class="footer-nav" id="active-nav"
                                href="<?php  echo base_url() ?>index.php">Ana
                                Sayfa</a>
                        </li>
                        <li class="list-items"><a class="footer-nav" href="<?php  echo base_url() ?>/home/gallery">Bilet
                                Al</a></li>
                        <li class="list-items"><a class="footer-nav"
                                href="<?php  echo base_url() ?>/home/amenities">Yardım</a></li>
                        <li class="list-items"><a class="footer-nav"
                                href="<?php  echo base_url() ?>/home/contacts">İletişim</a></li>
                        <li class="list-items"><a class="footer-nav" href="<?php  echo base_url() ?>/home/faqs">SSS</a>
                        </li>
                        <li class="list-items"><a class="footer-nav"
                                href="<?php  echo base_url() ?>/home/account">Hesabım</a></li>

                    </ul>
                </center>

            </div>



        </div>

        <!-- copyright -->
        <div class="row" id="copyright-row">
            <div class="col-12" id="copyright-col">
                <p class="copyright-text">
                    Umuttepe Turizm &copy; <span id="year"></span> All Rights Reserved.<br><i> Powered By
                        Boostrap</i>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<!-- Back to top button -->
<!--Sayfada aşağıya indikçe sağ altta çıkan buton, sayfanın en üstüne çıkmayı sağlar.-->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


<!-- JS -->
<script src="<?php  echo base_url() ?>assets/js/index.js"></script>
<script src="<?php  echo base_url() ?>assets/js/custom.js"></script>
<script src="<?php  echo base_url() ?>assets/js/login.js"></script>
<script src=" <?php echo base_url("assets/js/jquery.js") ?>"></script>
<script src=" <?php echo base_url("assets/js/bootstrap.js") ?>"></script>
<script>
    console.log(localStorage.getItem("kontrol"));
    console.log(localStorage.getItem("seferid"));
</script>

</body>

</html>