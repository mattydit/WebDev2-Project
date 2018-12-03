function showhide(id)
{
    var e = document.getElementById(id);

    if(e.style.display == 'block')
        {
            //e.style.display = 'none';
            $(e).hide(1000);
        }
    else
        {
            //e.style.display = 'block';
            $(e).toggle(1000);
        }
}

//function validatePassword()
//{

//}
