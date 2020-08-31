function ajaxClickResponse() {
  let response = this.response;

  if (response.length > 12) {
    document.body.innerHTML = response;
    return false; //error
  }

  let digit_list = document.getElementsByClassName('screen_digit_text');

  for (let i = 0; i < response.length; i++) {
    digit_list[i].innerHTML = response.charAt(i);
  }
}
