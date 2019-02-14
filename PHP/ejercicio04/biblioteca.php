<?php
    function cabecera($titulo) {
        print '<!DOCTYPE html>';
        print '<html>';
        print '<head>';
        print '<meta charset="utf-8">';
        print '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        print '<title>Funciones</title>';
        print '<meta name="viewport" content="width=device-width, initial-scale=1">';
        print '</head>';
        print '<body>';
        print '<p><h1>$titulo</h1></p>';
    }

    function pie() {
        print '</body>';
        print '</html>';
    }
?>