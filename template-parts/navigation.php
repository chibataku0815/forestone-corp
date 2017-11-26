
<button type="button" class="1-12 1-4--tablet grid__cell js-offcanvas-btn f-color--black" >
  <span class="hiraku-open-btn-line"></span>
</button>

<div class="js-hiraku js-offcanvas">
  <a href="/" class="js-hiraku__list">
    Home
  </a>
  <a href="/" class="js-hiraku__list">
    About
  </a>
  <!-- <a href="/blog" class="js-hiraku__list">
    blog
  </a> -->
  <a class="js-hiraku__list" data-remodal-target="modal">
    <div class="contact__text">contact</div>
  </a>
  <div class="remodal" data-remodal-id="modal">
    <button data-remodal-action="close" class="remodal-close"></button>
    <p>
      <?php echo do_shortcode( '[contact-form-7 id="16" title="お問合せ"]' ); ?>
    </p>
  </div>
</div>
