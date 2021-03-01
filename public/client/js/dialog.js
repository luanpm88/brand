class Dialog {
    constructor(type, options) {
        var _this = this;
        _this.id = '_' + Math.random().toString(36).substr(2, 9);

        this.options = {};
        this.loadingHtml = '<div class="dialog-loading"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>';
        
        if (type == null) {
            this.type = type;
        }
        
        // options
        if (options != null) {
            this.options = options;
        }

        // on ok
        if (this.options.ok != null) {
            this.ok = this.options.ok;
        }

        // on yes
        if (this.options.yes != null) {
            this.yes = this.options.yes;
        }

        // on no
        if (this.options.no != null) {
            this.no = this.options.no;
        }

        // on cancel
        if (this.options.cancel != null) {
            this.cancel = this.options.cancel;
        }

        // on close
        if (this.options.close != null) {
            this.close = this.options.close;
        }

        // title
        if (this.options.title != null) {
            this.title = this.options.title;
        }

        // message
        if (this.options.message != null) {
            this.message = this.options.message;
        }
        
        // remove and create new one
        if ($('#' + _this.id).length) {
            $('#' + _this.id).remove();
        }
        var dialog = $(`<div class="modal fade" id="`+_this.id+`" tabindex="-1">`).html(this.renderHtml(type));
        $('body').append(dialog);        
        
        // popup bootstrap
        _this.modal = new bootstrap.Modal(document.getElementById(_this.id), {
            keyboard: false
        })

        // dialog
        _this.dialog = $('#' + _this.id);
        
        // show dialog
        this.load();
    }
    
    renderHtml(type) {
        switch(type) {
            case "confirm":
                if (this.title == null) {
                    this.title = 'Xác nhận';
                }
                return `
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">`+this.title+`</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                `+this.message+`
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary dialog-ok">OK</button>
                                <button type="button" class="btn btn-secondary dialog-cancel" data-bs-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                `;
                case "alert":
                    if (this.title == null) {
                        this.title = 'Thông báo';
                    }
                    return `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">`+this.title+`</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    `+this.message+`
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary dialog-ok">OK</button>
                                </div>
                            </div>
                        </div>
                    `;
                case "notification":
                    if (this.title == null) {
                        this.title = LANG_ALERT;
                    }
                    return `
                        <div class="dialog-container dialog-large">
                            <div class="dialog-body p-5">
                                <h2 class="title d-flex align-items-center mb-3">
                                    <span>`+this.title+`</span>
                                </h2>
                                `+this.message+`
                                <div>
                                    <button class="btn btn-info btn-mc_primary dialog-ok mr-2 mt-4 px-5">`+LANG_OK+`</button>
                                </div>
                            </div>
                        </div>
                    `;
                case "yesno":
                    if (this.title == null) {
                        this.title = LANG_CONFIRMATION;
                    }
                    return `
                    <div class="dialog-container">
                        <div class="dialog-header">
                            <h2 class="title">`+this.title+`</h2>
                            <i class="lnr lnr-cross close"></i>
                        </div>
                        <div class="dialog-body">
                            `+this.message+`
                        </div>
                        <div class="dialog-footer">
                            <button class="btn btn-primary btn-mc_primary dialog-yes mr-2">`+LANG_YES+`</button>
                            <button class="btn btn-outline-secondary dialog-no mr-2">`+LANG_NO+`</button>
                        </div>
                    </div>
                    `;
            case y:
              // code block
              break;
            default:
              // code block
        }
    }
    
    show() {
        this.modal.show();
    }
    
    hide() {
        this.modal.hide();
    }
    
    loading() {
        this.dialog.prepend(this.loadingHtml);
    }
    
    static hide() {
        $('.dialog').fadeOut();
        $('html').css('overflow', 'auto');
    }
    
    applyJs() {
        var _this = this;
        
        // init js
        initJs(_this.dialog);

        // click close button
        _this.dialog.find(".close").click(function() {
            if (_this.close != null) {
                _this.close(_this);
            }

            _this.dialog.hide();
        });
        
        // click close button
        _this.dialog.find(".dialog-cancel").click(function() {
            if (_this.cancel != null) {
                _this.cancel(_this);
            }

            _this.dialog.hide();
        });
        
        // click ok button
        _this.dialog.find(".dialog-ok").click(function() {
            if (_this.ok != null) {
                _this.ok(_this);
            }
            
            _this.hide();
        });

        // click yes button
        _this.dialog.find(".dialog-yes").click(function() {
            if (_this.yes != null) {
                _this.yes(_this);
            }
            
            _this.hide();
        });

        // click no button
        _this.dialog.find(".dialog-no").click(function() {
            if (_this.no != null) {
                _this.no(_this);
            }
            
            _this.hide();
        });
    }
    
    load(message) {
        var _this = this;
        
        if (typeof(message) !== 'undefined') {
            _this.message = message;
        }
        _this.show();
        
        _this.dialog.find('.dialog-body').html(message);
        
        // apply js for new content
        _this.applyJs();
    }
    
    loadHtml(html) {
        var _this = this;
        
        _this.dialog.html(html);
        
        _this.applyJs();
    }
}
