<?php
// verifico se nella query string è presente generaPassword (tramite isset($_GET['generaPassword'])). 
// se il parametro è presente, il suo valore viene assegnato altrimenti viene dato come stringa vuota.

$passwordLenght = isset($_GET['generatePassword']) ? $_GET['generatePassword'] : '';


// $passwordLenght rappresenta la lunghezza della password.
function generatePassword($passwordLenght)
{

    // characters contiene i caratteri possibili per generare la password.
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    // array vuoto che contiene i caratteri della password generata.
    $password = array();

    // strlen mi restituisce la lunghezza della stringa -1.
    $characterslength = strlen($characters) - 1;

    
    for ($i = 0; $i < $passwordLenght; $i++) {

        // ad ogni ciclo viene generato un numero casuale 0 a characterslength
        $randomNumbers = rand(0, $characterslength);
        //  esce un carattere casuale da $characters che viene aggiunto all'array della password.
        $password[] = $characters[$randomNumbers];
    };

// conveto l'array $password in stringa con implode e restituito come return della funzione.
    return implode($password);
};


?>