<?php

require "functions.php";

// Un tableau de 3x3 par defaut avec des valeurs de cellules a null.
$game = [[null,null,null],[null,null,null],[null,null,null]];//todo instanciate me.

play($game);


function showCharacter($cell): string
{

    if ($cell === 1) {
        return "X";
    }
    if ($cell === 2) {
        return "O";
    }
    if ($cell === null) {
        return " ";
    }
    return " ";
}

function isEmpty($game, $resX, $resY): bool
{
    return $game[$resX][$resY] === null;
}

function hasAnyEmptyCell($game): bool
{
    foreach ($game as $column) {
        foreach ($column as $case) {
            return $column[$case] === null;
        }
    }

    return false;
}

function changePlayer($player) {
    if ($player === 1) {
        return 2;
    } else if ($player === 2) {
        return 1;
    }
}


