{{-- @if(session()->has('alert')) --}}
<div class="flash-wrapper">
    <p class="flash-message"></p>
</div>
<script>
    $(document).ready(() => {
        $('.flash-wrapper').fadeOut(100);
    });
</script>
{{-- <script>
    @php
        if(session()->has('alert')){
    @endphp
        $('.flash-wrapper').fadeIn();
        setTimeout(() => {
            $('.flash-wrapper').fadeOut(100);
        }, 2000);
    @php
        }else {
    @endphp
        $('.flash-wrapper').fadeOut(100);
    @php
        }
    @endphp
</script>
@endif --}}