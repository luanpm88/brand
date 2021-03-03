function removeMaskLoading() {
    $('.mask-loading-effect').remove();
}

function addMaskLoading(text, callback, options) {
    removeMaskLoading();
    var wait = 400;
    
    if (typeof(text) === 'undefined') {
        text = '';
    }

    if (typeof(options) === 'undefined') {
        options = {};
    }

    if (typeof(options.wait) !== 'undefined') {
        wait = options.wait;
    }
    
    var div = $('<div>').html(`<div class="mask-loading-effect"><div class="content">
        <div class="mask-loading mb-3"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
        `+text+`</div><div>`
    );
    
    $('body').append(div);
    
    div.fadeIn(400, function() {
        if (typeof(callback) !== 'undefined') {
            setTimeout(function() { callback(); }, wait);
        }
    });
}

function initJs(container) {
    if (container == null) {
        container = $('body');
    }
    feather.replace();

    // commin soon link
    container.find('.coming_soon').on('click', function(e) {
        e.preventDefault();
        
        var comingPopup = new Popup({
            url: COMING_SOON_URL,
        });
        comingPopup.load();
    });
}

function ready(method) {
    window.addEventListener("DOMContentLoaded", function(){
      method();
    });
  };