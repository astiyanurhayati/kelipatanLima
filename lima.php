<?php
    $notif = false;
    $bukan = false;
    $i = '';
    $input = '';
    $no = 1;
    $ke = 1;
if (isset($_POST['kirim'])) {

    $input = $_POST['input'];
    if(!empty($input)){
        if($input < 5){
          $bukan = true;    
        }else{
            for ($i= 5; $i <= $input; $i=$i+5){
                $i;
            }
          
        }
        
      
    }else{
        $notif = true;
    }
}


//beli batagor
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm ">
        <div class="container">

            <a class="navbar-brand py-0 my-0 " href="lima.php"> <img src="satu.png" alt="">
            </a>


            <ul>
                <li><a href=""><i class="fas fa-home"></i></a></li>
            </ul>

        </div>
    </nav>
    <div class="container mt-5 ">

        <?php if($notif == true){ ?>
        <div class="alert alert-danger w-50 mx-auto" role="alert">
            Nilai tidak boleh kosong
        </div>
        <?php }?>

        <?php if($bukan == true){ ?>
        <div class="alert alert-warning w-50 mx-auto" role="alert">
            Nilai bukan kelipatan 5
        </div>
        <?php }?>


        <div class="card w-50 mx-auto shadow">
            <div class="card-header">
                <h4 class="text-center">Hitung Kelipatan 5</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">

                        <input type="number" name="input" class="form-control" value="<?= @$input ?>"
                            placeholder="Masukan Nilai">
                    </div>
                    <button type="submit" name="kirim" class="btn btn-success mt-3">Hitung</button>
                </form>
            </div>
        </div>


    </div>

    <?php if(!empty($_POST['input'])){
        if($i){
     ?>
    <div class="container mt-5 mb-5">
        <div class="card w-50 mx-auto shadow">
            <div class="card-header">
                <h4 class="text-center">Kelipatan 5</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Kelipatan ke-5: </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php  for ($i= 5; $i <= $input; $i=$i+5){ ?>
                        <tr>
                            <th scope="row" class="text-center">
                                <h5 class="bulat"><?= $no++ ?></h5>
                            </th>
                            <td>
                                <p>Kelipatan 5 ke-<?= $ke++ ?> = <?= $i ?></p>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <?php }} ?>



</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>