<form action="<?php echo home_url( '/' ) ?>" class="search-form" method="get" role="search">

  <input
    class="form-control search-input"
    name="s"
    placeholder="search"
    title="Search"
    type="search"
    value="<?php echo get_search_query() ?>"
  />
  <button
    class="search-submit"
    name="submit"
    type="submit" 
  ></button>

</form>