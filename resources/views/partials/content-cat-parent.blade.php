@php
  $cat = get_the_category(); $cat = $cat[0];
  echo '<section class="mdl-color--black mdl-color-text--red ' . $cat->category_nicename . '" />';
@endphp
</section>

@php
  $cat_id = get_queried_object()->cat_ID; $post_id = 'category_'.$cat_id
@endphp


@php
$categories = get_terms( 'category', array(
    'orderby'    => 'count',
    'hide_empty' => 0,
    'parent' => get_query_var('cat'),
 ) )
@endphp
