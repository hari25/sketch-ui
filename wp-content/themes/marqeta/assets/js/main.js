var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};

// =========================================
  //   SECTION ANIMATIONS
  // =========================================

  jQuery(document).ready(function($) {
    $(window).on('scroll load', function() {

      $('.fade-in').each(function(i) {
        var objectBottom = $(this).offset().top;
        var windowBottom = $(window).scrollTop() + $(window).height();
        // Retrieve the optional speed parameter so objects can fade in at different speeds
        // The attribute is data-speed, but we use .data so it is retrieved as a number instead of a string.
        var objectSpeed = $(this).data('speed');
        if ( !objectSpeed ) { objectSpeed = 900 }
        // console.log('slide-up objectSpeed=' + objectSpeed + ' and typeOf=' + jQuery.type( objectSpeed ) );
        if ( $(window).width() > 728  && windowBottom > objectBottom ) {

        $(this).animate({
          'opacity': 1
        }, objectSpeed, "linear");

        }
      });

      $('.slide-up').each(function(i) {
          var objectBottom = $(this).offset().top;
          var windowBottom = $(window).scrollTop() + $(window).height();
          // Retrieve the optional speed parameter so objects can fade in at different speeds
          // The attribute is data-speed, but we use .data so it is retrieved as a number instead of a string.
          var objectSpeed = $(this).data('speed');
          if ( !objectSpeed ) { objectSpeed = 900 }
          // console.log('slide-up objectSpeed=' + objectSpeed + ' and typeOf=' + jQuery.type( objectSpeed ) );
          if ( $(window).width() > 728 && windowBottom > objectBottom) {

          $(this).animate({
            'opacity': 1,
            'top': 0,
          }, objectSpeed, "linear");

          }
        });

        $('.slide-right').each(function(i) {
          $(this).parent().css('overflow', 'hidden');
          var objectBottom = $(this).offset().top;
          var windowBottom = $(window).scrollTop() + $(window).height();
          // Retrieve the optional speed parameter so objects can slide in at different speeds
          var objectSpeed = $(this).data('speed');
          if ( !objectSpeed ) { objectSpeed = 1500 }

          if ($(window).width() > 728 && windowBottom > objectBottom) {
            // console.log('slide-right should be opening');
            $(this).animate({
              'left': 0,
            }, objectSpeed, "linear");
          }

        });
    });
  });