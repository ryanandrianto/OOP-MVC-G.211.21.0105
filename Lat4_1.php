<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    //class mobil
    class Mobil
    {
        public $nama;
        public $merk;
        function getInfo($a)
        {
            echo "Nama mobil: " . $a->nama . "<br/>";
            echo "Merk: " . $a->merk . "<br/>";
        }
    }

    ?>
    <div class="container mt-5 bg-gray-300">
        <div class="card pt-3 px-3 shadow mx-auto" style="width: 400px">
            <div class="card-header text-center text-bg-primary  border-0 rounded">
                <h4>Tugas 2 || Lat4_1.php </h4>
            </div>
            <div class="card-body">
                <p>
                    <?php
                    $a = new Mobil();
                    $a->nama = "Suzuki carry";
                    $a->merk = "Suzuki";
                    $a->getInfo($a);
                    ?>
                </p>
            </div>
            <div class="btn-group btn-group-sm" style="width: 40px;">
                <a href="Lat4_2a.php" class="btn btn-primary">
                    < </a>
            </div>
            <p style="font-size: 15px;" class="text-center mt-2">
                Ryan Andrianto || G.211.21.0105
            </p>
        </div>
    </div>
</body>

</html>