function username(username)
  {
       if(username == "") {
      return false;
    }
    if(username.length < 8) {
        return false;
      }
    re = /[a-z]/;
      if(!re.test(username)) {
        return false;
      }else{
        return true;
      }

    }
function email(email) {

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)==false)
    {
     return false;
    } else{
      return true;
    }
  }   
