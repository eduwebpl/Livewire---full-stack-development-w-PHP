<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    @livewire('message', ['message' => 'wiadomość!'])

    <div x-data="{ open: false }">
        <button @click="open = true">Show More...</button>

        <ul x-show="open" @click.away="open = false">
            <li><button>Archive</button></li>
            <li><button >Delete</button></li>
        </ul>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
       <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
       <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Sign in to your account
       </h2>
       <p class="mt-2 text-center text-sm text-gray-600 max-w">
          Or
          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
          start your 14-day free trial
          </a>
       </p>
    </div>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
       <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
          <form class="space-y-6" action="#" method="POST">
             <div>
                <label for="email" class="block text-sm font-medium text-gray-700">
                Email address
                </label>
                <div class="mt-1">
                   <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                @error('email') {{ $message }} @enderror
             </div>
             <div>
                <label for="password" class="block text-sm font-medium text-gray-700">
                Password
                </label>
                <div class="mt-1">
                   <input wire:model="password" id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                   @error('password') {{ $message }} @enderror
                </div>
             </div>
             <div>
                <button wire:click.prevent="$emit('register')" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Sign in
                </button>
             </div>
          </form>
       </div>
    </div>
