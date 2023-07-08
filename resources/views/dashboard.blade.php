<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    
    <table style="width: 30%">
        <tr>
          <th>Name</th>
          <th>Mobile</th>
          <th>Email</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
        <tr>
          <td>January</td>
          <td>$100</td>
        </tr>
    </table>
    
</x-app-layout>
