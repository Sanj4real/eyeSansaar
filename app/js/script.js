
function closeNav() {
  document.getElementById("mobileSidebar").style.width = "0";
}

// Set counter default to zero
var counter = 0

// Display total
$("#counter").text(counter);

// When button is clicked
$("#add").click(function(){
  //Add 10 to counter
  counter = counter + 1;
  // Display total
  $("#counter").text(counter);
});


//Subtract
$("#subtract").click(function(){
  counter = counter - 1;
  $("#counter").text(counter);
});
 
const grid = document.getElementById('grid');
const list = document.getElementById('listing');

function listContent(){
  const grid = document.getElementById('grid');
  const listing = document.getElementById('listing');
  const listContent = document.getElementById('listContent');
  const gridContent = document.getElementById('gridContent');

  listing.classList.add("active");
  grid.classList.remove("active");
  listContent.classList.add("active");
  gridContent.classList.remove("active");
}
function gridContent(){
  const grid = document.getElementById('grid');
  const listing = document.getElementById('listing');
  const listContent = document.getElementById('listContent');
  const gridContent = document.getElementById('gridContent');

  grid.classList.add("active");
  listing.classList.remove("active");
  gridContent.classList.add("active");
  listContent.classList.remove("active");
}
 
function openNav() {
  document.getElementById("mobileSidebar").style.width = "250px";
}






// slider
$(".slider-wrap").owlCarousel({
  loop: true,
  margin: 0,
  dots: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    576: {
      items: 1,
      nav: true,
    },
    767: {
      items: 1,
      nav: true,
    },
    1020: {
      items: 1,
      nav: true,
      dots: true
    },
  },
});

$(".brands-wrap").owlCarousel({
  loop: true,
  margin: 20,
  dots: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 2,
      nav: true,
    },
    576: {
      items: 3,
      nav: true,
    },
    767: {
      items: 4,
      nav: false,
    },
    1020: {
      items: 4,
      nav: true,
      loop: false,
    },
  },
});

$(".slider-one").owlCarousel({
  loop: true,
  margin: 20,
  dots: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 2,
      nav: true,
    },
    576: {
      items: 3,
      nav: true,
    },
    767: {
      items: 4,
      nav: false,
    },
    1020: {
      items: 4,
      nav: true,
      loop: false,
    },
  },
});

$(".product-slider").owlCarousel({
  loop: true,
  margin: 0,
  dots: false,
  margin: 20,
  responsiveClass: true,
  responsive: {
    0: {
      items: 2,
      nav: true,
    },
    576: {
      items: 3,
      nav: true,
    },
    767: {
      items: 4,
      nav: false,
    },
    1020: {
      items: 4 ,
      nav: true,
      loop: false,
    },
  },
});

// testimonial
var sync1 = $(".testimonial-right");
var sync2 = $(".navigation-thumbs");

var thumbnailItemClass = ".owl-item";

var slides = sync1
  .owlCarousel({
    video: true,
    startPosition: 12,
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 6000,
    autoplayHoverPause: false,
    nav: false,
    dots: false,
  })
  .on("changed.owl.carousel", syncPosition);

function syncPosition(el) {
  $owl_slider = $(this).data("owl.carousel");
  var loop = $owl_slider.options.loop;

  if (loop) {
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
  } else {
    var current = el.item.index;
  }

  var owl_thumbnail = sync2.data("owl.carousel");
  var itemClass = "." + owl_thumbnail.options.itemClass;

  var thumbnailCurrentItem = sync2
    .find(itemClass)
    .removeClass("synced")
    .eq(current);

  thumbnailCurrentItem.addClass("synced");

  if (!thumbnailCurrentItem.hasClass("active")) {
    var duration = 300;
    sync2.trigger("to.owl.carousel", [current, duration, true]);
  }
}
var thumbs = sync2
  .owlCarousel({
    startPosition: 12,
    items: 3,
    loop: false,
    margin: 10,
    autoplay: false,
    nav: false,
    dots: false,
    onInitialized: function (e) {
      var thumbnailCurrentItem = $(e.target)
        .find(thumbnailItemClass)
        .eq(this._current);
      thumbnailCurrentItem.addClass("synced");
    },
  })
  .on("click", thumbnailItemClass, function (e) {
    e.preventDefault();
    var duration = 300;
    var itemIndex = $(e.target).parents(thumbnailItemClass).index();
    sync1.trigger("to.owl.carousel", [itemIndex, duration, true]);
  })
  .on("changed.owl.carousel", function (el) {
    var number = el.item.index;
    $owl_slider = sync1.data("owl.carousel");
    $owl_slider.to(number, 100, true);
  });



$(".relatedWork-slider").owlCarousel({
  loop: true,
  margin: 15,
  dots: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    576: {
      items: 2,
      nav: true,
    },
    767: {
      items: 3,
      nav: true,
    },
    1020: {
      items: 3,
      nav: true,
      loop: false,
    },
  },
});
