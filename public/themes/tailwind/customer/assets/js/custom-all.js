// Show the first tab and hide the rest
$('#tabs-nav li:first-child').addClass('active');
$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function(){
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.tab-content').hide();
  
  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});


$(document).on('click', '.tab_block_main ul li a', function (e) {
  e.preventDefault();
  var curTabContentId = $(this).attr('href');
  $(".tab_block_main ul li").removeClass("active"); 
  $(this).parents('.tab_block_main').find('ul li a').removeClass('active');
  $(this).addClass('active');
  $(this).parents('.tab_block_main').find('.tab_content .tab_block').removeClass('active');
  $(curTabContentId).addClass("active");
  
}); 






function sliceSize(dataNum, dataTotal) {
  return (dataNum / dataTotal) * 360;
}
function addSlice(sliceSize, pieElement, offset, sliceID, color) {
  $(pieElement).append("<div class='slice "+sliceID+"'><span></span></div>");
  var offset = offset - 1;
  var sizeRotation = -179 + sliceSize;
  $("."+sliceID).css({
    "transform": "rotate("+offset+"deg) translate3d(0,0,0)"
  });
  $("."+sliceID+" span").css({
    "transform"       : "rotate("+sizeRotation+"deg) translate3d(0,0,0)",
    "background-color": color
  });
}
function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
  var sliceID = "s"+dataCount+"-"+sliceCount;
  var maxSize = 179;
  if(sliceSize<=maxSize) {
    addSlice(sliceSize, pieElement, offset, sliceID, color);
  } else {
    addSlice(maxSize, pieElement, offset, sliceID, color);
    iterateSlices(sliceSize-maxSize, pieElement, offset+maxSize, dataCount, sliceCount+1, color);
  }
}
function createPie(dataElement, pieElement) {
  var listData = [];
  $(dataElement+" span").each(function() {
    listData.push(Number($(this).html()));
  });
  var listTotal = 0;
  for(var i=0; i<listData.length; i++) {
    listTotal += listData[i];
  }
  var offset = 0;
  var color = [
    "cornflowerblue", 
    "olivedrab", 
    "orange", 
    "tomato", 
    "crimson", 
    "purple", 
    "turquoise", 
    "forestgreen", 
    "navy", 
    "gray"
  ];
  for(var i=0; i<listData.length; i++) {
    var size = sliceSize(listData[i], listTotal);
    iterateSlices(size, pieElement, offset, i, 0, color[i]);
    $(dataElement+" li:nth-child("+(i+1)+")").css("border-color", color[i]);
    offset += size;
  }
}
createPie(".pieID.legend", ".pieID.pie");

// script to remove dropdown menus red class from index page
$(document).ready(function () {
  // Click event handler for the dropdown elements
  $('body').on('click', '.dropdown', function (event) {
    event.stopPropagation();
    $('.dropdown').removeClass('red'); 
    $(this).addClass('red'); 
    $('body').addClass('materialdesign');
  });
  // Click event handler for the document body
  $('body').on('click', function () {
    $('.dropdown').removeClass('red'); 
    $('body').removeClass('materialdesign');
  });
});

//Side Baar Menu Dropdown
jQuery(function ($) {
    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});


$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
}); 
});
$(document).ready(function(){
  $(".button-click").click(function(){
    $(".side-baar").addClass("open-div");
  });
});
$(document).ready(function(){
  $(".button-remove").click(function(){
    $(".side-baar").removeClass("open-div");
  });
});

// Sales Operator Form Show More Less More
$(function() {
  var isComplete = false; // a status class to check if all divs are visible or not
  $(".show-buton").slice(0, 1).show();
  
  $("#loadMore").on('click', function(e) {
    e.preventDefault();

    if (isComplete === true) {
      $(".show-buton").hide();
      isComplete = false;
      $("#loadMore").text('Load More');
    }

    $(".show-buton:hidden").slice(0, 2).slideDown();

    if ($(".show-buton:hidden").length == 0) {
      $("#loadMore").text('Show Less');
      isComplete = true;
    }

    $('html,body').animate({
      scrollTop: $(this).offset().top
    }, 1500);
  });
});

