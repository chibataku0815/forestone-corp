@php
  $cat = get_the_category(); $cat = $cat[0];
  echo '<section class="mdl-color--black mdl-color-text--red ' . $cat->category_nicename . '" />';
@endphp
  <div class="mdl-grid flex flex--center">
    <div class="title title--fontMiddle title--bold mdl-cell mdl-cell--4-col flex flex--center">
    @php
      $cats = get_the_category();
      foreach($cats as $cat):
      if($cat->parent) echo $cat->cat_name;
      endforeach;
    @endphp
    </div>
</div>
</section>


@if (!have_posts())
<article @php(post_class())>
  <div class="alert alert-warning">
    {{ __('記事がありません.', 'sage') }}
  </div>
  {!! get_search_form(false) !!}
</article>
@endif

@php
  $cat_id = get_queried_object()->cat_ID; $post_id = 'category_'.$cat_id
@endphp
