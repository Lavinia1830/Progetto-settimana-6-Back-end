<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Progetto Detail Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row g-0">
                        <div class="card-body my-3">
                        <h5 class="card-title">{{$progetto->name}}</h5>
                        <p class="card-text">Description: {{$progetto->description}}</p>
                        <p class="card-text">Type: {{$progetto->type}}</p>
                        <p class="card-text">Language: {{$progetto->language}}</p>
                        <p class="card-text">State: {{$progetto->state}}</p>
                        <p class="card-text"><small class="text-body-secondary">User {{$progetto->user_id}}</small></p>
                        <p class="card-text"><small class="text-body-secondary">Attivita {{$progetto->attivita_id}}</small></p>
                        <p class="card-text"><small class="text-body-secondary">Last create {{$progetto->created_at}}</small></p>
                        <p class="card-text"><small class="text-body-secondary">Last updated {{$progetto->updated_at}}</small></p>
                    </div>
                    <div class="card-body">
                        <a type="button" class="btn btn-outline-dark d-block" href="/progettos">Back</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>