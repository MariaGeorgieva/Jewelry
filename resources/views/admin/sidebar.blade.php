<div class="flex-left position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <a class="list-group-item list-group-item-action" href="{{ url('/dashboard') }}">Admin Panel</a>
        </div>
        <div class="list-group">

            <div class="list-group">
                <a class="list-group-item list-group-item-action "
                   href="{{url('/dashboard')}}"><i class="material-icons">dashboard</i>&ensp;dashboard</a>
                <a class="list-group-item list-group-item-action "
                   href="{{route('home')}}"><i class="material-icons">home</i>&ensp;home page</a>

                <a class="list-group-item list-group-item-action"
                   href="{{url('/upload')}}"><i class="material-icons">file_upload</i>&ensp;upload product</a>

                <a class="list-group-item list-group-item-action"
                   href="{{ url('/show') }}"><i class="material-icons">slideshow</i>&ensp;show products</a>

                <a class="list-group-item list-group-item-action"
                   href="{{ url('/groupsCreate') }}"><i class="material-icons">note_add</i>Groups</a>

                <a class="list-group-item list-group-item-action" href="{{ url('/sectionCreate') }}">
                    <i class="material-icons">local_offer</i>sections</a>

                <a class="list-group-item list-group-item-action" href="{{ url('promo') }}"><i
                            class="material-icons">card_giftcard</i>&ensp;view special offers</a>
            </div>
        </div>
    </div>
</div>