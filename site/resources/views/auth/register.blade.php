<x-guest-layout>
    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="first_name" :value="__('Prénom')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            </div>

            <div style="margin-top: 1rem;">
                <x-label for="last_name" :value="__('Nom')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Adresse mail')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmation du mot de passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <input type="text" name="account" value="1" style="display:none">
            <br/>
            <p>
                <div class="mycheckboxes">
                    <input name="terms" type="hidden" value="1">
                    <input type="checkbox" class="checkbox rounded border-gray-300 text-gray-600 shadow-sm focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50" name="gdpr" value="1">
                    <label for="gdpr" class="checkboxlabel">J'ai lu et j'accepte les <a href="{{ url('/conditions-generales') }}" style="text-decoration:underline">conditions générales</a> et la <a href="{{ url('/politique-de-confidentialite') }}" style="text-decoration:underline">politique de confidentialité</a>.</label>
                </div>
            </p>
            <br/>
            <input type="submit" value="S'inscrire" class="custom-button submitcheck" id="sent"
            style="display: inline-block;
            cursor: pointer;
            color: #ffffff;
            text-transform: uppercase;
            font-size: 0.75em;
            text-align: center;
            letter-spacing: 2px;
            //width: 160px;
            padding:10px 20px;
            border: 2px solid #CBD5CC;
            background: #CBD5CC;
            outline: none;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            border-radius:0;
            z-index:1;"
            >

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré? ') }}
                </a>

                <!--
                <x-button class="ml-4 submitcheck">
                    {{ __('S\'inscrire') }}
                </x-button>
                -->
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
