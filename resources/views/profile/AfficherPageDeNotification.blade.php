<!--Cette page est mise pour afficher les notifications non lues-->
<x-app-layout>
    <div>
            @foreach (auth()->user()->unreadNotifications as $notification)
                <div class="flex border">
                    <div class="w-1/2">
                        {{ $notification->data['user_name'] }} a consulté votre profil.
                    </div>
                    <!--Ce lien renvoie vers la page de profil de l'utilisateur qui a consulté la page-->
                    <div class="w-1/2">
                        <a href="{{ route('profile.AfficherPageDeProfil', ['id' => $notification -> data['user_id'] ] ) }}">
                            <button class="w-1/2 btn btn-primary right" type="button">
                                Voir son profil<br/>
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
            <!-- Pour marquer que les notifications ont été lues après avoir chargé la page-->
            @foreach (auth()->user()->unreadNotifications as $notification)
                {{$notification->markAsRead()}}
            @endforeach
    </div>
    <div>
        <!--Ce bouton permet à l'utilisateur d'etre redirigé sur la liste de toutes les notifications-->
        <a href="#">
            <div class="d-grid gap-2">
                <button class="w-full btn btn-primary" type="button">
                        Voir plus de notifications
                </button>
            </div>
        </a>
    </div>
</x-app-layout>