<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Informations Personnelles') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Mets à jour ta photo, ton identifiant, ton nom d\'utilisateur et ta bio ') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                "/>

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ asset('storage/'.$this->user->profile_photo_path) }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Selectionner une nouvelle photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Supprimer cette photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nom') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Identifiant') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="bio" value="{{ __('Ma Bio') }}" />
            <x-jet-input id="bio" type="bio" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-s" wire:model.defer="state.bio" />
            <x-jet-input-error for="bio" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="profession" value="{{ __('Profession') }}" />
            <x-jet-input id="profession" type="profession" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-s" wire:model.defer="state.profession" />
            <x-jet-input-error for="bio" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4" >
            <x-jet-label for="nameCooperation" value="{{ __('Vous etes membre de :') }}" />
            <select id="nameCooperateur" name="nameCooperateur" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-s"  wire:model.defer="state.nameCooperateur" >
                <option value="Ocellia"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ocellia</font></font></option>
                <option value="Don Bosco"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Don Bosco</font></font></option>
                <option value="IRTS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">IRTS</font></font></option>
                <option value=ARHM><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arhm</font></font></option>
            </select>
        </div>

        <!-- Bio Utilisateur
        <div class="col-span-6 sm:col-span-4">
            <label for="bio" class="mt-1 block" >Ma Bio</label>
            <textarea class="form-control" id="bio" class="mt-1 block w-full" wire:model.defer="state.bio"></textarea>
        </div>   -->                              
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Enregistré') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Enregistrer') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
