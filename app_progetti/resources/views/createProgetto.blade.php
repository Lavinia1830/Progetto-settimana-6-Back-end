<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Progetto Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="/progettos">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name...">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="description" class="form-control" placeholder="Description...">        
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="type">
                                <option selected>Selected Progetto type</option>
                                <option value="Front-End">Front-End</option>
                                <option value="Back-End">Back-End</option>
                                <option value="Full-Stack">Full-Stack</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="language">
                                <option selected>Selected Progetto language</option>
                                <option value="Javascript/Node">Javascript/Node</option>
                                <option value="Laravel/Blade">Laravel/Blade</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="state">
                                <option selected>Selected Progetto state</option>
                                <option value="start">Start</option>
                                <option value="complete">Complete</option>
                                <option value="end">End</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark d-block text-black">Add Project</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>