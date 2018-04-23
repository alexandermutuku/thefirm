
document.addEventListener('DOMContentLoaded', function () {

// Get all "navbar-burger" elements
var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

// Add a click event on each of them
$navbarBurgers.forEach(function ($el) {
	$el.addEventListener('click', function () {

		// Get the target from the "data-target" attribute
		var target = $el.dataset.target;
		var $target = document.getElementById(target);

		// Toggle the class on both the "navbar-burger" and the "navbar-menu"
		$el.classList.toggle('is-active');
		$target.classList.toggle('is-active');

	});
});
}
});


// used for accordions
var acc =
document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;


        if (panel.style.maxHeight) {
					//accordion is open, we need to close it
            // panel.style.display = "none";
						panel.style.maxHeight = null;
        } else {
					//accordion is closed
            // panel.style.display = "block";
						panel.style.maxHeight = panel.scrollHeight + "px";

        }
    });
}


// active tabs need repair jquery
// $(".sexytabs").tabs({
//   show: { effect: "slide", direction: "left", duration: 200, easing: "easeOutBack" } ,
//   hide: { effect: "slide", direction: "right", duration: 200, easing: "easeInQuad" }
// });

$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){
							$("html,body").animate({scrollTop:
							$(".thetop").offset().top},"1000");
return false})})

//floating chat
var element = $('.floating-chat');
var myStorage = localStorage;

if (!myStorage.getItem('chatID')) {
    myStorage.setItem('chatID', createUUID());
}

setTimeout(function() {
    element.addClass('chat-enter');
}, 1000);

element.click(openElement);

function openElement() {
    var messages = element.find('.chat-messages');
    var textInput = element.find('.chat-text-box');
    element.find('>i').hide();
    element.addClass('chat-expand');
    element.find('.chat-chat').addClass('chat-enter');
    var strLength = textInput.val().length * 2;
    textInput.keydown(onMetaAndEnter).prop("disabled", false).focus();
    element.off('click', openElement);
    element.find('.chat-header chat-button').click(closeElement);
    element.find('#sendMessage').click(sendNewMessage);
    messages.scrollTop(messages.prop("scrollHeight"));
}

function closeElement() {
    element.find('.chat-chat').removeClass('chat-enter').hide();
    element.find('>i').show();
    element.removeClass('chat-expand');
    element.find('.chat-header chat-button').off('click', closeElement);
    element.find('#sendMessage').off('click', sendNewMessage);
    element.find('.chat-text-box').off('keydown', onMetaAndEnter).prop("disabled", true).blur();
    setTimeout(function() {
        element.find('.chat-chat').removeClass('chat-enter').show()
        element.click(openElement);
    }, 500);
}

function createUUID() {
    // http://www.ietf.org/rfc/rfc4122.txt
    var s = [];
    var hexDigits = "0123456789abcdef";
    for (var i = 0; i < 36; i++) {
        s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
    }
    s[14] = "4"; // bits 12-15 of the time_hi_and_version field to 0010
    s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
    s[8] = s[13] = s[18] = s[23] = "-";

    var uuid = s.join("");
    return uuid;
}

function sendNewMessage() {
    var userInput = $('.chat-text-box');
    var newMessage = userInput.html().replace(/\<div\>|\<br.*?\>/ig, '\n').replace(/\<\/div\>/g, '').trim().replace(/\n/g, '<br>');

    if (!newMessage) return;

    var messagesContainer = $('.chat-messages');

    messagesContainer.append([
        '<li class="self">',
        newMessage,
        '</li>'
    ].join(''));

    // clean out old message
    userInput.html('');
    // focus on input
    userInput.focus();

    messagesContainer.finish().animate({
        scrollTop: messagesContainer.prop("scrollHeight")
    }, 250);
}

function onMetaAndEnter(event) {
    if ((event.metaKey || event.ctrlKey) && event.keyCode == 13) {
        sendNewMessage();
    }
}

// sticky nav on Scrolling Effect
$(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect
      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })

// Load more buttom -- refer to blog.joson for contents
var LoadMore = function(userOptions) {
  this.options = {
    "pageSize": 10,
    "dataUrl": "",
    "container": "#container",
    "triggerText": "VIEW MORE ARTICLES",
    "triggerLoadingText": "...loading",
    "trigger": "#showMoreTrigger",
    "callback": null
  };
  $.extend(this.options, userOptions);
  this._index = 0;
  this._itemsCurrentlyDisplayed = 0;
};

LoadMore.prototype.scrollToElement = function(selector, time, verticalOffset) {
  time = typeof(time) != 'undefined' ? time : 1000;
  verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
  var element = $(selector);
  var offset = element.offset();
  var offsetTop = offset.top + verticalOffset;
  //if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
  //setTimeout(function () {
  //        window.scrollTo(0, offsetTop);
  //    }, 100
  //);
  //} else {
  /*$('html,body').scrollTo(selector, {
    duration: 1500
  });*/

  $('html,body').animate({
      // scrollTop: offsetTop
  }, 800, function(){
      $('html,body').clearQueue();
  });
  //}
};

LoadMore.prototype.loadData = function() {
  var self = this;
  self.triggerFeedback(true);
  $.getJSON(self.options.dataUrl,
    function(data) {
      self.triggerFeedback(false);
      var totalResults = data.results.length;
      var items = [];
      var dataArr = data.results.splice(self._index, self.options.pageSize);
      if (dataArr.length > 0) {
        $.each(dataArr, function(key, val) {
          items.push("<div class='result'><h2>" + val.title + "</h2>" + "<p>" + val.description + "</p></div>");
        });
        $(items.join("")).appendTo(self.options.container);
        var scrollToEl = $(".result").get(self._index);
        self._index += self.options.pageSize;
        if (scrollToEl) {
          // occurs only when not the initial
          // load of data
          self.scrollToElement(scrollToEl);
        }
        self._itemsCurrentlyDisplayed += dataArr.length;
        if (self._itemsCurrentlyDisplayed >= totalResults) {
          self._trigger.hide();
        }
        if (self.options.callback != null) {
          self.options.callback();
        }
      }
    });
};

LoadMore.prototype.triggerFeedback = function(isLoading) {
  if (isLoading) {
    this._trigger.text(this.options.triggerLoadingText);
  } else {
    this._trigger.text(this.options.triggerText);
  }
};

LoadMore.prototype.init = function() {
  var self = this;
  $(document).ready(
    function() {
      self._trigger = $(self.options.trigger);
      self.loadData();
      self._trigger.on("click", function() {
        self.loadData();
      });
    });
};

// example usage
var loadMore = new LoadMore({
  // "dataUrl": "https://s3-us-west-2.amazonaws.com/s.cdpn.io/173252/data.json",
	"dataUrl": "blog.json",
  "pageSize": 3
});

loadMore.init();


// Video conttrols
var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed
vid.pause();
// to capture IE10
vidFade();
});


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})
