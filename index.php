<?php
    $biodata= [
        "nama" => "Asyifa Maulana",
        "jurusan" => "Informatika",
        "kampus" => "Universitas Singaperbangsa Karawang",
        "hobi" => "Bermain Game dan Membaca Komik",
    ]
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
            background-color: #DDE6ED;
        }
        svg {
            bottom: 0;
            position: absolute;
        }
    </style>
  </head>
  <body>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFF" fill-opacity="1" d="M0,224L80,202.7C160,181,320,139,480,154.7C640,171,800,245,960,266.7C1120,288,1280,256,1360,240L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    <div class="container d-flex">
        <div class="card mb-3 shadow-sm" style="max-width: 700px; margin:180px auto;">
            <div class="row g-0 ">
                <div class="col-md-4">
                    <img src="https://drive.google.com/uc?export=view&id=1N764nlW6MMigix354HgJh7NNdj3bB_WW" class="img-fluid rounded-start " alt="Asyifa Maulana">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title text-secondary mb-3">Biodata</h3>
                    <p class="card-text "> Saya bernama <?= $biodata["nama"] ?></p>
                    <p class="card-text "> Jurusan : <?= $biodata["jurusan"] ?></p>
                    <p class="card-text "> Asal Kampus : <?= $biodata["kampus"] ?></p>
                    <p class="card-text "> Hobi : <?= $biodata["hobi"] ?></p>
                    <p class="card-text text-center fs-5 my-3"><q>Sedikit lebih beda, lebih baik daripada sedikit lebih baik</q></p>
                    <p class="card-text"><small class="text-body-secondary">Last game played  :</small>  <img src="https://seeklogo.com/images/V/valorant-logo-FAB2CA0E55-seeklogo.com.png" style="max-width: 45px;" class="rounded mx-2">  <img src="https://seeklogo.com/images/O/octopath-traveler-logo-0EBF74572F-seeklogo.com.png" style="max-width: 45px;">  <img src="https://seeklogo.com/images/L/league-of-legends-logo-13AAC5B212-seeklogo.com.png" style="max-width: 45px;" class="rounded mx-2"></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>