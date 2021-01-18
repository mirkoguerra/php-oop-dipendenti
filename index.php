<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>php-oop-dipendenti</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PER LA VISUALIZZAZIONE -->

  </head>
  <body>

    <?php

    require_once('class.php');

    $persona_1 = new Persona('Mirko', 'Guerra', 'GRRMRK93R30C758T');

    $impiegato_1 = new Impiegato('Mirko', 'Guerra', 'GRRMRK93R30C758T', '0001');
    $impiegato_1->compenso = 1000;

    $impiegato_salariato_1 = new ImpiegatoSalariato('Mirko', 'Guerra', 'GRRMRK93R30C758T', '0001', 10, 100);

    $impiegato_a_ore_1 = new ImpiegatoAOre('Matteo', 'Bianchi', 'AAAABBBBCCCCDDDD', '0027', 400, 7);

    $impiegato_su_commissione_1 = new ImpiegatoSuCommissione('Roberto', 'Rossi', 'EEEESSSSOOOOCCCC', '0055', 'Progetto Alfa', 25000);

    ?>

    <h1>Persona:</h1>
    <p><?php echo $persona_1->to_string(); ?></p>

    <h1>Impiegato:</h1>
    <p><?php echo $impiegato_1->to_string(); ?></p>

    <h1>Impiegato salariato:</h1>
    <p><?php echo $impiegato_salariato_1->to_string(); ?></p>

    <h1>Impiegato a ore:</h1>
    <p><?php echo $impiegato_a_ore_1->to_string(); ?></p>

    <h1>Impiegato su commissione:</h1>
    <p><?php echo $impiegato_su_commissione_1->to_string(); ?></p>

  </body>
</html>
