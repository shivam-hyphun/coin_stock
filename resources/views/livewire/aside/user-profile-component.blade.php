<!-- user-profile-component.blade.php -->

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <a href="{{ route('manage.profile') }}" class="d-block">
            <img src="{{ $userImage }}" class="img-circle elevation-2" alt="User Image">
        </a>
    </div>
    <div class="info">
        <a href="{{ route('manage.profile') }}" class="d-block">{{ $userName }}</a>
    </div>
</div>
