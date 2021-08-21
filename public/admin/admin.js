$(document).ready(function () {
    $(".nav-treeview .nav-link, .nav-link").each(function () {
        var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
        var link = this.href;
        if(link == location2){
            $(this).addClass('active');
            $(this).parent().parent().parent().addClass('menu-is-opening menu-open');

        }
    });

    let experience1 = document.getElementById("year_experience1").value;
    if (experience1 != "") {
        document.getElementById("div2").style.display = 'block';
    } else {
        document.getElementById("div2").style.display = 'none';
    }
    let experience2 = document.getElementById("year_experience2").value;
    if (experience2 != "") {
        document.getElementById("div3").style.display = 'block';
    } else {
        document.getElementById("div3").style.display = 'none';
    }
    let experience3 = document.getElementById("year_experience3").value;
    if (experience3 != "") {
        document.getElementById("div4").style.display = 'block';
    } else {
        document.getElementById("div4").style.display = 'none';
    }
    let experience4 = document.getElementById("year_experience4").value;
    if (experience4 != "") {
        document.getElementById("div5").style.display = 'block';
    } else {
        document.getElementById("div5").style.display = 'none';
    }
    let experience5 = document.getElementById("year_experience5").value;
    if (experience5 != "") {
        document.getElementById("div6").style.display = 'block';
    } else {
        document.getElementById("div6").style.display = 'none';
    }
    let experience6 = document.getElementById("year_experience6").value;
    if (experience6 != "") {
        document.getElementById("div7").style.display = 'block';
    } else {
        document.getElementById("div7").style.display = 'none';
    }
    let experience7 = document.getElementById("year_experience7").value;
    if (experience7 != "") {
        document.getElementById("div8").style.display = 'block';
    } else {
        document.getElementById("div8").style.display = 'none';
    }

    document.querySelector("#year_experience1").oninput = function(){
        if (this.value.length == 4){
            document.getElementById("div2").style.display = 'block';
        } else {
            document.getElementById("div2").style.display = 'none';
        }
    }
    document.querySelector("#year_experience2").oninput = function(){
        if (this.value.length == 4){
            document.getElementById("div3").style.display = 'block';
        } else {
            document.getElementById("div3").style.display = 'none';
        }
    }
    document.querySelector("#year_experience3").oninput = function(){
        if (this.value.length == 4){
            document.getElementById("div4").style.display = 'block';
        } else {
            document.getElementById("div4").style.display = 'none';
        }
    }
    document.querySelector("#year_experience4").oninput = function(){
        if (this.value.length == 4){
            document.getElementById("div5").style.display = 'block';
        } else {
            document.getElementById("div5").style.display = 'none';
        }
    }
    document.querySelector("#year_experience5").oninput = function(){
        if (this.value.length == 4){
            document.getElementById("div6").style.display = 'block';
        } else {
            document.getElementById("div6").style.display = 'none';
        }
    }
    document.querySelector("#year_experience6").oninput = function(){
        if (this.value.length == 4){
            document.getElementById("div7").style.display = 'block';
        } else {
            document.getElementById("div7").style.display = 'none';
        }
    }
    document.querySelector("#year_experience7").oninput = function(){
        if (this.value.length == 4){
            document.getElementById("div8").style.display = 'block';
        } else {
            document.getElementById("div8").style.display = 'none';
        }
    }

    $('.delete-btn').click(function () {
        var res = confirm('Подтвердите действия');
        if(!res){
            return false;
        }
    });

})

tinymce.init({
    selector: 'textarea',
    plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    relative_urls: false,
    file_picker_callback : elFinderBrowser
});

function elFinderBrowser (callback, value, meta) {
    tinymce.activeEditor.windowManager.openUrl({
        title: 'File Manager',
        url: '/elfinder/tinymce5',
        /**
         * On message will be triggered by the child window
         *
         * @param dialogApi
         * @param details
         * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
         */
        onMessage: function (dialogApi, details) {
            if (details.mceAction === 'fileSelected') {
                const file = details.data.file;

                // Make file info
                const info = file.name;

                // Provide file and text for the link dialog
                if (meta.filetype === 'file') {
                    callback(file.url, {text: info, title: info});
                }

                // Provide image and alt text for the image dialog
                if (meta.filetype === 'image') {
                    callback(file.url, {alt: info});
                }

                // Provide alternative source and posted for the media dialog
                if (meta.filetype === 'media') {
                    callback(file.url);
                }

                dialogApi.close();
            }
        }
    });
}
