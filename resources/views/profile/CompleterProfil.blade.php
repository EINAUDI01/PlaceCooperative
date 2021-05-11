<div>
	<!--Insertion du lien bootstrap-->
	<link rel="stylesheet"href="https://bootswatch.com/4/united/bootstrap.min.css">	
</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compléter profil') }}
        </h2>
    </x-slot>

    <div>
        <form method="POST" action="{{ route('register') }}">
        @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="bio">Ajouter une bio</label>
                        <input type="bio" name="bio" class="form-control" id="bio"  placeholder="Votre bio" required />
                    </div>  
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vous etes membre d'une organisation coopérative</font></font></label>
                        <select class="form-select" id="exampleSelect1">
                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ocellia</font></font></option>
                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Don Bosco</font></font></option>
                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">IRTS</font></font></option>
                            <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arhm</font></font></option>
                        </select>
                    </div> 
                    
                    <div class="form-group">
                        <label for="formFile" class="form-label mt-4">Sélectionner votre photo de profile</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                    <div>
                        <!--Bouton d'envoi-->
                        <button type="submit" class="btn btn-primary">Enregister</button>
                        <button type="submit" class="btn btn-primary">Quitter</button>
                    </div>

                </fieldset>
        </form>
    </div>

</x-app-layout>