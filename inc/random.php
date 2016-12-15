<?php
    $bg = array('img/materialCalendar.png', 'img/materialDatepicker.png', 'img/materialTodo.png' );
    $i = rand(0, count($bg)-1); // generate random number size of the array
    $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<style>
    .card-wide > .mdl-card__title {
        color: #fff;
        height: 400px;
        background: url(<?php echo $selectedBg; ?>) no-repeat;
        background-size: cover;
        background-position:left;
    }
    @media screen and (max-width:1100px) {
        .card-wide > .mdl-card__title {
            color: #fff;
            height: 400px;
            background: url(<?php echo $selectedBg2; ?>) no-repeat;
            background-size: cover;
            background-position:center;
        }
    }
</style>
