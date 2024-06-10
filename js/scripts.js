function _call_carousel(cnt) {
    // INIT CAROUSEL
    window["carousel_" + cnt] = new CgCarousel(
      "#js-carousel_" + cnt,
      window["carousel_options_" + cnt],
      {}
    );
    // Navigation
    window["next_" + cnt] = document.getElementById("js-carousel__next_" + cnt);
    window["next_" + cnt].addEventListener("click", () =>
      window["carousel_" + cnt].next()
    );
    window["prev_" + cnt] = document.getElementById("js-carousel__prev_" + cnt);
    window["prev_" + cnt].addEventListener("click", () =>
      window["carousel_" + cnt].prev()
    );
  }
  
  
//menu btn
  
  function _open_menu(){
    $('.overlay-div').animate({'margin-left':'0'},200);
    $('.menu-div').animate({'margin-left':'0'},400);
}

function _close_side_nav(){
    $('.overlay-div').animate({'margin-left':'-100%'},200);
    $('.menu-div').animate({'margin-left':'-100%'},400);
}

  
  
 