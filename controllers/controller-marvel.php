<?php
// appel de mes données
require "../models/data.php";

/**
 * Fonction permettant de créer des cards de personnes
 * 
 * @param array $data tableau de données dans le model data.php
 * @param int $limit nombre de cards à afficher
 * @return void
 */
function createPersonsmarve(array $data, int $limit = 9, $category): void
{

    // je mets en place une variable permettant d'afficher les images de mes cards
    $i = 1;

    echo '<div class="row justify-content-center">';
    foreach ($data as $person) {
        if ($person['cat'] == $category) {
            if ($i > $limit) {
                break;
            }

            echo '<div class="card col-lg-3 col-8 px-0 m-3 text-center">';
            echo '<img src="../assets/img/' .$person['pic'] . '" class="card-img-top" alt="fakeImage">';
            echo '<div class="card-body">';
          echo '<h5 class="card-title text-secondary">' . $person['title'] . '</h5>';
            echo '<p class="card-text">';
            echo '<ul>';
            echo '<li><b>year : </b>' . $person['year'] . '</li>';
            echo '<li><b>price : </b>' . $person['price'] . '</li>';
            echo '</ul>';
            echo '</p>';
            echo '<a href="#" class="btn btn-primary">BUY NOW</a>';
            echo '</div>';
            echo '</div>';
        }
        
    }
    echo '</div>';
}


// appel de ma vue
include "../views/marvel.php";
