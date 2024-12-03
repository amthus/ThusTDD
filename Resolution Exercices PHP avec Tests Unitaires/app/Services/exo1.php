<?php
namespace App\Services;
class exo1{
    function direBonjour(): string {
        return "Bonjour, Monde !";
    }
    
    function addition($a, $b): int {
        return $a + $b;
    }
    
    function trouverMax($a, $b): int {
        return max($a, $b);
    }
    
    function compterCaracteres(string $texte): int {
        $compteur =0;
        for($i=0;isset($texte[$i]);$i++){
            $compteur ++;
        }return $compteur;
    }
    
    function estPair($nombre): bool {
        return $nombre % 2 === 0;
    }
    
    function saluer(string $nom): string {
        return $nom ? "Bonjour, $nom !" : "Bonjour, Inconnu !";
    }
    
    function calculerAire($longueur, $largeur): int {
        return ($longueur > 0 && $largeur > 0) ? $longueur * $largeur : 0;
    }
    
    function convertirEnMajuscules(string $texte): string {
        return strtoupper($texte);
    }
    
    function sommeTableau(array $tableau): int {
        return array_sum($tableau);
    }
    
    function existeDansTableau($element, array $tableau): bool {
        return in_array($element, $tableau);
    }
    
}