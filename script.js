$(document).ready(function ()
{
    $("#phone").mask("+38(999) 999-9999");

    $("#name").on("keypress", function(e)
    {

        if (e.keyCode == 8 ) {}
        else
        {
            var letters='AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZzАаБбВвГгДдЕеЁёЖжЗзИийКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщьыъЭэЮюЯя';
            return (letters.indexOf(String.fromCharCode(e.which))!=-1);
        }
    });

    $("#sername").on("keypress", function(e)
    {
        if (e.keyCode == 8) {}
        else
        {
            var letters='AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZzАаБбВвГгДдЕеЁёЖжЗзИийКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщьыъЭэЮюЯя';
            return (letters.indexOf(String.fromCharCode(e.which))!=-1);
        }
    });

    $("#town").on("keypress", function(e)
    {
        if (e.keyCode == 8) {}
        else
        {
            var letters='AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZzАаБбВвГгДдЕеЁёЖжЗзИийКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщьыъЭэЮюЯя';
            return (letters.indexOf(String.fromCharCode(e.which))!=-1);
        }
    });

    $("#town").on("keypress", function(e)
    {
        if (e.keyCode == 8) {}
        else
        {
            var letters='AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZzАаБбВвГгДдЕеЁёЖжЗзИийКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщьыъЭэЮюЯя';
            return (letters.indexOf(String.fromCharCode(e.which))!=-1);
        }
    });

    $("#email").on("keypress", function(e)
    {
        if (e.keyCode == 8 || e.keyCode == 46) {}
        else
        {
            var letters='AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz@';
            return (letters.indexOf(String.fromCharCode(e.which))!=-1);
        }
    });

    $("#summ").on("keypress", function(e)
    {
        if (e.keyCode == 8 || e.keyCode == 46) {}
        else
        {
            var letters='0123456789.';
            return (letters.indexOf(String.fromCharCode(e.which))!=-1);
        }
    });

    $("#numberorder").on("keypress", function(e)
    {
        if (e.keyCode == 8 || e.keyCode == 46) {}
        else
        {
            var letters='0123456789.';
            return (letters.indexOf(String.fromCharCode(e.which))!=-1);
        }
    });

    $("#townorder").on("keypress", function(e)
    {
        if (e.keyCode == 8 || e.keyCode == 46) {}
        else
        {
            var letters='AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';
            return (letters.indexOf(String.fromCharCode(e.which))!=-1);
        }
    });


});


