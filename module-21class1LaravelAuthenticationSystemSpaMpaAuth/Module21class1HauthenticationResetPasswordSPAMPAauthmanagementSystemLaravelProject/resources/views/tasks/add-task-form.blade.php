<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add Task') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Create A New Task') }}
        </p>
    </header>

    <form method="post" action="{{ route('tasks.store') }}" class="mt-6 space-y-6">
        @csrf
                
        <div>
            <x-input-label for="name" :value="__('name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
             autocomplete="name" />
            <x-input-error class="mt-2":messages="$errors->get('name')"  />
        </div>

        <div>
            <x-input-label for="status" :value="__('status')" />
            <select id="status" name="status" class="mt-1 block w-full" aria-required="">
                <option Value="pending">Pending</option>
                <option Value="done">Done</option>
            <select>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

        </div>
    </form>
</section>