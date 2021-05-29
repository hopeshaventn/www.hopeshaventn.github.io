//Cookies.set("ieat","true",{expires:2});
//document.cookie = "promo_shown=1; Max-Age=2600000; Secure";
//x-cdn="SameSite=None "
//Set-Cookie: id=a3fWa; Expires=Thu, 21 Oct 2021 07:28:00 GMT; Secure; HttpOnly;
//Cookies.set("x-cdn","true",{expires:2},"HttpOnly")
/*Set - Cookie;
promo_shown = 1;
SameSite = Strict;*/
//document.cookie = "x-cdn=1; Max-Age=2600000; Secure; HttpOnly=true; SameSite=None";
function getCookieValue(name) {
  const nameString = name + "=";

  const value = document.cookie.split(";").filter((item) => {
    return item.includes(nameString);
  });

  if (value.length) {
    return value[0].substring(nameString.length, value[0].length);
  } else {
    return "";
  }
}
console.log("x-cdn"+getCookieValue("cookie_check")); //returns nick123
