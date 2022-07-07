<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600" href="{{ route('posts.create') }}">Add New Post</a>
                    <br />
                    <br />
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Title</th>
                                <th scope="col" class="px-6 py-3">Post Text</th>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr class="bg-white border-b">
                                    <td scope="col" class="px-6 py-3">{{ $post->title }}</td>
                                    <td scope="col" class="px-6 py-3">{{ $post->post_text }}</td>
                                    <td scope="col" class="px-6 py-3">{{ $post->category }}</td>
                                    <td scope="col" class="px-6 py-3">
                                        <a href="{{ route('posts.edit', $post) }}">Edit</a>
                                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
