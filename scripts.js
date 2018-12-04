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

function validateRegister()
{
  var regex = /^[A-Za-z\s]+$/;
  var emailvalid = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

  var name = document.registrationForm.firstname.value;
  var surname = document.registrationForm.surname.value;
  var email = document.registrationForm.email.value;
  var pass = document.registrationForm.password.value;
  var pass_confirm = document.registrationForm.password_confirm.value;

  if(!name.match(regex))
  {
    alert("Only letters allowed in the name field.");
    return false;
  }
  if(!surname.match(regex))
  {
    alert("Only letters allowed in the surname field.");
    return false;
  }
  if(!email.match(emailvalid))
  {
    alert("Please enter a valid email address in the format: example@example.com");
    return false;
  }

}
