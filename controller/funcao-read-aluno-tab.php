<?php
    function funcaoTabela(){
        include("../model/connect.php");
        $query = mysqli_query($conexao,"SELECT denuncia.imagem_d, denuncia.avalia_visual_d, denuncia.avalia_fisica_d, denuncia.avalia_auditiva_d, denuncia.feedback, comercio.nome FROM denuncia INNER JOIN comercio ON denuncia.comercio_id = comercio.comercio_id ORDER BY denuncia.denuncia_id DESC");
            while($exibe = mysqli_fetch_array($query)){
            echo 
                "<tr>
                    <td class='text-center'><img src='imgs/$exibe[0]' width='150px'></td>
                    <td class='text-center'>$exibe[5]</td>
                    <td class='text-center'>$exibe[1]</td>
                    <td class='text-center'>$exibe[2]</td>
                    <td class='text-center'>$exibe[3]</td>
                    <td class='text-center'>$exibe[4]</td>
                </tr>";       
            }
    }   
 ?>