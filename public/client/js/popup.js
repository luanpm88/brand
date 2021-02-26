class Popup {
    constructor(options) {
        var _this = this;

        _this.id = '_' + Math.random().toString(36).substr(2, 9);
        _this.options = options;
        
        if (!$('#' + _this.id).length) {
            $('body').append(`
                <div class="modal fade" id="`+_this.id+`" tabindex="-1">
                <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div></div>
            `);
        }

        // popup bootstrap
        _this.popup = new bootstrap.Modal(document.getElementById(_this.id), {
            keyboard: false
        })

        // container
        this.container = $('#' + _this.id);
    }
    
    show() {
        this.popup.show();
    }
    
    load(options) {
        var _this = this;

        // options
        if (typeof(options) !== 'undefined') {
            _this.options = $.extend(_this.options, options); 
        }
        
        _this.show();
        
        $.ajax({
            url: _this.options.url,
            type: 'GET',
            dataType: 'html',
            data: _this.options.data,
        }).done(function(response) {
            _this.container.html(response);

            // 
            initJs(_this.container);
        }).fail(function(jqXHR, textStatus, errorThrown){
            // for debugging
            alert(errorThrown);
            document.write(jqXHR.responseText);
        });
    }
    
    loadHtml(html) {
        var _this = this;
        
        _this.container.html(html);
    }
}