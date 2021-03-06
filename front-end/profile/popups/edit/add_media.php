<div class="popup-outside loading" data-modal="true" id="add-media">
    <div class="popup-inside">
        <div class="popup-top">
            <h3>add new media</h3>
            <a href='#' class="closebtn" data-closeBtn='true'><i class="icon icons-close"></i></a>
        </div>
        <div class="tooltip-error"></div>
        <div class="popup-body">
            <form class="popup-form">
                <div class="form-part">
                    <label>select a file on your computer</label>
                    <input type="text" disabled class="plupload-media-upload-input" /> <a href="#" class="blue-button" id="plupload-media-upload-button">Browse</a>
                    <span class="notes">(jpg, png, gif, pdf, xls, xlsx, ppt, pptx, rar, zip)</span>
                </div>
                <div class="form-part">
                    <label>add title</label>
                    <textarea name="description"></textarea>
                    <span class="notes">You have <span class="chars-left">100</span> chars left.</span>
                </div>
                <div class="form-part">
                    <label>or paste the link to your video on YouTube or Vimeo</label>
                    <input type="text" class="text-input" name="video-link" value="http://" />
                </div>
                <div class="form-part">
                    <label>or paste the link to your Slideshare presentation</label>
                    <input type="text" class="text-input" name="slideshare-link" value="http://" />
                </div>
                <div class="button-block">
                    <a href='#' class="origin-button media-add">add</a>
                    <a href='#' class="origin-button" data-closeBtn="true">cancel</a>
                </div>
            </form>
        </div>
        <div class="big-loader loaderImageBig"></div>
    </div>
</div>