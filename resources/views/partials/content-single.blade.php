<article class="inner mdl-grid">
  <section class="mdl-cell mdl-cell--9-col">
    <div class="mdl-grid mdl-grid--no-spacing">
      <div class="mdl-cell mdl-cell--6-col mdl-color--blue-grey-50">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col">
        @if(has_post_thumbnail())
            {{the_post_thumbnail() }}
        @endif
          </div>
        </div>
      </div>

      <div class="mdl-cell mdl-cell--12-col mdl-color--blue-grey-50 flex flex--center">
        <div class="mdl-grid">
        <h3 class="title title--fontSmall">{{ get_the_title() }}</h3>
        </div>
      </div>

      <h5>
      @php
        $cats = get_the_category()
      @endphp
      @foreach($cats as $cat)
        @if($cat->parent)
          {{$cat->cat_name}}
        @endif
      @endforeach
      </h5>

    </div>
</section>


<section class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
  @include('partials/sidebar')
</section>

</article>
