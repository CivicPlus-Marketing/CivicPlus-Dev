<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">

    <input
      type="search"
      placeholder="{!! esc_attr_x('What are you looking for', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
    >

  <button>{{ _x('Search', 'submit button', 'sage') }}</button>
</form>
