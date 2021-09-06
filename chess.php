<html>
    <head></head>
    <body>
        <table width="50%"   border="1px">
            <tr>
                <?php
                    for($r=1;$r<=8;$r++){
                        echo "<tr>";
                        for($c=1;$c<=8;$c++){
                           if(($r+$c)%2==0){
                            echo "<td height=90px  bgcolor=#000000></td>";
                           }else{
                            echo "<td height=90px  ></td>";
                           }
                        }
                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>

  