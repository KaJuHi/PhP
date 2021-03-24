<?php
    $vetor[] = "";
    $array[] = "";

    for ($i=0; $i < 26; $i++) { 
        $vetor[$i] = rand(1, 60);
    }

    $array = array_unique($vetor);

   sort($array);

   echo "<html>
   <head>
       <title> Gerador de números da sorte </title>
       <style>
       body{
           background-color: rgb(123, 214, 218);
       }

       h1{
           font-family: 'Courier New', Courier, monospace;
           text-align: center;
           font-size: 70px;
       }

       h2{
           font-family: 'Courier New', Courier, monospace;
           font-size: 40px;
           text-align: center;
       }
       table{
           background-color: rgb(86, 175, 197);
           width: 100%;
           height: 100%;
       }
   </style>
   </head>
   
   <body>
   <table>
   <th>
       <td>
           <h1> Os números sorteados são:  </h1>
           <br>
           <h2> ";

    for ($i=0; $i < 6; $i++) { 
        echo $array[$i]."   ";
    }

    echo"</h2></td>
    </th>
</table>
</body>";
