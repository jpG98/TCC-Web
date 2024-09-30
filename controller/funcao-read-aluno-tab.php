<?php
    function funcaoTabela(){
        include("../model/connect.php");
        $query = mysqli_query($conexao,"SELECT * FROM denuncia ORDER BY denuncia_id DESC");
            while($exibe = mysqli_fetch_array($query)){
            echo "<tr>
                    <td class='text-center'><img src='imgs/$exibe[4]' width='150px'></td>
                    <td class='text-center'>$exibe[5]</td>
                    <td class='text-center'>$exibe[1]</td>
                    <td class='text-center'>$exibe[2]</td>
                    <td class='text-center'>$exibe[0]</td>
                    <td class='text-center'>$exibe[7]</td>
                </tr>";       
            }
    }   
 ?>