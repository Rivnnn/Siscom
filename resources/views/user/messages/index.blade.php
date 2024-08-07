@extends('layouts.user')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">My Messages</h1>
        <a href="{{ route('user.messages.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded">Send Message</a>
        <table class="min-w-full bg-white mt-4">
            <thead>
                <tr>
                    <th class="py-2">From</th>
                    <th class="py-2">To</th>
                    <th class="py-2">Content</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td class="py-2">{{ $message->fromUser->name }}</td>
                        <td class="py-2">{{ $message->toUser->name }}</td>
                        <td class="py-2">{{ $message->content }}</td>
                        <td class="py-2">
                            <a href="{{ route('user.messages.show', $message) }}"
                                class="bg-blue-500 text-white px-2 py-1 rounded">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
