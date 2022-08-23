<style>
    .center {
        margin-left: auto;
        margin-right: auto;
    }

    tr{

        align: center;
        border: 3px solid #96D4D4;
        border-radius: 10px;
    }

    tr:hover{

        background-color: #96D4D4;
        border: white;

    }

    table{
        margin-top: 10px;
    }

    h4{
        text-align: center;
    }

</style>

<?php 

    for($y=0; $y <= 10; $y++){
        echo ("<h4>TABOADA DO $y<h4>");
        for ($i = 0; $i <= 10; $i++){
            $x = $y * $i;
            echo ("<table style='width:20%' class='center'>");
                echo ("<tr>");
                    echo ("<td style='width:50%'> $i x $y = $x</td>");
                echo ("</tr>");
            
            echo ("</table>");
        }
        echo ("<br>");
    }
?>
