<div class="container mt-5 pt-5  mb-3">
    <div class="row justify-content-center">
        <div class="col-10 col-md-6 mt-5 ">
            <form class="search" action="{{route('announcements.search')}}" method="GET">
                <input type="search" name="searched" class="searchTerm" placeholder="{{ __('ui.search')}}">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </form>

            <div id="fungo" class="fungo">
                <img src="/media/fungo.png" height="40px" alt="">
            </div>
        </div>
    </div>
</div>
 