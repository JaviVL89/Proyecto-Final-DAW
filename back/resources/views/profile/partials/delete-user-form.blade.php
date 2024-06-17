<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Eliminar cuenta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Una vez que tu cuenta sea eliminada, todos sus recursos y datos serán eliminados permanentemente. Antes de eliminar tu cuenta, por favor descarga cualquier dato o información que desees conservar.') }}
        </p>
    </header>

    <button
        class="btn btn-danger"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Eliminar cuenta') }}</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form id="delete-account-form" method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('¿Estás seguro de que deseas eliminar tu cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Una vez que tu cuenta sea eliminada, todos sus recursos y datos serán eliminados permanentemente. Por favor, introduce tu contraseña para confirmar que deseas eliminar permanentemente tu cuenta.') }}
            </p>

            <div class="mt-6 form-group">
                <x-input-label for="password" value="{{ __('Contraseña') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Contraseña') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <button type="button" class="btn x-secondary-button" x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </button>

                <button type="submit" class="btn btn-danger ms-3">
                    {{ __('Eliminar cuenta') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
