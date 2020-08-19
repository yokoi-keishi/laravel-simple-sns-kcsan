<div class="card">
  <div class="card-body">
    <div class="d-flex flex-row">
      <a class="text-dark" href="{{ route('users.show', ['name' => $person->name]) }}">
        <i class="fas fa-user-circle fa-3x"></i>
      </a>
      @if(Auth::id() !== $person->id)
      <follow-button
        class="ml-auto"
        :initial-is-followed-by='@json($person->isFollowedBy(Auth::user()))'
        :authorized='@json(Auth::check())'
        endpoint="{{ route('users.follow', ['name' => $person->name]) }}"
      >
      </follow-button>
      @endif
    </div>
    <h2 class="h5 card-title m-0">
      <a class="text-dark" href="{{ route('users.show', ['name' => $person->name]) }}">
        {{ $person->name }}
      </a>
    </h2>
  </div>
</div>