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

function validatePassword()
{
  var password = document.passwordForm.new_password.value;
  var confirm = document.passwordForm.confirm_new.value;

  if (password.trim() != confirm.trim())
  {
    alert("The passwords do not match.");
    return false;
  }
}

function deleteCheck()
{
  var confirm = document.deleteForm.deleteConfirm.value;

  if (confirm.trim() != "delete")
  {
    alert("Please type \"delete\" to delete the account.");
    return false;
  }
}
