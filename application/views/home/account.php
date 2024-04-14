<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.containerr {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    
}

.profile {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    margin-top: 115px; 
}

.profile h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.profile ul {
    list-style: none;
    padding: 0;
    margin-left:20px;
}

.profile ul li {
    margin-bottom: 10px;
}

.profile ul li strong {
    display: inline-block;
    width: 150px;
    font-weight: bold;
}

.profile ul li:last-child {
    margin-bottom: 0;
}
</style>
<br><br>
<div class="containerr">
    <div class="profile">
        <h1>Hesap Bilgileri</h1>
        <ul>
            <?php $kullanici = $this->session->userdata("session"); ?>
            <li><strong>Kimlik Numarası:</strong> <?php echo $kullanici["TC"]; ?></li>
            <li><strong>Ad Soyad:</strong> <?php echo $kullanici["Ad"] . " " . $kullanici["Soyad"]; ?></li>
            <li><strong>Doğum Tarihi:</strong>  <?php echo date("d/m/Y", strtotime($kullanici["DogumTarih"]));?></li>
            <li><strong>Meslek:</strong> <?php echo $kullanici["YolcuTarife"]; ?></li>
            <li><strong>Cinsiyet:</strong> <?php echo $kullanici["Cinsiyet"]; ?></li>
            <li><strong>Telefon Numarası:</strong> <?php echo $kullanici["TelNo"]; ?></li>
            <li><strong>E-posta:</strong> <?php echo $kullanici["Email"]; ?></li>

        </ul>
    </div>
</div>