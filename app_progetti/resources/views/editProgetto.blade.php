<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Progetto Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="/progettos/{{$progetto->id}}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Progetto name" value="{{$progetto->name}}">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="description" placeholder="Progetto description" value="{{$progetto->description}}">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="state">
                            'create', 'start', 'complete', 'end'
                                <option selected>Selected Progetto state</option>
                                <option value="create" @if ($progetto->state === "create") {{ 'selected' }} @endif>Create</option>
                                <option value="start" @if ($progetto->state === "start") {{ 'selected' }} @endif>Start</option>
                                <option value="complete" @if ($progetto->state === "complete") {{ 'selected' }} @endif>Complete</option>
                                <option value="end" @if ($progetto->state === "end") {{ 'selected' }} @endif>End</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="type">
                                <option selected>Selected Progetto type</option>
                                <option value="Front-End" @if ($progetto->type === "Front-End") {{ 'selected' }} @endif>Front-End</option>
                                <option value="Back-End" @if ($progetto->type === "Back-End") {{ 'selected' }} @endif>Back-End</option>
                                <option value="Full-Stack" @if ($progetto->type === "Full-Stack") {{ 'selected' }} @endif>Full-Stack</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="language">
                                <option selected>Selected Progetto language</option>
                                <option value="Javascript/Node" @if ($progetto->language === "Javascript/Node") {{ 'selected' }} @endif>Javascript/Node</option>
                                <option value="Laravel/Blade" @if ($progetto->language === "Laravel/Blade") {{ 'selected' }} @endif>Laravel/Blade</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark d-block text-black">Update Progetto</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>