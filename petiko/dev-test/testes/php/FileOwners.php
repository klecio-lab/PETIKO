<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Implemente uma função que ao receber um array associativo contendo arquivos e donos, retorne os arquivos agrupados por dono. 

Por exempolo, um array ["Input.txt" => "Jose", "Code.py" => "Joao", "Output.txt" => "Jose"] a função groupByOwners deveria retornar ["Jose" => ["Input.txt", "Output.txt"], "Joao" => ["Code.py"]].


*/

class FileOwners
{
    public static function groupByOwners($files)
    {
        $array_unico = array_unique($files);
        return NULL;
    }
}

$files = array
(
    "Input.txt" => "Jose",
    "Code.py" => "Joao",
    "Output.txt" => "Jose",
    "Click.js" => "Maria",
    "Out.php" => "maria",

);
var_dump(FileOwners::groupByOwners($files));


        $files = array
        (
            "Input.txt" => "Jose",
            "Code.py" => "Joao",
            "Output.txt" => "Jose",
            "Click.js" => "Maria",
            "Out.php" => "maria",

        );

        dd(array_search('Jose', $files));