 <!--Cette page est celle qui s'affiche lorsqu'un utilisteur connecté fait une recherche de nom sur un utilisateur-->
<x-app-layout>
<div>
    <figure class="decoration-clone md:flex border-2 border-red-5000 md:rounded-xl p-8 md:p-0">
        <img class="rounded-full w-32 h-32 md:w-48 md:h-auto mx-auto" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
                <p class="text-lg">
                 <!--Les codes entre crochets vont permettre de récupérer les informations àafficher sur la page relatives à chaque utilisateur -->
                    {{ $user->bio }}
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-cyan-600">
                    {{ $user->name }}
                </div>
                <div class="text-gray-500">
                    {{ $user->profession }}  <br/>
                </div>
            </figcaption>
             <!--La condition établie ici permet de vérifier si la recherche est effectué sur le nom de l'utilisateur déjà connecté, ainsi on devra afficher une page semblable à la page mon profil-->
            @if( (Auth::user()->name ) ==  ($user->name))
                <div class="flex text-gray-500 space-x-3 mb-4 text-sm font-medium">
                    <div class="flex-auto flex space-x-3">
                        <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Envoyer un message</button>
                        <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Mes Contacts</button>
                        <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like">
                            <svg width="20" height="20" fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                        </button>
                    </div>
                </div>
             <!--Dans le cas contraire, on applique le code suivant à la page-->
            @else
            <div class="flex text-gray-500 space-x-3 mb-4 text-sm font-medium">
                <div class="flex-auto flex space-x-3">
                    <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Chatter</button>
                    <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Autres Contacts</button>
                </div>
            </div>
            @endif
        </div>
    </figure> 

     <!--Ici, le code permet d'afficher les deux emplacements prévus pour les formations et les activités récentes de l'utilisateur-->
    <div class="h-64 grid grid-cols-2 grid-flow-col gap-4">
        <div class="flex items-center justify-center border-solid border-4 border-light-blue-500 col-span-1">  
                FORMATIONS
        </div>
        <div class="flex items-center justify-center border-solid border-4 border-light-blue-500 col-span-1">
                ACTIVITES RECENTES
        </div>
    </div>
</div>
</x-app-layout>