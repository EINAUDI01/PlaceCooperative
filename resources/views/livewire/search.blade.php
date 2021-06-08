<div class="inline-block" x-data="{ open:true }">
    <form class="d-flex">
        <input  @click.away="{open = false; @this.reinitialiserSelection();}"  @click = "{ open = true }" class="form-control me-sm-2 focus:outline-none" name="recherche" placeholder="Rechercher une formation ou un formateur" wire:model="recherche" wire:keydown.arrow-down.prevent="incrementeSelection" wire:keydown.arrow-up.prevent="decrementeSelection" wire:keydown.backspace="reinitialiserSelection" wire:keydown.enter.prevent="AfficherPageDeProfil" wire:click="AfficherPageDeProfil">
        <button class="btn btn-secondary my-2 my-sm-0 border bg-yellow-200" type="submit">Rechercher</button>
    </form>
    <!-- Menu qui s'affiche si la requte a une reponse-->
    <div x-show="open" class="border bg-yellow-50">
        @if(strlen($recherche) > 0)
            @if(count($users) > 0)
                    @foreach($users as $Selectionner => $user)
                    <p class="p-1 {{ $Selectionner == $UtilisateurSelectionne ? 'text-yellow-500' : '' }}">{{ $user -> name}}</p>
                    @endforeach
                @else
                    <span> Aucun résultat pour "{{ $recherche}}" </span>
            @endif
        @endif
    </div>
</div>
