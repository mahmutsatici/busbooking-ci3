<!-- hero section -->
<section class="hero-section">
    <div class="container" id="hero-cont">
        <div class="row" id="hero-row">
            <div class="col-12" id="hero-col">
                <h1 class="hero-h1">Umuttepe Turizme Hoşgeldiniz </h1>
                <form class="home-search" action="<?php echo base_url("/home/gallery") ?>" method="get" onsubmit="return checkSelectedCities();">
                    <div class="form-row">
                        <p style="font-size: 16px; margin-right: 5px; margin-left: 15px; margin-top: 12px;color: #c89600"><b>Nereden:
                            </b></p>
                        <div class="select-container">
                            <select name="KalkisYeri" class="form-select" required aria-label="Default select example">
                                <option value="istanbul">İstanbul</option>
                                <option value="kocaeli">Kocaeli</option>
                                <option value="bursa">Bursa</option>
                                <option value="sakarya">Sakarya</option>
                            </select>
                        </div>
                        <p style="font-size: 16px; margin-right: 5px; margin-left: 15px; margin-top: 12px; color: #c89600">
                            <b>Nereye:</b>
                        </p>
                        <div class="select-container">

                            <select name="VarisYeri" class="form-select" required aria-label="Default select example">
                                <option value="istanbul">İstanbul</option>
                                <option value="kocaeli">Kocaeli</option>
                                <option value="bursa">Bursa</option>
                                <option value="sakarya">Sakarya</option>
                            </select>
                        </div>
                    </div><br><br>

                    <div class="ui input left icon">
                        <input style="margin-right: 15px" name="Tarih" type="date" placeholder="Tarih"
                            class="calender-text" required min="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <button style="margin-left: 5px; margin-right: 5px" type="submit" class="btn btn-warning"><i
                            class="fas fa-search"></i></button>
                            
            </div>
            
            </form>
        </div>
    </div>
    </div>
</section>
<script>
    // İki select alanını kontrol etmek için bir işlev tanımlayalım
    function checkSelectedCities() {
        var kalkisYeri = document.getElementsByName("KalkisYeri")[0].value;
        var varisYeri = document.getElementsByName("VarisYeri")[0].value;
        
        // Şehirler aynıysa uyarı mesajı göster
        if (kalkisYeri === varisYeri) {
            alert("Kalkış ve varış yerleri aynı olamaz. Lütfen farklı şehirler seçiniz.");
            return false; // Formun gönderilmesini engelle
        }
        return true; // Formun gönderilmesine izin ver
    }
    localStorage.setItem("kontrol", 2);
    
</script>