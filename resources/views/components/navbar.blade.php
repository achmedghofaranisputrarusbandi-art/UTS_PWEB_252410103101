@props(['username' => null])

<nav>
    <span class="brand">🍽️ Kantin Kampus</span>

    @if($username)
        <a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
        <a href="{{ route('profile', ['username' => $username]) }}">Profile</a>
        <a href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a>
        <a href="{{ route('login') }}">Logout</a>
    @endif
</nav>