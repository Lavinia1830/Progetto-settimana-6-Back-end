<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Progettos Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a type="button" href="/progettos/create" class="btn btn-dark d-block text-black">Add Progetto</a>
                </div>
                <div class="p-6 text-gray-900">
                    @if(count($progettos) > 0)
                        <ul class="list-group list-group-flush">
                            @foreach ($progettos as $progetto)
                                <li class="list-group-item {{$progetto->state}}" >
                                    <strong>{{$progetto->name}}</strong>
                                    <span class="float-end d-flex">
                                        <a type="button" class="btn btn-outline-info me-2" href="progettos/{{$progetto->id}}">
                                            <i class="bi bi-clipboard-check"></i>
                                        </a>
                                        <a type="button" class="btn btn-outline-warning me-2" href="progettos/{{$progetto->id}}/edit">
                                            <i class="bi bi-pen"></i>
                                        </a>
                                        <form method="post" action="/progettos/{{$progetto->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </span>
                                </li>
                            @endforeach
                            </ul>
                        @else
                            <p>I don't have any records!</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