// Sales Operator Table All Check input
function checkAll(o) {
  var boxes = document.getElementsByTagName("input");
  for (var x = 0; x < boxes.length; x++) {
    var obj = boxes[x];
    if (obj.type == "checkbox") {
      if (obj.name != "check")
        obj.checked = o.checked;
    }
  }
}

// Sales Operator Table Show More Less More
var shownDefault = 4
var numShown = shownDefault; // Initial rows shown & index
var $table = $('.tbl').find('tbody');  // tbody containing all the rows
var numRows = $table.find('tr').length; // Total # rows
var moretext = "Show more";
var lesstext = "Show less";
$(document).ready(function () {
    $table.find('tr:gt(' + (numShown - 1) + ')').hide()                      
    $('#btn').click(function() {
        if (numShown === numRows) {
          // since we show all rows node, hiding some
        	numShown = shownDefault;
          $table.find('tr:gt(' + (numShown - 1) + ')').hide()
          $('#btn').text(moretext)                              
        } else {
        	numShown = numRows;
          $('#btn').text(lesstext)                    
        }        
        $table.find('tr:lt(' + numShown + ')').show();
    });        
});


// Notifaction header dropdown
$(document).ready(function() {
  $(".notification-drop .item").on('click',function() {
    $(this).find('ul').toggle();
  });
});



let index = 1;
const on = (listener, query, fn) => {
	document.querySelectorAll(query).forEach(item => {
		item.addEventListener(listener, el => {
			fn(el);
		})
	})
}
on('click', '.selectBtn', item => {
	const next = item.target.nextElementSibling;
	next.classList.toggle('toggle');
	next.style.zIndex = index++;
});
on('click', '.option', item => {
	item.target.parentElement.classList.remove('toggle');

	const parent = item.target.closest('.select').children[0];
	parent.setAttribute('data-type', item.target.getAttribute('data-type'));
	parent.innerText = item.target.innerText;
})



document.addEventListener("DOMContentLoaded", function() {
  let tabLinks = document.querySelectorAll('.tab_options a');
  tabLinks.forEach(function(tabLink) {
      tabLink.addEventListener('click', function(event) {
          event.preventDefault(); // Prevent the default behavior of the link

          let parentLi = tabLink.parentElement;
          if (!parentLi.classList.contains('active')) {
              let currentActiveTab = document.querySelector('.tab_options li a.active');
              if (currentActiveTab) {
                  currentActiveTab.classList.remove('active');
              }

              parentLi.classList.add('active');
          }
      });
  });
});


// Multipal Images Upload
jQuery(document).ready(function () {
  ImgUpload();
});
function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });
  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}


// Description Editor
Vue.use( CKEditor );
const app = new Vue( {
    el: '#app',
    data: {
        editor: ClassicEditor,
        editorData: '',
        editorConfig: {
            // The configuration of the editor.
        }
    }
} ); 





