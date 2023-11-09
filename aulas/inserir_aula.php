<?php 

file_put_contents('log.txt', file_get_contents('php://input'));

// function buscaProfessor(){

// }



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(isset($_POST['classe_id']) && isset($_POST['sala_id']) && isset($_POST['professor_id']) && isset($_POST['horario'])){
        $classe_id  = $_POST['classe_id'];
        $professor_id = $_POST['professor_id'];
        $sala_id = $_POST['sala_id'];
        $time = $_POST['horario'];
        
        echo json_encode(array(
            'classe_id' => $classe_id, 
            'professor_id' => $professor_id, 
            'sala_id' => $sala_id, 
            'horario' => $time
        ));
        
        $sql = "INSERT INTO aula('') values ('')";
        $query = mysqli_query($conexao, $sql);
       
    }
}



