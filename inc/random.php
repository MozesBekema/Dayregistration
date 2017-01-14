<?php
    $color = array('#ff5722', '#9c27b0', '#3f51b5', '#f44336');

      $i = rand(0, count($color)-1);
      $selectedColor = "$color[$i]";
?>
    <style>
        .menuBar {
            background-color: <?php echo $selectedColor;
            ?>;
            box-shadow: $boxshadowLight;
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 64px;
            z-index: 999999;
        }

        .fabButton {
            background-color: <?php echo $selectedColor;
            ?>;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.32);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-top: -25px;
            margin-left: -25px;
            position: absolute;
            float: right;
            text-align: center;
            cursor: pointer;
            transition-duration: 0.2s;
            transition-timing-function: ease;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .fabButton:active {
            filter: brightness(140%);
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.32);
        }

        .buttonRaisedLogin {
            background-color: <?php echo $selectedColor; ?>;
            box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.32);
        }

        .buttonRaised {
            background-color: <?php echo $selectedColor; ?>;
            box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.32);
            font-weight: bold;
            float: right;
            margin-right: 30px;
            filter: brightness(120%);
            margin-top: 12px;
            color: #ffffff;
            width: 90px;
            height: 36px;
            z-index: 62;
            transition-duration: 0.2s;
            transition-timing-function: ease;
            border-radius: 2px;
            cursor: pointer;
        }

        .buttonRaised:active {
            filter: brightness(140%);
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.32);
        }
    </style>
