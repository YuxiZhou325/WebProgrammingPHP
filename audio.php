<div class="audio">
    <div class="container">
        <audio controls id="audio">
            <source src="999117.mp3" type="audio/mpeg" />
        </audio>
    </div>
</div>
<script>
    // Play audio
    let isClickP = false;
    let isClickA = false;
    let audio = $('#audio')[0]
    let index = 0

    $('#audio').on('ended', function () {
        $('.album-area li.col').eq(index).removeClass('play')
    })

    $('.album-area .iconfont').on('click', function (e) {
        isClickP = true;
        setTimeout(() => isClickP = false, 0);
        index = $(this).parents('li.col').index()
        if (audio.paused) {
            audio.play()
            $(this).parents('li.col').addClass('play')
        } else if ($(this).parents('li.col').hasClass('play')) {
            audio.pause()
            $(this).parents('li.col').removeClass('play')
        }
    })

    $(".album-area .col a").on("click", function () {
        isClickA = true;
        if (isClickP && isClickA) {
            event.preventDefault();
        }
        setTimeout(() => isClickA = false, 0);
    })
</script>