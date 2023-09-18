<div class="container mt-4">
    <div class="row">
        <div class="wrap col-12 bg-custom">
            <form class="search" action="{{route('announcements.search')}}" method="GET">
                <input type="search" name="searched" class="searchTerm" placeholder="Cosa stai cercando?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</div>
 