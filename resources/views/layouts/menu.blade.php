@if(\Illuminate\Support\Facades\Auth::user()->role === 'Chief')

    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link">
            <p>Coordinators</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('supporter') }}" class="nav-link">
            <p>Supporters</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('candidate') }}" class="nav-link">
            <p>Candidates</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('agitators') }}" class="nav-link">
            <p>Agitators</p>
        </a>
    </li>
@endif()

@if(\Illuminate\Support\Facades\Auth::user()->role === 'Coordinator')
    <li class="nav-item">
        <a href="{{ route('candidate') }}" class="nav-link">
            <p>Candidates</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('agitators') }}" class="nav-link">
            <p>My agitators</p>
        </a>
    </li>
@endif

@if(\Illuminate\Support\Facades\Auth::user()->role === 'Agitator')
    <li class="nav-item">
        <a href="{{ route('supporter') }}" class="nav-link">
            <p>My supporter</p>
        </a>
    </li>
@endif
