function createBook(){
    var form = document.forms.namedItem("f_book");
    var formData = new FormData(form);
    
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            var e = document.getElementById("notice");
            e.innerHTML = this.responseText;
            document.getElementById("f_chapter").classList.remove("e_hidden");
        } 
    };
    xmlhttp.open("POST","../../../private/controller/admin/create_book.php", true); 
    xmlhttp.send(formData);

    return false;
}

function searchAuthor(){
    var aut_id = document.getElementById("i_author").value;
    if(!aut_id){
        //listAdminPhones("");
    }else{
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() { 
            if (this.readyState == 4 && this.status == 200) {
                var e = document.getElementById("t_author");
                e.innerHTML = this.responseText;
                e.classList.remove("e_hidden");
                e.classList.add("e_show");
            } 
        };
        xmlhttp.open("GET","../../../private/controller/admin/list_author.php?aut_codigo=" + aut_id, true); 
        xmlhttp.send();
    }
    return false;

}

function createChapter(){
    var cap_num = document.getElementById("i_cap_num").value;
    var cap_title = document.getElementById("i_cap_title").value;
    var isbn = document.getElementById("i_isbn").value;
    var author = document.getElementById("i_author").value;
    
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            var e = document.getElementById("notice");
            e.innerHTML = this.responseText;
            document.getElementById("f_chapter").classList.remove("e_hidden");
        } 
    };
    xmlhttp.open("GET","../../../private/controller/admin/create_chapter.php?i_cap_num=" + cap_num + "&i_cap_title=" + cap_title + "&i_isbn=" + isbn + "&i_author=" + author, true); 
    xmlhttp.send();

    return false;
}

function listBooks(){
    // var table = document.getElementById("t_list_books");

    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() { 
        if (this.readyState == 4 && this.status == 200) { 
            var e = document.getElementById("t_list_books");
            e.innerHTML = this.responseText;
        } 
    };
    xmlhttp.open("GET","../../../private/controller/admin/list_books.php", true); 
    xmlhttp.send();

    return false;
}