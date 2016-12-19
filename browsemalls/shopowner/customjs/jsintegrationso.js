function oncategoryselection(sel){
	$.post("mainreturnsub1.php",{main:sel.value},function(data, status){
        $('#sub1').html(data);
        $('#sub2').html("");
        $('#sub3').html("");
    });
}

function onsub1categoryselection(sel){
    $.post("sub1returnsub2.php",{sub1:sel.value},function(data, status){
        $('#sub2').html(data);
        $('#sub3').html("");
    });
}

function onsub2categoryselection(sel){
    $.post("sub2returnsub3.php",{sub2:sel.value},function(data, status){
        $('#sub3').html(data);
    });
}


function showFileSize() {
    var input, file,ext;
    document.getElementById("fileinput").style.border = "0px solid white";
    // (Can't use `typeof FileReader === "function"` because apparently
    // it comes back as "object" on some browsers. So just see if it's there
    // at all.)
    if (!window.FileReader) {
        console.log("The file API isn't supported on this browser yet.");
        return;
    }

    input = document.getElementById('fileinput');
    if (!input) {
        console.log("Couldn't find the fileinput element.");
        document.getElementById("fileinput").style.border = "1px solid red";
        return false;
    }
    else if (!input.files) {
        console.log("This browser doesn't seem to support the `files` property of file inputs.");
        document.getElementById("fileinput").style.border = "1px solid red";
        return false;
    }
    else if (!input.files[0]) {
        console.log("Please select a file!");
        document.getElementById("fileinput").style.border = "1px solid red";
        return false;
    }
    else {
        file = input.files[0];
        ext = file.name.split('.').pop();
        if(ext == "png" || ext == "jpeg" || ext=="jpg"){
            document.getElementById("filestatus").innerHTML = file.name + " is " + file.size/1024 + " KB";
            document.getElementById("fileinput").style.border = "0px solid white";
            return true;
        } 
        else{
            document.getElementById("filestatus").innerHTML = ext + " - Not supported";
            document.getElementById("fileinput").style.border = "1px solid red";
            return false;
        }
        console.log("File " + file.name + " is " + file.size + " bytes in size");
    }
        
}