<?php
    function funcaoTabela(){
        include("../model/connect.php");
        $query = mysqli_query($conexao,"SELECT * FROM alunos ORDER BY Aluno_Codigo DESC");
            while($exibe = mysqli_fetch_array($query)){
            echo "<tr>
                    <td class='text-center'>$exibe[0]</td>
                    <td class='text-center'><img src='imgs/$exibe[1]' width='100px'></td>
                    <td class='text-center'>$exibe[2]</td>
                    <td class='text-center'>$exibe[3]</td>
                    <td class='text-center'>$exibe[4]</td>
                </tr>";       
            }
    }   
 ?>