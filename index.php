<!DOCTYPE html>
<html lang="en" class="has-background-info">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="res/fontawesome-all.js"></script>
    <link rel="stylesheet" href="res/bulma.min.css">
    <title>PBP Tugas 2</title>
</head>

<style>
    html {
        margin: 100px;
    }
    .center_box {
        position: absolute;
        top:50%;
        left:50%;
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }

    .vl {
        border-left: 2px solid black;
        height: auto;
    }

    .number_box_red {
        background-color: red;
        border-radius: 5px;
        padding: 3px;

        color: white;
    }
    .number_box_green {
        background-color: #00ff00;
        border-radius: 5px;
        padding: 3px;

        color: black;
    }
    .number_box_blue {
        background-color: blue;
        border-radius: 5px;
        padding: 3px;

        color: white;
    }
    .number_box_black {
        background-color: black;
        border-radius: 5px;
        padding: 3px;

        color: white;
    }

    .anim_open {
        animation-name: anim_open;
        animation-duration: 3s;
        max-height: 100%;
        overflow: hidden;
    }

    @keyframes anim_open{
        0% {
            opacity: 0;
            max-height: 0px;
        }
        12% {
            opacity: 1;
            max-height: 70px;
        }
        50% {
            opacity: 1;
            max-height: 70px;
        }
        100%{
            max-height: 250vh;
        }
    }
</style>

<body>
    <?php
    $num = 1;
    $has_set = false;
    if(isset($_GET["num"])){
        $num = $_GET["num"];
        $has_set = true;
    }

    if($num <= 0) $num = 1;
    if($num >= 356110) $num = 356110;
    ?>

    <div class="box">
        <div class="columns">
            <div class="column">
                <h2 class="subtitle" style="margin-bottom:0px">
                    <span style="color: #ff00ff">Angka</span>
                    <span style="color: red">Warna</span>
                    <span style="color: blue">Warni</span>
                </h2>
                Karya :<br>
                &emsp; Erlangga Ibrahim - 672017282<br>
                Kelas :<br>
                &emsp; PBP - B
            </div>
            <div class="vl"></div>
            <div class="column">
                <form method="get">
                    <div class="field">
                        <label class="label">Masukkan Jumlah Data</label>
                        <div class="control">
                            <input class="input" type="number" min=1 max=356110 placeholder="8" name="num" value=<?=$num?>>
                        </div>
                    </div>
    
                    <div class="field">
                        <input class="button is-medium is-primary is-fullwidth" type="submit" value="Hitung">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if($has_set){
        echo '<div class="box anim_open">';
        echo '    <h1 class="has-text-centered title">';
        echo '    <span style="color: red">Hasil</span>';
        echo '    <span style="color: blue">Kalkulasi</span>';
        echo '    <span style="color: #ff00ff">Jumlah</span>';
        echo '    <span style="color: red">Data</span>';
        echo '    </h2>';
        echo '    <hr>';
        echo '    ';
        
        echo '<table class="table" style="margin-left:auto; margin-right:auto;">';
        $i = 1;
        while($i <= $num){
            echo '<tr>';
            for($j=0; $j<=19; $j++){
                if ($i <= $num){
                    echo '<th>';
                    if($i % 2 == 0 && $i % 3 == 0) {
                        echo '<span class="number_box_green">';
                    } else if ($i % 2 == 0) {
                        echo '<span class="number_box_red">';
                    } else if ($i % 3 == 0) {
                        echo '<span class="number_box_blue">';
                    } else {
                        echo '<span class="number_box_black">';
                    }
                    echo $i;
                    echo '</span></th>';
                } else {
                    echo '<th>' . ' ' . '</th>';
                }
                $i++;
            }
            echo '</tr>';
        }
        echo '</table>';

        echo '</div>';
    }
    ?>
</body>

</html>