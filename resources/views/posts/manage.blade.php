@extends('components/layout')
@section('content')

<section class="px-6 py-8">
    <main class="max-w-5xl mx-auto mt-10 bg-primary border border-gray p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl capitalize">manage post</h1>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 allign middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow oveflow-hidden border-b border-gray sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray">
                            <tbody class="bg-white divide-y divide-gray">
                                @foreach($posts as $post)
                                <tr class="hover:bg-accent">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray">
                                                <a href="/posts/{{ $post->slug }}">
                                                    {{ $post->title }}
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-1 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="/posts/{{ $post->id }}/edit" class="text-info hover:text-secondary-focus uppercase">edit</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form method="POST" action="/posts/{{ $post->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-xs text-error uppercase">
                                                delete</button>
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
    </main>
</section>

@endsection