$(document).ready(function(){
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;
  setProgressBar(current);
  $(".next").click(function(){
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  //Add Class Active
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  next_fs.show();
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  opacity = 1 - now;
  current_fs.css({
  'display': 'none',
  'position': 'relative'
  });
  next_fs.css({'opacity': opacity});
  },
  duration: 500
  });
  setProgressBar(++current);
  });
  $(".previous").click(function(){
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  previous_fs.show();
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  opacity = 1 - now;
  current_fs.css({
  'display': 'none',
  'position': 'relative'
  });
  previous_fs.css({'opacity': opacity});
  },
  duration: 500
  });
  setProgressBar(--current);
  });
  function setProgressBar(curStep){
  var percent = parseFloat(100 / steps) * curStep;
  percent = percent.toFixed();
  $(".progress-bar")
  .css("width",percent+"%")
  }
  $(".submit").click(function(){
  return false;
  })
  });




  $(document).ready(function () {

// Country or location
let toggle = function(){
  document.querySelectorAll('.dropdown-wrapper')[0].classList.toggle('active');
}
let radioInputs = document.querySelectorAll('input[type="radio"]');
radioInputs.forEach(function(radioInput) {
  radioInput.addEventListener('click', function() {
      let dropdownWrapper = document.querySelector('.dropdown-wrapper');
      dropdownWrapper.classList.remove('active');
  });
});
document.querySelectorAll('.box-drop-countery')[0].addEventListener("click", toggle);



// Choose Channel
let toggle2 = function(){
  document.querySelectorAll('.dropdown-wrapper-two')[0].classList.toggle('active');
}
let radioInputs2 = document.querySelectorAll('.dropdown-wrapper-two input[type="radio"]');
radioInputs.forEach(function(radioInput) {
  radioInput.addEventListener('click', function() {
      let dropdownWrapper = document.querySelector('.dropdown-wrapper-two');
      dropdownWrapper.classList.remove('active');
  });
});
document.querySelectorAll('.box-drop-countery-tow')[0].addEventListener("click", toggle2);


// Choose Channel
let toggle3 = function(){
  document.querySelectorAll('.dropdown-wrapper-three')[0].classList.toggle('active');
}
let radioInputs3 = document.querySelectorAll('.dropdown-wrapper-three input[type="radio"]');
radioInputs.forEach(function(radioInput) {
  radioInput.addEventListener('click', function() {
      let dropdownWrapper = document.querySelector('.dropdown-wrapper-three');
      dropdownWrapper.classList.remove('active');
  });
});
document.querySelectorAll('.box-drop-countery-three')[0].addEventListener("click", toggle3);

// Choose Channel
let toggle4 = function(){
  document.querySelectorAll('.dropdown-wrapper-four')[0].classList.toggle('active');
}
let radioInputs4 = document.querySelectorAll('.dropdown-wrapper-four input[type="radio"]');
radioInputs.forEach(function(radioInput) {
  radioInput.addEventListener('click', function() {
      let dropdownWrapper = document.querySelector('.dropdown-wrapper-four');
      dropdownWrapper.classList.remove('active');
  });
});
document.querySelectorAll('.box-drop-countery-four')[0].addEventListener("click", toggle4);

// Choose Channel
let toggle5 = function(){
  document.querySelectorAll('.dropdown-wrapper-five')[0].classList.toggle('active');
}
let radioInputs5 = document.querySelectorAll('.dropdown-wrapper-five input[type="radio"]');
radioInputs.forEach(function(radioInput) {
  radioInput.addEventListener('click', function() {
      let dropdownWrapper = document.querySelector('.dropdown-wrapper-five');
      dropdownWrapper.classList.remove('active');
  });
});
document.querySelectorAll('.box-drop-countery-five')[0].addEventListener("click", toggle5);

// Choose Channel
let toggle6 = function(){
  document.querySelectorAll('.dropdown-wrapper-six')[0].classList.toggle('active');
}
let radioInputs6 = document.querySelectorAll('.dropdown-wrapper-six input[type="radio"]');
radioInputs.forEach(function(radioInput) {
  radioInput.addEventListener('click', function() {
      let dropdownWrapper = document.querySelector('.dropdown-wrapper-six');
      dropdownWrapper.classList.remove('active');
  });
});
document.querySelectorAll('.box-drop-countery-six')[0].addEventListener("click", toggle6);

});



$('.dropdown').click(function () {
  $('.dropdown').removeClass('red');
  $(this).addClass('red');
});

$('.materialdesign').click(function () {
  $('.dropdown').not(this).removeClass('red');
});



$('.tab-nav span').on('click', function() {
  $([$(this).parent()[0], $($(this).data('href'))[0]]).addClass('active').siblings('.active').removeClass('active');
});

window.onload = function(){
  $(function() {
  
    $('.show-less').hide();
  
    $(".show-more").click(function(e) {
      $(this).hide();
      $(this).closest(".full-post").find(".hide-block").fadeIn();
      $(this).closest(".full-post").find(".show-less").show();
    });
  
    $(".show-less").click(function() {
      $(this).hide();
      $(this).closest(".full-post").find(".hide-block").fadeOut();
      $(this).closest(".full-post").find(".show-more").show();
    });
  
  });
  }; 
  



  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
  

  
  







  
  



