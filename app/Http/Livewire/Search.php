<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Search extends Component
{
    public String $recherche = "";
    public $users = [];
    public Int $UtilisateurSelectionne = 0;

    //Fonction qui permet de naviguer avec la flèches du bas dans la reponse envoyée par la recherche
    public function incrementeSelection()
    {
        //Pour revenir directement à la première réponse si on clique sur la flèche du bas lorsqu'on est au dernier utilisateur
        if ($this->UtilisateurSelectionne == count($this->users)-1)
        {
            $this->UtilisateurSelectionne = 0;
        }

        else
        {
            $this->UtilisateurSelectionne++;
        }
    }

    //Fonction qui permet de naviguer avec la flèche du h dans la reponse envoyée par la recherche
    public function decrementeSelection()
    {
        //Pour revenir directement à la dernière réponse si on clique sur la flèche du haut lorsqu'on est aau premier résultat
        if ($this->UtilisateurSelectionne == 0)
        {
            $this->UtilisateurSelectionne = count($this->users)-1;
        }

        else
        {
            $this->UtilisateurSelectionne--;
        }
    }


    
    //Fonction qui met à jour la recherche de l'utilisateur
    public function updatedRecherche()
    {
        //Les pourcentages sont mis pour dire d'accepter les caractères autour de la recherche
        $requete = '%'.$this->recherche.'%';


        $this->users = User::where('name', 'like', $requete)
        ->get();
    }

    //Remettre à 0 la variable de requete selectionnée
    public function reinitialiserSelection()
    {
        $this->reset('UtilisateurSelectionne');
    }

    public function AfficherPageDeProfil()
    {
        if ($this->users)
        {
            return redirect()->route('profile.AfficherPageDeProfil', [$this->users[$this->UtilisateurSelectionne]['id']]);

        }
    }

    //Retourne la vue
    public function render()
    {
        return view('livewire.search');
    }
    
}
