<form action="<?php echo home_url( '/' ) ?>" method="get" role="search">

  <input
    class="form-control"
    name="s"
    placeholder="search"
    title="Search"
    type="search"
    value="<?php echo get_search_query() ?>"
  />

</form>