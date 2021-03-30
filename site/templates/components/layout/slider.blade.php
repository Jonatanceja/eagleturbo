<div class="swiper-container">
    <div class="swiper-wrapper">
      {{ $slot }}
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

@once
@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
      effect: 'fade',
      fadeEffect: {
      crossFade: true
      },
      
    });
  </script>
@endpush
@endonce
