<x-layout>
    @auth
    @if(auth()->user()->role == 'teacher' || auth()->user()->role == 'admin')
    <script>window.location = "/sessions";</script>
    @else
    <script>window.location = "/classes";</script>
    @endif
    @endauth

</x-layout>