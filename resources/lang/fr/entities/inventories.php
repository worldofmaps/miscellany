<?php

return [
    'actions'       => [
        'add'   => 'Ajouter un objet',
    ],
    'create'        => [
        'success'   => 'Objet :item ajouté à :entity.',
        'title'     => 'Ajouter un objet à :name',
    ],
    'destroy'       => [
        'success'   => 'Objet :item retiré de :entity.',
    ],
    'fields'        => [
        'amount'            => 'Nombre',
        'copy_entity_entry' => 'Utiliser l\'entrée de l\'objet',
        'description'       => 'Description',
        'is_equipped'       => 'Equipé',
        'name'              => 'Nom',
        'position'          => 'Position',
        'qty'               => 'Qté',
    ],
    'helpers'       => [
        'copy_entity_entry' => 'Affiche l\'entrée de l\'objet au lieu de la description.',
    ],
    'placeholders'  => [
        'amount'        => 'Un nombre',
        'description'   => 'Usé, abimé, atténué',
        'name'          => 'Requis si aucun object n\'est sélectionné',
        'position'      => 'Equipé, Sac-à-dos, Entrepôt, Banque',
    ],
    'show'          => [
        'helper'    => 'Les entités peuvent avoir des objets attachés pour créer un inventaire.',
        'title'     => 'Inventaire de l\'entité :name',
        'unsorted'  => 'Autre',
    ],
    'update'        => [
        'success'   => 'Objet :item modifié pour :entity.',
        'title'     => 'Modifier un objet sur :name',
    ],
];
